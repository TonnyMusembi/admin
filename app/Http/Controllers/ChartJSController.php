<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use  Illuminate\Support\Facades\DB;
//use DB;
use Carbon\Carbon;

class ChartJSController extends Controller
{
    //
//     public function index(){
//         $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
//         ->whereYear('created_at', date('Y'))
//         ->groupBy(DB::raw("Month(created_at)"))
//         ->pluck('count', 'month_name');

// $labels = $users->keys();
// $data = $users->values();

// return view('chart', compact('labels', 'data'));    }

public function index()
  {
    $year = ['2015','2016','2017','2018','2019','2020'];

    $user = [];
    foreach ($year as $key => $value) {
        $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
    }

    return view('chartjs')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
  }
  public function store(Request $request){
    $year =[];
    foreach ($year as $key =>$value){

    }
    return view('chartjs');

  }
  public function show ($id){
    return  response()->json(['$id']);

  }

  public function create($id){
return response()->json(['$id']);

  }
}
