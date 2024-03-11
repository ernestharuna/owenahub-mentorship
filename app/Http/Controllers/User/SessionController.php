<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $mentors = Mentor::get();
        return view('user.sessions.index', [
            'mentors' => $mentors
        ]);
    }

    public function all_mentors()
    {
        $mentors = Mentor::get();
        return view('user.mentor.index', [
            'mentors' => $mentors
        ]);
    }

    public function show_mentor(Mentor $mentor)
    {
        return view('user.mentor.show', [
            'mentor' => $mentor
        ]);
    }
}
