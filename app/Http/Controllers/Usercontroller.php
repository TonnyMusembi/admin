<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Usercontroller extends Controller
{
    //
    public function index (Request $request ,$page = 1 ){
        $paginate = 4;
        $skip = ($page * $paginate) - $paginate;
        $prevURL = $nextURL = '';

        if ($skip > 0){
            $prevURL = $page - 1;
        }

        $users = User::latest()
                        ->skip($skip)
                        ->take($paginate)
                        ->get();

        if($users->count() > 0){
            if($users->count() >= $paginate){
                $nextURL = $page + 1;
            }
             return view('users', compact('users', 'prevURL', 'nextURL'));
        }

        return redirect('/');

    }
    public function destroy(){
        return response()->json(['$']);
    }
    public function update(){
        return  view ('');

    }
    public function user(){

        $search = "United States";
    $users = User::where('country', 'LIKE', '%'.$search.'%')
        ->get();

    dd($users);
    }
}
