<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $link;
    public $text;
    public $color;
    public $type;
    public function render()
    {
        return view('livewire.button');
    }
}
