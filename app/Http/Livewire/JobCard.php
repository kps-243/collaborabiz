<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobCard extends Component
{
    public $title;
    public $describ;
    public $date;
    public $duration;
    public $slug;
    public $type;
    public $image;
    public function render()
    {
        return view('livewire.job-card');
    }
}
