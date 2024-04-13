<?php

namespace App\Http\Controllers\User;

use App\Models\Slice;
use Illuminate\Http\Request;
use App\Models\SliceEnrollment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Auth;

class SliceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $enrolled_slices = $user->slice_enrollment()->get();

        return view('user.slices.index', [
            'enrolled_slices' => $enrolled_slices
        ]);
    }

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
            $request->user()->notification()->create([
                'topic' => 'Course Enrolled',
                'message' => "Congratulations!, You have successfully enrolled for a new course"
            ]);

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
        $index = $params['bite'] ? $params['bite'] - 1 : 0;

        return view('user.slices.show', [
            'slice' => $slice,
            'show_bite' => $slice->bite["$index"],
        ]);
    }
}
