<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('mentor.profile');
    }

    public static function store_profile_image($img_path)
    {
        try {
            $user = request()->user('mentor');
            $user->social_handle()->create([
                'image_path' => $img_path
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
