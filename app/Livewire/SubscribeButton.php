<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SubscribeButton extends Component
{
    #[Rule('required')]
    public $name = "";

    #[Rule('required')]
    public $email = "";

    public function save()
    {
        $this->validate();

        try {
            Subscriber::create(
                $this->only(['name', 'email'])
            );
            $this->name = "";
            $this->email = "";
            return redirect('/articles')->with('status', 'Email Registered!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }

    public function render()
    {
        return view('livewire.subscribe-button');
    }
}
