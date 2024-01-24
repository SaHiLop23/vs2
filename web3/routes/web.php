<?php

use App\Http\Controllers\usercontroller;
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

Route::get('/index', function () {
    return view('index');
    
});
Route::get('/signup', function () {
    return view('signup');
    
});
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
    
});
Route::get("/user",[usercontroller ::class,"show"]);

