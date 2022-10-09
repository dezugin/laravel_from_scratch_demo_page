<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{

    public function create(){
        return view('sessions.create');
    }
    public function store(){
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success','Welcome Bach');
        }

    //     throw ValidationException::withMessages([
    //         'email' => 'Your provided credentials could not be Verified'
    //     ]);
        else{   return back()
              ->withInput()
              ->withErrors(['email'=>'Your provided credentials could not be verified']);
            }

    }
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Bai');
    }
    
}
