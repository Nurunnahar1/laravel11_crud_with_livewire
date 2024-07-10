<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateCustomer extends Component
{


    public function render()
    {
        return view('livewire.create-customer');
    }




    public $name = "";
    public $email = "";
    public $phone = ""; 
    
    public function save(){
        $validated = $this->validate([
            'name' => 'required | max:255',
            'email' => 'required |email |unique:users| max:255',
            'phone' => 'required |unique:users|'
        ]);
        User::create($validated);
        session()->flash('success', 'User create successfully');
        return $this->redirect('/customers', navigate:true);
    }
}
