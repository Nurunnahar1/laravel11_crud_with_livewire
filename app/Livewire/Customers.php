<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Customers extends Component
{
    public $customers = [];

    public $search = '';
    // public function mount(){
    //     $this->customers = User::all();
    // }
    
    
    
    public function render()
    {


        if(!$this->search){
            $this->customers = User::all();

        }else{
             $this->customers = User::where('name','like', '%'.$this->search. '%')->get();
        }



        return view('livewire.customers');
    }

    public function deleteCustomer(User $id){
        $id->delete();
        session()->flash('success', 'User deleted successfully');
        return $this->redirect('/customers', navigate:true);
    }
}
