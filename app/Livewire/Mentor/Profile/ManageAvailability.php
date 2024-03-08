<?php

namespace App\Livewire\Mentor\Profile;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ManageAvailability extends Component
{
    /**
     * form values
     */
    #[Validate('required')]
    public $week_day;

    #[Validate('required')]
    public $start_time;

    #[Validate('required')]
    public $end_time;

    /**
     * Form state and function toggler
     */
    public $toggle = false;
    public function toggler()
    {
        $this->toggle = !$this->toggle;;
    }

    public function saveSession()
    {
        $this->validate();
        request()->user('mentor')->session()->create([
            'week_day' => $this->week_day,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ]);
        $this->toggle = false;

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.mentor.profile.manage-availability');
    }
}
