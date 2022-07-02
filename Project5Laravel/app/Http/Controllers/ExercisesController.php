<?php

namespace App\Http\Controllers;

use App\Models\exercise;
use App\Models\performance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return exercise::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexWeb()
    {
        //A normal user goes to /exercises they can't just access it. You have to be admin for it to acces.

        if(Auth::user()->hasRole('admin')){

            return view('exercises.index', ['exercises' => exercise::all()]);
        }else{
            $id = Auth::id();
            return redirect()->route('performances.index');
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
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        $request->validate([
            'titleEN'=>'required|max:191',
            'titleNL'=>'required|max:191',
            'instructionEN' => 'required|max:1000',
            'instructionNL' => 'required|max:1000',
            'media' => 'required|max:10000'
        ]);
        $response = [
            'success' => true,
            'data'    => exercise::create($request->all()),
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
        exercise::create($request->except('_token'));
        return redirect()->route('exercises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showweb($id)
    {
        if (exercise::find($id) === null) {
            return redirect()->route('exercises.index');
        } else {
            if (Auth::user()->hasRole('admin')) {
                return view('exercises.show', ['exercise' => exercise::find($id),
                    'user' => User::all(),
                    'exercises' => exercise::all()
                ]);
            } else {
                return redirect()->route('performances.index');
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(exercise $exercise)
    {
        return $exercise;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise = exercise::find($id);
        return view('exercises.edit', ["exercise" => $exercise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        exercise::find($id)->update($request->except(['_token', 'method']));
        return redirect()->route('exercises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        exercise::destroy($id);
        return redirect()->route('exercises.index');
    }
}
