<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function index(Request $request) {

        $lat = YOUR_CURRENT_LATTITUDE;
        $lon = YOUR_CURRENT_LONGITUDE;

        $users = User::select("users.id"
                        ,DB::raw("6371 * acos(cos(radians(" . $lat . "))
                        * cos(radians(users.lat))
                        * cos(radians(users.lon) - radians(" . $lon . "))
                        + sin(radians(" .$lat. "))
                        * sin(radians(users.lat))) AS distance"))
                        ->groupBy("users.id")
                        ->get();
        dd($users);

    }
}
