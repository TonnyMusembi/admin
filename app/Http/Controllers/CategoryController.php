<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{
    //
    public function index(){
        $data = Category::paginate(10);
    	return response()->json($data);
    }
    public function store(Request $request){
        return  response()->json('$data');

    }
}
