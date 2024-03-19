<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MentorController extends Controller
{
    public function show(Mentor $mentor)
    {
        return view('admin.mentors.show', [
            'mentor' => $mentor
        ]);
    }

    public function approve(Request $request, Mentor $mentor)
    {
        $data = $request->validate([
            'email_verified_at' => 'required'
        ]);

        $mentor->email_verified_at = $data['email_verified_at'];
        $mentor->save();
        return redirect()->back()->with('status', 'Account approved');
    }

    public function suspend(Mentor $mentor)
    {
        $mentor->email_verified_at = null;
        $mentor->save();
        return redirect()->back()->with('error', 'Account suspended');
    }
}
