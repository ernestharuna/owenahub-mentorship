<?php

namespace App\Livewire\User\Profile;

use App\Models\Review;
use Livewire\Component;

class CourseReviews extends Component
{
    public $course_reviews;

    public function mount()
    {
        $this->course_reviews = Review::where('user_id', auth()->id())->latest()->get() ?? [];
    }

    public function updateReview($id)
    {
        $post = Review::findOrFail($id);

        dd($post);
    }

    public function render()
    {
        return view('livewire.user.profile.course-reviews', $this->course_reviews);
    }
}
