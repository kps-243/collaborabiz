<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select extends Component
{
    public $label;
    public $name;
    public function render()
    {
        return view('livewire.select');
    }
}
