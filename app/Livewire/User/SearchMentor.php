<?php

namespace App\Livewire\User;

use App\Models\Mentor;
use Livewire\Component;

class SearchMentor extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.user.search-mentor', [
            'mentors' => Mentor::search($this->search),
            'search' => $this->search
        ]);
    }
}
