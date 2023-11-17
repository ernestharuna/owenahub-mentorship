<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeaturedArticles;
use App\Models\Slice;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $articles = Article::latest()->limit(5)->get();
        $feat_articles = FeaturedArticles::get();
        $slices = Slice::latest()->limit(5)->get();

        return view('admin.dashboard', [
            'articles' => $articles,
            'feat_articles' => $feat_articles,
            'slices' => $slices
        ]);
    }
}
