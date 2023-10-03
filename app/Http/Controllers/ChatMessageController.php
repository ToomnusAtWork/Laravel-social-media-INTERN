<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Htpp\Requests\StoreMessageRequest;
use App\Http\Resources\MessageResource;
use Illuminate\Http\Request;
use Inertia\Inertia;


class ChatMessageController extends Controller
{
    public function index()
    {
        return Inertia::render('Chat/chatIndex', [
            'messages' => MessageResource::collection(
                Message::with(['user'])
                ->latest()
                ->get()
            )
        ]);
    }

    public function store(StoreMessageRequest $request)
    {
        $messages = $request->user()->messages()->create([
            'body' => $request->get('body')
        ]);
        return $messages;
    }

}
