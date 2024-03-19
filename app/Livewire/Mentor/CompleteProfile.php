<?php

namespace App\Livewire\Mentor;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompleteProfile extends Component
{
    /**
     * Tracks completed sections
     */
    public $bio_complete;
    public $social_complete;
    public $session_complete;

    /**
     * Array for all completed sections
     */
    public $profile_status;

    // Percentage value of array values
    public $percentage;

    public function calculatePercentage($statusArray)
    {
        $completed = 0;
        $totalCount = count($statusArray);

        foreach ($statusArray as $status) {
            if ($status) {
                $completed++;
            }
        }

        if ($totalCount === 0) {
            return 0; // Avoid division by zero
        }

        return ($completed / $totalCount) * 100;
    }

    public function mount()
    {
        /**
         * Checks if misc_info table exists
         */
        if (Auth::guard('mentor')->user()->misc_info) {
            $this->bio_complete = true;
        } else {
            $this->bio_complete = false;
        }

        /**
         * Checks if social handle is present
         */
        if (Auth::guard('mentor')->user()->social_handle) {
            if (Auth::guard('mentor')->user()->social_handle->linkedin && Auth::guard('mentor')->user()->social_handle->x_twitter) {
                $this->social_complete = true;
            }
        } else {
            $this->social_complete = false;
        }

        /**
         *  Checks if mentor has set sessions
         */
        if (Auth::guard('mentor')->user()->session->count() > 0) {
            $this->session_complete = true;
        } else {
            $this->session_complete = false;
        }

        /**
         * bundles TRUE/FALSE values into an array
         */
        $this->profile_status = [
            'part_1' => $this->bio_complete,
            'part_2' => $this->social_complete,
            'part_3' => $this->session_complete,
            'part_4' => true // Because use has filled names and email
        ];

        /**
         * Creates percentage value of completion
         */
        $this->percentage = $this->calculatePercentage($this->profile_status);
        $this->percentage = ceil($this->percentage);
    }

    public function render()
    {
        return view('livewire.mentor.complete-profile')->with([
            'complete' => $this->profile_status
        ]);
    }
}
