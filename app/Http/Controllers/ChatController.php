<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use App\Models\Message;
use Inertia\Inertia;
use Inertia\Response;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke() 
    {
        return Inertia::render('Chat/chatIndex');
    }

}
