<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Textarea extends Component
{
    public $text;
    public $rows;
    public function render()
    {
        return view('livewire.textarea');
    }
}
