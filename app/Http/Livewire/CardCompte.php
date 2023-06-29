<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardCompte extends Component
{
    public $title;
    public $text;
    public $img;
    public $link;
    public function render()
    {
        return view('livewire.card-compte');
    }
}
