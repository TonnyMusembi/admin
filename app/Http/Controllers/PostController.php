<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Carbon;


class PostController extends Controller
{

    public function index( Request $request){
    $startDate = Carbon::createFromFormat('Y-m-d', '2022-06-01')->startOfDay();
        $endDate = Carbon::createFromFormat('Y-m-d', '2022-06-30')->endOfDay();

        $posts = Post::whereBetween('created_at', [$startDate, $endDate])->get();
        return $posts;

    }
    public function store( Request $request){
   return response()->json();
    }
    public function destroy(){

    }
}
