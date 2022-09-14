<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    //
    public function index(){
        return view('');
    }
    public function store(Request $request){
        return response()->json(['$id']);
    }
    public function message(){
        return response()->json('');

    }
}
