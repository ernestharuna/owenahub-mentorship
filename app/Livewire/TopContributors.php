<?php

namespace App\Livewire;

use App\Models\Mentor;
use Livewire\Component;

class TopContributors extends Component
{
    public function render()
    {
        return view('livewire.top-contributors')->with([
            'mentors' => Mentor::latest()->get()
        ]);
    }
}
