<?php

namespace App\Http\Controllers;

use App\Models\exercise;
use App\Models\performance;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function indexWeb()
    {
            if(Auth::user()->hasRole('admin')){

                return view('performances.index', ['performances' => performance::all(), 'exercise' => exercise::all(), 'users' =>User::all()]);
            }else{
                $id = Auth::id();
                return view('performances.index', ['performances' => performance::all()->where('user_id', $id), 'exercise' => exercise::all()]);

            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function createWeb()
    {
        return view('performances.create',['exercises' => exercise::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        $request->validate([
            'date'=>'required|date',
            'startTime'=>'required',
            'finishTime' => 'required|after:startTime',
            'reps' => 'required|max:11',
            'user_id' => 'required|max:20',
            'exercise_id' => 'required|max:20'

        ]);
        $request->merge(["date"=>date('Y-m-d')]);
        $request->merge(["startTime"=>date('Y-m-d H:i:s', strtotime($request['date'].$request['startTime']))]);
        $request->merge(["finishTime"=>date('Y-m-d H:i:s', strtotime($request['date'].$request['finishTime']))]);
        $response = [
            'success' => true,
            'data'    => performance::create($request->all()),
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];

        return response()->json($response, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWeb(Request $request)
    {

        $request->merge(["startTime"=>date('Y-m-d H:i:s', strtotime($request['date'].$request['startTime']))]);
        $request->merge(["finishTime"=>date('Y-m-d H:i:s', strtotime($request['date'].$request['finishTime']))]);

        performance::create($request->except('_token'));
        return redirect()->route('performances.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showWeb($id)
    {
        if (performance::find($id) === null) {
            return redirect()->route('performances.index');
        }
        else{
            if(Auth::user()->hasRole('admin')){
                return view('performances.show', ['performance' => performance::find($id),
                    'user' => User::all(),
                    'exercise' => exercise::all()
                ]);
            }
            else{
                return view('performances.show', ['performance' => performance::find($id),
                    'exercise' => exercise::all()
                ]);
            }

        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('performances.edit', ["performance" => performance::find($id), "exercises"=>exercise::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->merge(["startTime"=>date('Y-m-d H:i:s', strtotime($request['date'].$request['startTime']))]);
        $request->merge(["finishTime"=>date('Y-m-d H:i:s', strtotime($request['date'].$request['finishTime']))]);
        performance::find($id)->update($request->except(['_token', 'method']));
        return redirect()->route('performances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        performance::destroy($id);
        return redirect()->route('performances.index');
    }
public function indexFunctionWeb(Request $request, $id)
{
    if (Auth::user()->hasRole('admin')) {
        return view('performances.usershow', ['performances' => performance::where('user_id', $id)->get(),
            'exercise' => exercise::all(),
            'user' => User::all()
        ]);
    }
    else{
        return redirect()->route('performances.index');
    }
}
}
