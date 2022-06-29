<?php

namespace App\Http\Controllers;


use App\Models\exercise;
use App\Models\performance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexFunction(Request $request, $id)
    {
        return performance::where('user_id', $id)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexWeb()
    {
        if (Auth::user()->hasRole('admin')) {

            return view('users.index', ['users' => User::all()]);
        } else {
            $id = Auth::id();
            return redirect()->route('performances.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createWeb()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWeb(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '1',
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showWeb($id)
    {
        return view('users.show', [
            'user' => User::find($id),
        ]);
        //Role doesn't work
        if (performance::find($id) === null) {
            return view('exercises.index', ['exercises' => exercise::all()]);
        } else {
            if (Auth::user()->hasRole('admin')) {
                return view('users.show', [
                    'user' => User::find($id),
                ]);
            } else {
                return view('exercises.index', ['exercises' => exercise::all()]);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editWeb($id)
    {
        $user = User::find($id);
        return view('users.edit', ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateWeb(Request $request, $id)
    {
        User::find($id)->update($request->except(['_token', 'method']));
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyWeb($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
