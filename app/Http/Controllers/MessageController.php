<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Resources\MessageCollection;

class MessageController extends Controller
{
    public function viewAll()
    {
        return view('messages', function(){
            return ['messages' => Message::all()];
        });
    }

    public function viewAllAsJson()
    {
        return view('components.pages.messages', function(){
            return ['messages' => new MessageCollection(Message::all())];
        });
    }
}
