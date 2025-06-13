<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $response = DB::select($request->post('raw_query'));
        echo "<pre>";
        print_r($request);
        die;
    }

}
