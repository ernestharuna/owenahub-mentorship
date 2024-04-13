<?php

namespace App\Http\Controllers;

use App\Models\Slice;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\SliceEnrollment;
use App\Models\FeaturedArticles;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Show all articles
     */
    public function articles()
    {
        $articles = Article::with('admin')->latest()->simplePaginate(9);
        return view('guest.articles.index', [
            'articles' => $articles
        ]);
    }
    /**
     * Show one article
     */
    public function show_article(Article $article)
    {
        return view('guest.articles.show', [
            'article' => $article
        ]);
    }

    /**
     * Show one featured article
     */
    public function show_feat_article(FeaturedArticles $article)
    {
        return view('guest.articles.show', [
            'article' => $article
        ]);
    }

    /**
     * Show all courses to guest
     */
    public function slices()
    {
        $slices = Slice::with('admin')->latest()->simplePaginate(8);
        return view('guest.slice.index', [
            'slices' => $slices
        ]);
    }

    /**
     * Show one course to guest
     */
    public function show_slice(Slice $slice)
    {
        $slice_price = '';
        $is_enrolled = false;

        if ($slice->price) {
            $slice_price = number_format($slice->price, 0, '', ',');
        }

        if (Auth::check()) {
            if (SliceEnrollment::where([
                ['user_id', '=', auth()->user()->id], ['slice_id', '=', $slice->id]
            ])->exists()) {
                $is_enrolled = true;
            }
        }

        return view('guest.slice.overview', [
            'slice' => $slice,
            'slice_price' => $slice_price,
            'is_enrolled' => $is_enrolled
        ]);
    }
}
