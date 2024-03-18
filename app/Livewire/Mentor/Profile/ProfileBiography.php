<?php

namespace App\Livewire\Mentor\Profile;

use Livewire\Component;
use App\Models\MiscInfo;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ProfileBiography extends Component
{
    #[Validate('required')]
    public $gender;

    #[Validate('required')]
    public $expertise;

    #[Validate('required')]
    public $company;

    #[Validate('required')]
    public $role;

    #[Validate('required|max:80')]
    public $skills;

    #[Validate('required|max:80')]
    public $country;

    #[Validate('required|max:500')]
    public $bio;

    public $countries = [
        'Algeria', 'Angola', 'Benin', 'Botswana', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cameroon',
        'Central African Republic', 'Chad', 'Comoros', 'Democratic Republic of the Congo', 'Republic of the Congo',
        'Djibouti', 'Egypt', 'Equatorial Guinea', 'Eritrea', 'Eswatini', 'Ethiopia', 'Gabon', 'Gambia', 'Ghana',
        'Guinea', 'Guinea-Bissau', 'Ivory Coast', 'Kenya', 'Lesotho', 'Liberia', 'Libya', 'Madagascar', 'Malawi',
        'Mali', 'Mauritania', 'Mauritius', 'Morocco', 'Mozambique', 'Namibia', 'Niger', 'Nigeria', 'Rwanda', 'Sao Tome and Principe',
        'Senegal', 'Seychelles', 'Sierra Leone', 'Somalia', 'South Africa', 'South Sudan', 'Sudan', 'Tanzania', 'Togo',
        'Tunisia', 'Uganda', 'Zambia', 'Zimbabwe',
    ];

    public function mount()
    {
        $this->gender = Auth::user()->misc_info->gender ?? "";
        $this->expertise = Auth::user()->misc_info->expertise ?? "";
        $this->company = Auth::user()->misc_info->company ?? "";
        $this->role = Auth::user()->misc_info->role ?? "";
        $this->skills = Auth::user()->misc_info->skills ?? "";
        $this->country = Auth::user()->misc_info->country ?? "";
        $this->bio = Auth::user()->misc_info->bio ?? "";
    }

    public function saveBio()
    {
        $this->validate();

        if (MiscInfo::where('mentor_id', auth()->id())->exists()) {
            request()->user('mentor')->misc_info()->update([
                'gender' => $this->gender,
                'expertise' => $this->expertise,
                'company' => $this->company,
                'role' => $this->role,
                'skills' => $this->skills,
                'country' => $this->country,
                'bio' => $this->bio,
            ]);
            return redirect()->with('status', 'Updated!');
        }

        request()->user('mentor')->misc_info()->create([
            'gender' => $this->gender,
            'expertise' => $this->expertise,
            'company' => $this->company,
            'role' => $this->role,
            'skills' => $this->skills,
            'country' => $this->country,
            'bio' => $this->bio,
        ]);
        return redirect('/mentor/dashboard')->with('status', 'Profile updated!');
    }

    public function render()
    {
        return view('livewire.mentor.profile.profile-biography');
    }
}
