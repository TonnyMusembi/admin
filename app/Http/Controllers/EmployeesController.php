<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use App\Exports\EmployeesByAgeExport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeesController extends Controller
{
    //
    public function index(){
        return view('index') ;

    }

    public function exportCsv(){

        $file_name = 'employees_'.date('Y_m_d_H_i_s').'.csv';
        return Excel::download(new EmployeesExport, $file_name);
    }
    public function exportExcel(){
        $file_name = 'employees_'.date('Y_m_d_H_i_s').'.xlsx';
        return Excel::download(new EmployeesExport, $file_name);
     }

    public function exportByAgeCSV(Request $request){
          $age =$request->age;
          $file_name = 'employees_'.date('Y_m_d_H_i_s').'.csv';
          return Excel::download(new EmployeesByAgeExport($age), $file_name);
    }
    public function store(){
        return response()->json('');

    }

}
