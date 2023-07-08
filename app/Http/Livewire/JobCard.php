<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobCard extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.job-card');
    }
}
