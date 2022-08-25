<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UssdController extends Controller
{

    public function onlineUssdMenu(Request $request)
    {
       $sessionId   = $request->get('sessionId');
       $serviceCode = $request->get('serviceCode');
       $phoneNumber = $request->get('phoneNumber');
       $text        = $request->get('text');


        $ussd_string_exploded = explode("*", $text);

        // Get ussd menu level number from the gateway

        $level = count($ussd_string_exploded);

        if ($text == "") {
            // first response when a user dials our ussd code
            $response  = "CON Welcome at Tonnytech \n";
            $response .= "1. Register \n";
            $response .= "2. Proceed";
        }

        elseif ($text == "1") {
            // when user respond with option one to register
            $response = "CON Choose which  service \n";
            $response .= "1. Software Development \n";
            $response .= "2. Payments";
        }

        elseif ($text == "1*1") {
            // when use response  softwaredevelopment
            $response = "CON Please enter your first name";
        }

        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 3) {
            $response = "CON Please enter your option";
        }

        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 4) {
            $response = "CON Please enter your email";
        }

        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! ";
        }

        elseif ($text == "1*2") {
            // when use response with option Laravel
            $response = "CON Please enter your first name. ";
        }

        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 3) {
            $response = "CON Please enter your last name";
        }

        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 4) {
            $response = "CON Please enter your email";
        }

        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 5) {
            // save data in the database

            $response = "END Your data has been captured successfully! ";
        }


        elseif ($text == "2") {
            // Our response a user respond with input 2 from our first level
            $response = "END At TonnyTech.";
        }

        // send your response back to the API
        header('Content-type: text/plain');
        echo $response;
    }
}
