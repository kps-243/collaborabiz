<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InterestSection extends Component
{
    public $text;
    public $link;
    public $title;
    public $color;
    public function render()
    {
        return view('livewire.interest-section');
    }
}
