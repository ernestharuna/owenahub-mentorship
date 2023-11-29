<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CheckedBadge extends Component
{
    public $bite;
    public $completed;

    public function mount($bite = null)
    {
        $this->bite = $bite;

        $this->completed = DB::table('user_bites')
            ->where([
                ['bite_id', '=', $bite],
                ['user_id', '=', auth()->user()->id],
            ])->exists();
    }

    public function render()
    {
        return view('livewire.user.checked-badge');
    }
}
