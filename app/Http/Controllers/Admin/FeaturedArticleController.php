<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeaturedArticles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturedArticleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (FeaturedArticles::count() >= 2) {
            return back()->with('error', 'There can only be two featured posts');
        }

        $data = $request->validate([
            'title' => ['required', 'min:5', 'max:100'],
            'category' => 'required',
            'description' => ['required', 'min:10', 'max:150'],
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $data['image_path'] = $request->file('image_path')->store('article_images', 'public');
            }
            $request->user()->featured_article()->create($data);
            return redirect(route('admin.dashboard'));
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, FeaturedArticles $article)
    {
        $data = $request->validate([
            'title' => ['required', 'min:5', 'max:100'],
            'category' => 'required',
            'description' => ['required', 'min:10', 'max:150'],
            'image_path' => 'sometimes|nullable',
            'content' => 'required',
        ]);

        try {
            $article->update($data);
            return redirect(route('admin.dashboard'))->with('status', 'Update Succesfull');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('status', 'Update failed');
        }
    }

    public function show(FeaturedArticles $article)
    {
        return view('admin.articles.edit', [
            'article' => $article
        ]);
    }

    public function delete(FeaturedArticles $article)
    {
        $article->delete();
        return back()->with('status', 'Article deleted');
    }
}
