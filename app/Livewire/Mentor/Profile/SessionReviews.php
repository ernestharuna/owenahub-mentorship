<?php

namespace App\Livewire\Mentor\Profile;

use App\Models\MentorReview;
use Livewire\Component;

class SessionReviews extends Component
{
    public function render()
    {
        return view('livewire.mentor.profile.session-reviews')->with([
            'reviews' => MentorReview::where('mentor_id', auth()->id())->latest()->get()
        ]);
    }
}
