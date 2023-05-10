<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('chat.index', compact('users'));
    }

    public function getMessage($id)
    {
        $messages = Chat::where(function ($query) use ($id) {
            $query->where('sender_id', auth()->id())->where('receiver_id', $id);
        })->orWhere(function ($query) use ($id) {
            $query->where('sender_id', $id)->where('receiver_id', auth()->id());
        })
            ->orderBy('created_at', 'ASC')
            ->get();
        // dd($messages->toArray());
        return view('chat.messages', compact('messages'))->with('senderId', $id);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'receiver_id' => 'nullable',
        ]);
        // dd($request->all());

        Chat::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
