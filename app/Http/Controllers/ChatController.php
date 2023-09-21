<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class ChatController extends Controller
{
    public function __invoke(Request $request)
    {
        return Inertia::render('Chat/chat');
    }
}
