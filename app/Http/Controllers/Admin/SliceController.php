<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliceController extends Controller
{
    /**
     * Store New Slice
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'category' => 'required',
            'description' => ['required', 'min:20'],
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'sometimes|numeric',
            'is_paid' => 'nullable|boolean',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $data['image_path'] = $request->file('image_path')->store('slice_images', 'public');
            }

            $request->user()->slice()->create($data);
            return redirect(route('admin.dashboard'))->with('status', 'Slice Created!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }
}
