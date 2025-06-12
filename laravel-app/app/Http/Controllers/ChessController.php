<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChessController extends Controller
{
    //
    public function move(Request $request)
    {
        $move = $request->input('move'); // Example: e2e4
        event(new MoveMade($move));

        return response()->json(['status' => 'Move broadcasted']);
    }
}
