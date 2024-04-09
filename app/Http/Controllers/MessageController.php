<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
    public function index()
    {
        $users = User::get();
        return view("page.message.message", compact("users"));
    }

    public function getUser(User $user)
    {
        $messages = Message::where(function($query) use ($user) {
            $query->where('from', Auth::id())
                ->where('to', $user->id);
        })->orWhere(function($query) use ($user) {
            $query->where('to', Auth::id())
                ->where('from', $user->id);
        })->get();
        return response()->json([
            'users' => $user,
            'message'=> $messages
        ]);
    }

    public function sendMessage(Request $request){
        Message::create([
            'from'=> Auth::id(),
            'to'=> $request->to,
            'message'=> $request->message,
        ]);
        return response()->json([
            'status' => 200,
            'message'=> 'berhasil'
        ]);
    }
}
