<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
class Action extends Controller
{
    //
    public function send(Request $request)
    {
        event(new MessageSent($request->message));
    }

}
