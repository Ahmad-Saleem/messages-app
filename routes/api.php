<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Models\Message;
use App\Models\User;
use App\Http\Resources\MessageCollection;
use App\Http\Resources\MessageResource;



Route::get('/messages', function () {
    return ['messages' => new MessageCollection(Message::all())];
});

Route::post('/messages/add', function (Request $req) {

    $user = User::find(1); // we get the user id usually from the session 

    $message = new Message([
        'content' => $req->input('content')
    ]);

    $res = $user->messages()->save($message);

    return new MessageResource($res);
    
});
