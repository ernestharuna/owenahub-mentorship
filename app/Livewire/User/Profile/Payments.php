<?php

namespace App\Livewire\User\Profile;

use App\Models\Payment;
use Livewire\Component;

class Payments extends Component
{
    // public $data;

    // public function mount()
    // {
    //     $user_payments = Payment::where('user_id', auth()->id())->get();
    //     $this->data = $user_payments;
    // }

    public function render()
    {
        return view('livewire.user.profile.payments')->with([
            'payments' => Payment::where('user_id', auth()->id())->get()
        ]);
    }
}
