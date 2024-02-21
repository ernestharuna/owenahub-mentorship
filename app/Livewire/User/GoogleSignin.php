<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Features\SupportFormObjects\Form;

class GoogleSignin extends Component
{
    public function render()
    {
        return view('livewire.user.google-signin');
    }
}
