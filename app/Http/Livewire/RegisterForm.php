<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $userType;
    public function render()
    {
        return view('livewire.register-form');
    }
}
