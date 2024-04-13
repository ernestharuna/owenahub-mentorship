<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public static function store($user_type, $topic, $message)
    {
        switch ($user_type) {
            case 'user':
                Notification::create([
                    'topic' => $topic,
                    'message' => $message,
                    'user_id' => auth()->id()
                ]);
                break;
            case 'mentor':
                Notification::create([
                    'topic' => $topic,
                    'message' => $message,
                    'mentor_id' => auth('mentor')->id()
                ]);
                break;
            default:
                # code...
                break;
        }
    }

    public function user_index()
    {
        $notifications = Notification::where('user_id', auth()->id())->get();
        return view('user.notifications', [
            'notifications' => $notifications
        ]);
    }
}
