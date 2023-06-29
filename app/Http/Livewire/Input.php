<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $label;
    public function render()
    {
        return view('livewire.input');
    }
}
