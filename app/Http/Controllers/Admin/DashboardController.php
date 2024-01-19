<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeaturedArticles;
use App\Models\Mentor;
use App\Models\Slice;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $articles = Article::latest()->limit(5)->get();
        $article_count = $articles->count();

        $feat_articles = FeaturedArticles::get();

        $slices = Slice::latest()->limit(5)->get();
        $slice_count = $slices->count();

        $users = User::latest()->get();
        $verified_users = $users->where('email_verified_at', '!=', null)->count();
        $unverified_users = $users->where('email_verified_at', null)->count();

        $mentors = Mentor::latest()->get();
        $verified_mentors = $mentors->where('email_verified_at', '!=', null)->count();
        $unverified_mentors = $mentors->where('email_verified_at', null)->count();

        return view('admin.dashboard', [
            'articles' => $articles,
            'article_count' => $article_count,

            'feat_articles' => $feat_articles,

            'slices' => $slices,
            'slice_count' => $slice_count,

            'all_users' => $users->count(),
            'verified_users' => $verified_users,
            'unverified_users' => $unverified_users,

            'all_mentors' => $mentors->count(),
            'verified_mentors' => $verified_mentors,
            'unverified_mentors' => $unverified_mentors,
        ]);
    }
}
