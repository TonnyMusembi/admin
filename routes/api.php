flexWrapBefore=""<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UssdController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('companies', CompanyController::class);

Route::post('v1/online/ussd/service', [UssdController::class,'onlineUssdMenu']);
// Route::post('v1/online/ussd/service', 'UssdController@onlineUssdMenu');
Route::get('phones',[PhoneController::class]);
Route::resource('blogs', BlogController::class);
