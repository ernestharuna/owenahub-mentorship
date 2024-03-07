<?php

namespace App\Livewire\Mentor\Profile;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ProfileInformation extends Component
{
    #[Validate('required|min:2|alpha')]
    public $first_name;

    #[Validate('required|min:2|alpha')]
    public $last_name;

    public function mount()
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
    }

    public function saveInfo()
    {
        $this->validate();

        request()->user('mentor')->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
        ]);

        return redirect()->with('status', 'Saved!');
    }

    public function render()
    {
        return view('livewire.mentor.profile.profile-information');
    }
}
