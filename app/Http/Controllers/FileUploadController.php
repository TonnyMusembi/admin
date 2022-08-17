<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Carbon\Carbon;
use App\Models\User;



class FileUploadController extends Controller
{
    //
    public function index(){

return view('file-upload');
    }
    public function store(Request $request){
        // $validatedData = $request->validate([
        //     'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',

        //    ]);

        //    $name = $request->file('file')->getClientOriginalName();

        //    $path = $request->file('file')->store('public/files');


        //    $save = new File;

        //    $save->name = $name;
        //    $save->path = $path;

        //    return redirect('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');




        $startDate = Carbon::createFromFormat('Y-m-d', '2022-06-01');
        $endDate = Carbon::createFromFormat('Y-m-d', '2022-06-30');
        $users = User::whereDate('start_at', '>=', $startDate)
                ->whereDate('end_at', '<=', $endDate)
                ->get();

      //  return $users;

    }
    public function update(){
        return response()->json();

    }
}
