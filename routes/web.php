<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\ItemController;

use App\Http\Controllers\StripePaymentController;

use App\Http\Controllers\ChartJSController;

use App\Http\Controllers\ProductController;


use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;

// use App\Http\Controllers\UserController;

use App\Http\Controllers\RSSFeedController;

use App\Http\Controllers\PDFController;

use App\Http\Controllers\QRController;


use App\Http\Controllers\UserController;

use App\Http\Controllers\FileUploadController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
 Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('user-datatables', function () {
    return view('default');
});

Route::get('dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
Route::get('item', [ItemController::class, 'index']);


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('chart',[ChartJSController::class,'index']);


Route::resource('products', ProductController::class);

Route::get('near-by-places', [LocationController::class, 'index']);

Route::controller(SearchController::class)->group(function(){
    Route::get('demo-search', 'index');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
});

// Route::get('users', [UserController::class, 'index']);
// Route::get('users/page/{page}', [UserController::class, 'index'])->name('users.index');


// Route::middleware(['blockIP'])->group(function () {
//     Route::resource('users', UserController::class);
//    // Route::resource('rss', RSSFeedController::class);
// });

Route::get('merge-pdf', [PDFController::class, 'index']);
Route::post('merge-pdf', [PDFController::class, 'store'])->name('merge.pdf.post');

// Route::middleware('web')
//                 ->namespace('App\Http\Controllers')
//                 ->group(base_path('routes/web.php'));


Route::get('qr_code/index', [QRController::class, 'index'])->name('qrcode.index');
Route::get('qr_code/create', [QRController::class, 'create'])->name('qrcode.create');


Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,'import'])->name('import');
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');

Route::get('file-upload', [FileUploadController::class, 'index']);
Route::post('store', [FileUploadController::class, 'store']);

