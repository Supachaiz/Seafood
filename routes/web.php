<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeafoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;



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

// Route::get('/', function () {
//     return view('main.index');
// });

Route::get('product', function () {
    return view('main.product');
});
Route::get('mproduct', function () {
    return view('main.mainproduct');
});
Route::get('manage', function () {
    return view('main.manage');
});
Route::get('manageorder', function () {
    return view('main.manageorder');
});


// });
$r['/']             = SeafoodController::class;
$r['order']        = OrderController::class;
$r['product']        = ProductController::class;


Route::resources($r);
// Route::resource('test', SeafoodController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
