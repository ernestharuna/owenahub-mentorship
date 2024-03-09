<?php

namespace App\Livewire\Mentor\Profile;

use Livewire\Component;
use App\Models\MiscInfo;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

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

        if (MiscInfo::where('mentor_id', auth()->id())->exists()) {
            request()->user('mentor')->misc_info()->update([
                'expertise' => $this->expertise,
                'skills' => $this->skills,
                'bio' => $this->bio,
            ]);
            return redirect()->with('status', 'Updated!');
        }

        request()->user('mentor')->misc_info()->create([
            'expertise' => $this->expertise,
            'skills' => $this->skills,
            'bio' => $this->bio,
        ]);
        return redirect('/mentor/dashboard')->with('status', 'Profile updated!');
    }

    public function render()
    {
        return view('livewire.mentor.profile.profile-biography');
    }
}
