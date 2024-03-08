<?php

namespace App\Livewire\Mentor\Profile;

use App\Models\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SessionList extends Component
{
    public function removeSession($id)
    {
        $item = Session::findOrFail($id);
        $item->delete();
        return redirect('/mentor/dashboard/profile/manage-availability')->with('error', 'Date removed!');
    }

    public function render()
    {
        return view('livewire.mentor.profile.session-list')->with([
            'sessions' => Auth::user()->session()->latest()->get()
        ]);
    }
}
