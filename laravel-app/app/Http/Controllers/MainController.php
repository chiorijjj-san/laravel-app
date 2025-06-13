<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
       
    }

    public function requestQuery(){
        return view('query');
    }

    public function runRaw(Request $request)
    {
        print_r($request);
        die;
        $response = DB::select($request->post('raw_query'));
        return response()->json($response);
    }

}
