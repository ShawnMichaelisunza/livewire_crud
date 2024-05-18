<?php

namespace App\Livewire;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{

    use WithPagination;
    protected $paginationTheme='bootstrap';

    public $search;


    // public function mount(){
    //     $this->customers = ModelsCustomer::all();
    // }
    public function render()
    {
       if(! $this->search){
        $customers = ModelsCustomer::paginate(2);
       }else{

        $customers = ModelsCustomer::where('name', 'like', '%'. $this->search .'%' )->paginate(2);
       }
        return view('livewire.customer', ['customers' => $customers]);
    }


    // delete

    public function delete(ModelsCustomer $customer){
        $customer->delete();

        session()->flash('success', 'Customer Deleted Successfully !');
        return redirect()->route('index');
    }
}
