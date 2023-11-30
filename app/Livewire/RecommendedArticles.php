<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class RecommendedArticles extends Component
{
    public $articles;

    public function mount()
    {
        $this->articles = Article::inRandomOrder()->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.recommended-articles');
    }
}
