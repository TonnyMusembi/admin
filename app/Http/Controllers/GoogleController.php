<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;


class GoogleController extends Controller
{
    //
    public function index(){
       // return view('result');

    }
    public function googleLineChart()
    {
        $visitors = Visitor::select("visit_date", "click", "viewer")->get();

        $result[] = ['Dates','Clicks','Viewers'];
        foreach ($visitors as $key => $value) {
            $result[++$key] = [$value->visit_date, (int)$value->click, (int)$value->viewer];
        }

        return view('googleChart', compact('result'));
    }
    public function  destroy($id){
        return response()->json('[$id]');
    }
}
