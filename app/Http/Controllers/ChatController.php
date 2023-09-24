<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use App\Models\Message;
use Inertia\Inertia;
use Inertia\Response;

class ChatController extends Controller
{
    public function __invoke(Request $request)
    {
        $messages = Message::with(['user'])->latest()->limit(100)->get();
        return Inertia::render('Chat/chat');
    }
}
