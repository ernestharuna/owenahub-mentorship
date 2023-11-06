<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FeaturedArticles;

class FeaturedArticle2 extends Component
{
    public $feat_article;

    public function mount()
    {
        $this->feat_article = FeaturedArticles::skip(1)->take(1)->first();
    }

    public function render()
    {
        return view('livewire.featured-article2');
    }
}
