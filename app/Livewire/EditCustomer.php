<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;

    public function mount(Customer $customer){

        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function update(){
        $validated = $this->validate([
            'name' => 'required|min:3|',
            'email' => 'required|min:3|email',
            'phone' => 'required|min:3'
        ]);

        $this->customer->update($validated);
        session()->flash('success', 'Customer Updated Successfully !');
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
}
