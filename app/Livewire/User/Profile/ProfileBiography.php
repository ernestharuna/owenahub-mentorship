<?php

namespace App\Livewire\User\Profile;

use App\Models\MiscInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProfileBiography extends Component
{
    #[Validate('required')]
    public $expertise;

    #[Validate('required')]
    public $skills;

    #[Validate('required')]
    public $bio;

    public function mount()
    {
        $this->expertise = Auth::user()->misc_info->expertise ?? "";
        $this->skills = Auth::user()->misc_info->skills ?? "";
        $this->bio = Auth::user()->misc_info->bio ?? "";
    }

    public function saveBio()
    {
        $this->validate();

        if (MiscInfo::where('user_id', auth()->id())->exists()) {
            request()->user()->misc_info()->update([
                'expertise' => $this->expertise,
                'skills' => $this->skills,
                'bio' => $this->bio,
            ]);
            return back()->with('status', 'Updated!');
        }

        request()->user()->misc_info()->create([
            'expertise' => $this->expertise,
            'skills' => $this->skills,
            'bio' => $this->bio,
        ]);

        return back()->with('status', 'Saved!');
    }

    public function render()
    {
        return view('livewire.user.profile.profile-biography');
    }
}
