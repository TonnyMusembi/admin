<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Models\User;

class UserController extends Controller
{
    public function importView(Request $request){
        return view('importfile');
    }

    public function import(Request $request){
        Excel::import(new ImportUser, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
    public function destroy(){
        return response()->json();
    }

    public function index(){
        return view('users');
    }
    public function data(Request $request){
       $data = User::orderBy('id', 'desc')
            ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                       return '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);

    }
    public function show(User $user){
        return view('users',[
            'user' =>$user
        ]);
    }
    public function update(User $user){
        return view('users',[]);

    }
    public function  create(){
        return response()->json();

    }
    public function delete(){
        return response()->json();
    }

}
