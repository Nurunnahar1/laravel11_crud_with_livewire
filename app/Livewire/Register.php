<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser(){
        // dd($this->all());
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users|email',
            'password' => 'required|max:6|max:255',
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        Auth::login($user);
        session()->flash('success', 'User registered successfully');
        return $this->redirect('/customers', navigate:true);
    }
}
