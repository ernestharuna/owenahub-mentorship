<?php

namespace App\Http\Controllers;

use App\Models\DisplayImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisplayImageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $data['image_path'] = $request->file('image_path')->store('display_images', 'public');
            }

            $request->user()->display_image()->create([
                'image_path' => $data['image_path'],
            ]);
            return back()->with('status', 'Profile picture updated!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, DisplayImage $displayImage)
    {
        $data = $request->validate([
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $data['image_path'] = $request->file('image_path')->store('display_images', 'public');
            }

            $displayImage->update($data);
            return back()->with('status', 'Profile picture updated!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }
}
