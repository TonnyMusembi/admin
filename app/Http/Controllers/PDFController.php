<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;


class PDFController extends Controller
{
    //
    public function index(){
        return view ('mergePDF');
    }

    public function store(Request $request){

        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:pdf'
    ]);

     if($request->hasFile('filenames')){
        $pdf = PDFMerger::init();

        foreach ($request->file('filenames') as $key => $value) {
            $pdf->addPDF($value->getPathName(), 'all');
        } 
        $fileName = time().'.pdf';
        $pdf->merge();
        $pdf->save(public_path($fileName));

    }

    return response()->download(public_path($fileName));

    }
    public function data(){
        $t = date("H");

     if ($t < "20") {
     echo "Have a good day!";

    }
}
}
