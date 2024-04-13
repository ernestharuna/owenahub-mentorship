<?php

namespace App\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SubscribeButton extends Component
{
    #[Rule('required')]
    public $email = "";

    public function save()
    {
        $this->validate();

        try {
            if (NewsletterSubscriber::where('email', $this->email)->exists()) {
                $this->email = "";
                return redirect('/articles')->with('status', "Email is already subscribed! 🧐");
            } else {
                NewsletterSubscriber::create(
                    $this->only(['email'])
                );
                $this->email = "";
                return redirect('/articles')->with('status', 'Email Subscribed! 👍🏽');
            }
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
