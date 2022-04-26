<?php

namespace App\Http\Controllers;


class SessionController extends Controller
{
    public function create(){

        return view('sessions.create');
    }

    public function store(){

        // validate
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate and log in users
        // base on the credential provided
        if(! auth()->attempt($attributes)){
            session()->regenerate();
            // Redirect to the homepage with a message
            return redirect('/')->with('success', 'Welcome Back!');
        }

        // auth fails
        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credential could not be verified']);

    }

    public function destroy(){

        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }


}
