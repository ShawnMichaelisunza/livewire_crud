<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if(Auth::attempt($validated)){
            request()->session()->regenerate();

            session()->flash('success', 'Login Account Successfully !');
            return redirect()->route('index');
        }

        $this->addError('email', 'The password provided does not match the email !');
    }
}
