<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TitleInfo extends Component
{
    public $text;
    public function render()
    {
        return view('livewire.title-info');
    }
}
