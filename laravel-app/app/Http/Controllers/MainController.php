<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
       
    }

    public function requestQuery(){
        return view('auth.login');
    }

    public function runRaw(Request $request)
    {
        $response = DB::select($request->post('raw_query'));
        return response()->json($response);
    }

}
