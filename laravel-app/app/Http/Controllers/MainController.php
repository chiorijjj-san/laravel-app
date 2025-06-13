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
        $query = $request->input('raw_query');
        $results = [];
        $error = null;

        try {
            $results = DB::select($query);
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }

        return view('query.result', [
            'results' => $results,
            'error' => $error,
        ]);
    }

}
