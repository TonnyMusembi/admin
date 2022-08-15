<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    //
    public function index(){
        return view('qrcode.index');
    }
    public function create (){

        QrCode::generate('https://techsolutionstuff.com', '../public/QRCode.svg');
	    return redirect()->route('qrcode.index');
    }

      public function destroy(Request $request){
        return response()->json();

    }
    public function update($id){
     return response()->json();
    }
}

