<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonForm extends Component
{
    public $text;
    public $link;
    public $color;
    public function render()
    {
        return view('livewire.button-form');
    }
}
