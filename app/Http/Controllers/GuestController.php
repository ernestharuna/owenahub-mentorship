<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function articles()
    {
        $articles = Article::with('admin')->latest()->simplePaginate(8);
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
}
