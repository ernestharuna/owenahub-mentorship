<?php

namespace App\Livewire;

use App\Models\Mentor;
use Livewire\Component;

class TopContributors extends Component
{
    public $mentors;

    public function mount()
    {
        $this->mentors = Mentor::where('email_verified_at', '!=', null)->inRandomOrder()->limit(4)->get();
    }
    public function render()
    {
        return view('livewire.top-contributors')->with([
            'mentors' => $this->mentors
        ]);
    }
}
