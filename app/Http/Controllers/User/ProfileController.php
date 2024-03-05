<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile.index');
    }

    public static function store_profile_image($img_path)
    {
        try {
            $user = request()->user();
            $user->social_handle()->create([
                'image_path' => $img_path
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
