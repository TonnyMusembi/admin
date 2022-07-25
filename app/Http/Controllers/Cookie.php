<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cookie extends Controller
{
    //

    public function index(){
        return response()->json([]);
    }

    public function store(Request $request){
        return response()->json(['$data']);

    }
}
