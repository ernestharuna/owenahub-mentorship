<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            $request->user()->article()->create($data);
            return redirect(route('admin.dashboard'))->with('status', 'Article Published!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, Article $article)
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

    public function show(Article $article)
    {
        return view('admin.articles.edit', [
            'article' => $article
        ]);
    }

    public function delete(Article $article)
    {
        $article->delete();
        return back()->with('error', 'Article deleted');
    }
}
