<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {



    public function create() {
        return view("register.create");
    }

    public function store() {

        $attributes = request()->validate([
            'name' =>  ['required', 'min:7', 'max:255'],
            'username' =>  ['required', 'min:7', 'max:255', 'unique:users,username'],
            'email' =>  ['required', 'min:7', 'max:255', 'email', 'unique:users,email'],
            'password' => ['required', 'min:7', 'max:255'],
        ], $this->dioCaneMessages());

        $user = User::create($attributes);
        auth()->login($user);
        // session()->flash('success', 'User created successfully');
        return redirect('/')->with('success', 'Your account has been created!');
    }

    public function dioCaneMessages() {
        return [
            'name.max' => 'Dio cane',

        ];
    }
}