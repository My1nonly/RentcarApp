<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('upload-car',[CarDetailController::class,'create']);
Route::get('car-listing',[CarDetailController::class,'index']);
Route::get('cardetail/{car_details}',[CarDetailController::class,'show']);
Route::get('myposts/{car_details}',[CarDetailController::class,'userpost']);
Route::get('editcar/{CarDetail}',[CarDetailController::class,'edit']);
Route::get('deletecar/{car_details}',[CarDetailController::class,'destroy']);
Route::get('updatecar/{car_details}',[CarDetailController::class,'update']);
Route::get('withdriver',[CarDetailController::class,'withdriver']);
Route::get('withoutdriver',[CarDetailController::class,'withoutdriver']);
Route::get('allcars',[CarDetailController::class,'allcars']);

Route::get('reg-users',[RegisterController::class,'usersdata']);
