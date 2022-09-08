<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{
    //
    public function index(){
        // $data = Category::paginate(10);
    	// return response()->json($data);

        $categories = Category::all(['id',]);
        return response()->json($categories);
    }
    public function store(Request $request){
        return  response()->json('$data');

    }
    public function destroy( Category $category){
        $category->delete();
        return response()->json([
       'message'=>'category deleted !!'
        ]);
    }
    public function show(Category $category){
        return response()->json( $category);

    }
}
