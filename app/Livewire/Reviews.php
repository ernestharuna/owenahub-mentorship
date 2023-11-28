<?php

namespace App\Livewire;

use Livewire\Component;

class Reviews extends Component
{
    public $review;

    public function render()
    {
        return view('livewire.reviews');
    }
}
