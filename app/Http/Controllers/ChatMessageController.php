<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class ChatMessageController extends Controller
{
    public function index()
    {
        $messages = Message::get();
        return;
    }
}
