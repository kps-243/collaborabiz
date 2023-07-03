<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreaDescrib extends Component
{
    public $imgPath;
    public $title;
    public $text;
    public function render()
    {
        return view('livewire.crea-describ');
    }
}
