<?php

namespace App\Livewire;

use App\Models\FeaturedArticles;
use Livewire\Component;

class FeaturedArticle extends Component
{
    public $feat_article;

    public function mount()
    {
        $this->feat_article = FeaturedArticles::first();
    }
    public function render()
    {
        return view('livewire.featured-article');
    }
}
