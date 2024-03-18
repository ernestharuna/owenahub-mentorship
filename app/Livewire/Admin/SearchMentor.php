<?php

namespace App\Livewire\Admin;

use App\Models\Mentor;
use Livewire\Component;

class SearchMentor extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.admin.search-mentor', [
            'mentors' => Mentor::search($this->search),
            'search' => $this->search
        ]);;
    }
}
