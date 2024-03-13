<?php

namespace App\Livewire\User\Profile;

use Livewire\Component;
use App\Models\SocialHandle;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ManageSocials extends Component
{
    #[Validate('max:30')]
    public $instagram;

    #[Validate('max:30')]
    public $linkedin;

    #[Validate('max:30')]

    #[Validate('max:30')]
    public $x_twitter;

    #[Validate('max:30')]
    public $facebook;

    public function mount()
    {
        $this->instagram = Auth::user()->social_handle->instagram ?? "";
        $this->linkedin = Auth::user()->social_handle->linkedin ?? "";
        $this->x_twitter = Auth::user()->social_handle->x_twitter ?? "";
        $this->facebook = Auth::user()->social_handle->facebook ?? "";
    }

    public function saveSocials()
    {
        if (SocialHandle::where('user_id', auth()->id())->exists()) {
            request()->user()->social_handle()->update([
                'instagram' => $this->instagram,
                'linkedin' => $this->linkedin,
                'x_twitter' => $this->x_twitter,
                'facebook' => $this->facebook,
            ]);
            return redirect('/user/dashboard')->with('status', 'Updated!');
        }

        request()->user()->social_handle()->create([
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'x_twitter' => $this->x_twitter,
            'facebook' => $this->facebook,
        ]);
        return redirect('/user/dashboard')->with('status', 'Saved!');
    }

    public function render()
    {
        return view('livewire.user.profile.manage-socials');
    }
}
