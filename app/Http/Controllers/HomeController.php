<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        // return view('home');
        $result = CarbonPeriod::create('2022-01-01', '1 month', '2022-08-01');

        foreach ($result as $dt) {
            echo $dt->format("Y-m");
        }


    }

    public function adminHome() {

        return view('adminHome');
    }

    public function managerHome(){

        return view('managerHome');
    }
}
