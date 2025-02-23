<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function ShowRegisterForm()
    {
        return view('register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'User created successfully');
    }
}
