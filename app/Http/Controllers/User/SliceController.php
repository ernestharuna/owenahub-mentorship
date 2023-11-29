<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Slice;
use App\Models\SliceEnrollment;
use Illuminate\Http\Request;

class SliceController extends Controller
{
    public function create_slice_enrollment(Request $request, $slice_id)
    {
        if (SliceEnrollment::where([
            ['user_id', '=', auth()->user()->id],
            ['slice_id', '=', $slice_id],
        ])->exists()) {
            return redirect(route('user.dashboard'))->with('error', 'You\'ve already started this slice!');
        }

        try {
            $data = [
                'slice_id' => $slice_id
            ];

            $request->user()->slice_enrollment()->create($data);
            return redirect(route('user.dashboard'))->with('status', 'Slice added!');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', $e->getMessage());
        }
    }

    public function show(Request $request, Slice $slice)
    {
        /**
         * Uses the query parameter to find slice
         */
        $params = $request->query();
        $index = $params['bite'] - 1;

        // dd($slice->bite);
        return view('user.slices.show', [
            'slice' => $slice,
            'show_bite' => $slice->bite["$index"],
        ]);
    }
}
