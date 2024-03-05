<?php

namespace App\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

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

        request()->user()->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
        ]);

        return redirect()->back()->with('status', 'Saved!');
    }

    public function render()
    {
        return view('livewire.user.profile.profile-information');
    }
}
