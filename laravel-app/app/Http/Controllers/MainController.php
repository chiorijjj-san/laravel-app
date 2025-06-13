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
        $query = $request->input('raw_query'); // or ->post('raw_query')

        try {
            $response = DB::select($query);

            echo "<pre>";
            print_r($response);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>SQL Error: " . $e->getMessage() . "</pre>";
        }

        die;
    }

}
