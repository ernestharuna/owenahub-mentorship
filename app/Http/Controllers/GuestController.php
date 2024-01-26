<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\FeaturedArticles;
use App\Models\Slice;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function articles()
    {
        $articles = Article::with('admin')->latest()->simplePaginate(9);
        return view('guest.articles.index', [
            'articles' => $articles
        ]);
    }

    public function show_article(Article $article)
    {
        return view('guest.articles.show', [
            'article' => $article
        ]);
    }

    public function show_feat_article(FeaturedArticles $article)
    {
        return view('guest.articles.show', [
            'article' => $article
        ]);
    }

    public function slices()
    {
        $slices = Slice::with('admin')->latest()->simplePaginate(8);
        return view('guest.slice.index', [
            'slices' => $slices
        ]);
    }

    public function show_slice(Slice $slice)
    {
        $slice_price = '';

        if ($slice->price) {
            $slice_price = number_format($slice->price, 2, '.', ',');
        }
        return view('guest.slice.overview', [
            'slice' => $slice,
            'slice_price' => $slice_price
        ]);
    }
}
