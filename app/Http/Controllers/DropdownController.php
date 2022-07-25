<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    //
    public function index(){
        $data['countries'] = Country::get(["name", "id"]);
     return view('dropdown', $data);

    }

    public function fetchState(Request $request ){


        $data['states'] = State::where("country_id", $request->country_id)
        ->get(["name", "id"]);
       return response()->json($data);
    }
    public function fetchCity( Request $request){

       $data['cities'] = City::where("state_id", $request->state_id)
                                    ->get(["name", "id"]);
        return response()->json($data);

    }
}
