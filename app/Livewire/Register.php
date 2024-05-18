<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    public function register(){
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5'
        ]);

        $validated['password'] = Hash::make($validated['password']);

       $user = User::create($validated);

       Auth::login($user);

       session()->flash('success', 'Registration Account Successfully !');

       return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
