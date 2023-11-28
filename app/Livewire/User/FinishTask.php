<?php

namespace App\Livewire\User;

use App\Models\Review;
use App\Models\UserBite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Rule;

class FinishTask extends Component
{
    public $slice_id;
    public $bite_id;
    public $can_review;
    public $bite_completed;

    /**
     * Accepts the current slice & bite ID
     * 
     * Checks if the user has reviewed this slice
     * 
     * Checks if bite is completed
     */
    public function mount($slice_id = null, $bite_id = null)
    {
        $this->slice_id = $slice_id;
        $this->bite_id = $bite_id;

        $user_reviews = DB::table('reviews')->where([
            ['slice_id', '=', $slice_id],
            ['user_id', '=', auth()->user()->id],
        ])->count();

        if ($user_reviews > 0) {
            $this->can_review = false;
        };

        $bite_status = DB::table('user_bites')->where([
            ['user_id', '=', auth()->user()->id],
            ['bite_id', '=', $bite_id],
        ])->exists();

        if ($bite_status) {
            $this->bite_completed = true;
        }
    }

    #[Rule('required')]
    public $comment = "";

    #[Rule('required')]
    public $rating = 5;

    public function save()
    {
        // dd($this->user_reviews);

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
            if ($this->can_review) {
                Review::create($review);
            }
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
