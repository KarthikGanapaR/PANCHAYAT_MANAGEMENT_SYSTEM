<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
           return redirect(route('home'));
        }
        return view('login');
    }

    function register(Request $request){
        if(Auth::check()){
            return redirect(route('home'));
         }
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
    }
    return redirect(route('login'))->with('error','Login Details are not valid');
}  

    function registerPost(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:3'
            ]);
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);

            if(!$user){
                return redirect(route('register'))->with("error","Registration Failed, Please try again");
    }
    return redirect(route('login'))->with("success","Registration successful");
}
    function logout(){
        // Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
