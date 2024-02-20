<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bite;
use App\Models\Slice;
use Illuminate\Http\Request;

class BiteController extends Controller
{
    public function store(Request $request, Slice $slice)
    {
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'description' => 'required',
            'position' => 'required',
            'content' => ['required', 'min:10'],
        ]);

        try {
            $existing_bite = $slice->bite()->where('position', $data['position'])->first();
            if ($existing_bite) {
                return back()->with('error', 'A bite with the same position already exists.');
            }

            $slice->bite()->create($data);
            return redirect(route('admin.slice.show', $slice->id))->with('status', 'Bite Created!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, Bite $bite)
    {
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'description' => 'required',
            'position' => 'required',
            'content' => ['required', 'min:10'],
        ]);

        try {
            $existing_bite = $bite->where('position', $data['position'])->first();
            if ($existing_bite) {
                return back()->with('error', 'A bite with the same position already exists.');
            }
            $bite->update($data);
            return back()->with('status', 'Bite updated successfully');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Update failed');
        }
    }

    public function show(Bite $bite)
    {
        return view('admin.slices.bites.edit', [
            'bite' => $bite
        ]);
    }

    public function delete(Bite $bite)
    {
        $bite->delete();
        return back()->with('error', 'Bite deleted');
    }
}
