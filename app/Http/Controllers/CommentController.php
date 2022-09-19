<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function index(){
        return view('comments');
    }
    public function store(Request $request){
        return response()->json();
    }
    public function create(){
        return response()->json(['data']);

    }
}
