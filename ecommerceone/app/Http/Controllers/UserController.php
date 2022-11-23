<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('admin-only',auth()->user())){
            $users = User::all()->sortByDesc('id');
            return view('dashboard.users.index',compact("users"));
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('admin-only',auth()->user())){
            return view('dashboard.users.adduser');
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
        if(Gate::allows('admin-only',auth()->user())){
            return view ('dashboard.users.show', compact('user'));
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                return view ('dashboard.users.update', compact('user'));
            }else{
                return redirect()->route('users');
            }

        }else{
            return redirect()->route('welcome');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $data = User::find($id);
                $data->name = $request->name;
                $data->email = $request->email;
                $data->password = Hash::make($request->password);
                $data->save();
                return redirect()->route('users');
            }else{
                return redirect()->route('users');
            }

        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $user->delete();
                return redirect()->route('users');
            }else{
                return redirect()->route('users');
            }

        }else{
            return redirect()->route('welcome');
        }

    }
}
