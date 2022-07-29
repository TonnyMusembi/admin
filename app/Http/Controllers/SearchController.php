<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(){

        return view ('searchDemo');
    }

    public function autocomplete(Request $request)
    {
        $data = Student::select("name")
                    ->where('name', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();

        return response()->json($data);
}
public function destroy (){

}
public function update(){

    
}

}
