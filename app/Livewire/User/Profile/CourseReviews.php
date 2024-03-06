<?php

namespace App\Livewire\User\Profile;

use App\Models\Review;
use Livewire\Component;

class CourseReviews extends Component
{
    public $course_reviews;

    public function mount()
    {
        $this->course_reviews = Review::where('user_id', auth()->id())->with('slice')->latest()->get() ?? [];
    }

    public function updateReview($id)
    {
        dd($id);
        $post = Review::findOrFail($id);
        $post->update([
            // 'comment' => $comment
        ]);
        // dd($post);
    }

    public function render()
    {
        return view('livewire.user.profile.course-reviews', $this->course_reviews);
    }
}
