<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeaturedArticles;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $articles = Article::latest()->paginate(5);
        $feat_articles = FeaturedArticles::get();

        return view('admin.dashboard', [
            'articles' => $articles,
            'feat_articles' => $feat_articles
        ]);
    }
}
