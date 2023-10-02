<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Htpp\Requests\StoreMessageRequest;
use Illuminate\Http\Request;


class ChatMessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->latest()->limit(100)->get();
        return Inertia::render('Chat/chatIndex');
    }

    public function store(StoreMessageRequest $request)
    {
        $messages = $request->user()->messages()->create([
            'body' => $request->get('body')
        ]);
        return $messages;
    }

}
