<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slice;
use Illuminate\Http\Request;

class BiteController extends Controller
{
    public function store(Request $request, Slice $slice)
    {
        // dd($request);
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'description' => 'required',
            'position' => 'required',
            'content' => ['required', 'min:10'],
        ]);

        try {
            $slice->bite()->create($data);
            return redirect(route('admin.slice.show', $slice->id))->with('status', 'Slice Created!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }
}
