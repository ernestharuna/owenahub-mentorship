<?php

namespace App\Livewire;

use App\Models\Session;
use Livewire\Component;

class Calender extends Component
{
    public $all_dates;
    public $arr = [];

    public function mount()
    {
        $this->all_dates = Session::get();
        foreach ($this->all_dates as $date) {
            array_push($this->arr, $date->week_day);
        }
    }

    public function render()
    {
        return view('livewire.calender')->with([
            'dates' => $this->arr,
        ]);
    }
}
