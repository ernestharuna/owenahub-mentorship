<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slice;
use Illuminate\Http\Request;

class SliceController extends Controller
{
    public function index()
    {
        $slices = Slice::latest()->paginate(10);
        return view('admin.slices.index', [

            'slices' => $slices
        ]);
    }
    /**
     * Store New Slice
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'about' => 'required',
            'overview' => ['required', 'min:20'],
            'category' => 'required',
            'duration' => 'required',
            'price' => 'nullable|sometimes|numeric',
            'is_paid' => 'nullable|sometimes|boolean',
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($data);

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

    public function edit(Slice $slice)
    {
        return view('admin.slices.edit', [
            'slice' => $slice,
        ]);
    }

    public function update(Request $request, Slice $slice)
    {
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'about' => 'required',
            'overview' => ['required', 'min:20'],
            'category' => 'required',
            'duration' => 'required',
            'price' => 'nullable|sometimes|numeric',
            'is_paid' => 'nullable|sometimes|boolean',
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $data['image_path'] = $request->file('image_path')->store('slice_images', 'public');
            }

            $slice->update($data);
            return redirect(route('admin.slice.index'))->with('status', 'Update Succesful');
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
