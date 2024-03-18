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
}
