<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Slice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Slice $slice)
    {
        $data = $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        $user = Auth::id();

        try {
            $data['user_id'] = $user;
            $slice->review()->create($data);
            return back()->with('status', 'Review added successfully.');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', "$e");
        }
    }
}
