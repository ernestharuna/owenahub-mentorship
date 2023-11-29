<?php

namespace App\Livewire\User;

use Livewire\Component;

class SliceProgress extends Component
{
    public $slice;

    // public function mount () {

    //     $this->slice = 
    // }
    public function render()
    {
        return view('livewire.user.slice-progress');
    }
}
