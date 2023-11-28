<?php

namespace App\Livewire\User;

use App\Models\Review;
use App\Models\UserBite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;

class FinishTask extends Component
{
    public $slice_id;
    public $bite_id;

    #[Rule('required')]
    public $comment = "";

    #[Rule('required')]
    public $rating = 5;

    public function mount($slice_id = null, $bite_id = null)
    {
        $this->slice_id = $slice_id;
        $this->bite_id = $bite_id;
    }

    public function save_review()
    {
        $complete_task = [
            'user_id' => Auth::id(),
            'bite_id' => $this->bite_id,
        ];

        $review = [
            'user_id' => Auth::id(),
            'slice_id' => $this->slice_id,
            'rating' => $this->rating,
            'comment' => $this->comment
        ];

        try {
            UserBite::create($complete_task);
            Review::create($review);
            return redirect(route('user.dashboard'))->with('status', 'Thank you!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.user.finish-task');
    }
}
