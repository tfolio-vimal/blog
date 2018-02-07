<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\WelcomeAgain;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))]);
        
        auth()->login($user);
        \Mail::to($user)->send(new WelcomeAgain($user));
        session()->flash('message','You have been registered successfully');
        return redirect()->home();
    }
}
