<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request){
        // dump($request->name);
        // dump($request->password);
        // dump($request->email);
        User::create($request->all());
        return redirect()->route('user.index');
    }

    public function index()
    {
        $users = User::paginate(5);
        return view('user.index',compact('users'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->save();
        return redirect()->route('user.index');
    }

    public function password(User $user)
    {
        return view('user.password',['user' => $user]);
    }

    public function password_store(Request $request, User $user)
    {
        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if($password === $confirm_password){
            $user->password = Hash::make($password);
            $user->save();
            return redirect()->route('user.index');
        }
        return redirect()->route('user.password',['user' => $user]);
    }

    public function destroy(User $user)
    {
           $user->delete();
           return redirect()->route('user.index');
    }

}
