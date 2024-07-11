<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";



    // public $customers = [];

    public $search = '';
    // public function mount(){
    //     $this->customers = User::all();
    // }
    
    
    
    public function render()
    {


        if(!$this->search){
            $customers = User::paginate(2);

        }else{
             $customers = User::where('name','like', '%'.$this->search. '%')->paginate(2);
        }



        return view('livewire.customers', ['customers' => $customers]);
    }

    public function deleteCustomer(User $id){
        $id->delete();
        session()->flash('success', 'User deleted successfully');
        return $this->redirect('/customers', navigate:true);
    }
}
