<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeroSection extends Component
{
    public $text;
    public function render()
    {
        return view('livewire.hero-section');
    }
}
