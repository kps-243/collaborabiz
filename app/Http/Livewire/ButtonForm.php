<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonForm extends Component
{
    public $text;
    public function render()
    {
        return view('livewire.button-form');
    }
}
