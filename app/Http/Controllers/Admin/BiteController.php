<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiteController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:100'],
            'description' => 'required',
            'position' => 'required',
            'content' => ['required', 'min:20'],
        ]);

        try {

            $request->user()->slice()->create($data);
            return redirect(route('admin.dashboard'))->with('status', 'Slice Created!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', 'Something went wrong');
        }
    }
}
