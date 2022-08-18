<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Carbon;
use App\Models\GoogleChart;


class PostController extends Controller
{

    public function index( Request $request)
    {
    // $startDate = Carbon::createFromFormat('Y-m-d', '2022-06-01')->startOfDay();
    //     $endDate = Carbon::createFromFormat('Y-m-d', '2022-06-30')->endOfDay();

    //     $posts = Post::whereBetween('created_at', [$startDate, $endDate])->get();
    //     return $posts;

    }

    public function googleChart($value='')
    {
        $user = GoogleChart::get();
        foreach ($user as $key => $value) {
                $subjectData[] = [$value['subject'] , $value['point']];
            }
        return view('post.chart.google',compact('subjectData'));
    }
    public function store( Request $request){
   return response()->json();
    }
    public function destroy(){

    }
}
