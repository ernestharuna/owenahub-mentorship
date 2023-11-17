<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slice;
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

            $slice = $request->user()->slice()->create($data);
            return redirect(route('admin.slice.show', $slice->id))->with('status', 'Slice Created!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, Slice $slice)
    {
        $data = $request->validate([
            'title' => ['required', 'min:5', 'max:100'],
            'category' => 'required',
            'description' => ['required', 'min:10', 'max:150'],
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'sometimes|numeric',
            'is_paid' => 'nullable|boolean',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $data['image_path'] = $request->file('image_path')->store('slice_images', 'public');
            }
            $slice->update($data);
            return redirect(route('admin.dashboard'))->with('status', 'Update Succesful');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('status', 'Update failed');
        }
    }

    public function show(Slice $slice)
    {
        return view('admin.slices.show', [
            'slice' => $slice
        ]);
    }

    public function delete(Slice $slice)
    {
        $slice->delete();
        return back()->with('error', 'Slice Deleted!');
    }
}
