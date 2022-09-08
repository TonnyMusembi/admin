<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    //

    public function index(){
        return view('phones');

    }
    public function store(Request $request){


        return response()->json('$data');

       }
}
