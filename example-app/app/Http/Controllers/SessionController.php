<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {

    public function create() {
        return view('sessions.create');
    }
    public function store(Request $request) {

        $credentials = $request->validate([
            "email" => ['email', 'required'],
            "password" => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            session()->regenerate(); //prevent session fixation
            return redirect('/')->with('success', 'Welcome Back');
        }

        throw ValidationException::withMessages(['email' => 'Exception: the provided credentials do not match our records']);

        // return redirect()
        //     ->back()
        //     ->withInput(['email' => request('email')])
        //     ->withErrors(['email' => 'the provided credentials do not match our records']);
    }
    public function destroy() {

        auth()->logout();
        return redirect("/")->with('success', 'Goodbye!');
    }
}