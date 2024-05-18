<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|min:3|',
            'email' => 'required|min:3|email',
            'phone' => 'required|min:3'
        ]);

        Customer::create($validated);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-customer');
    }
}
