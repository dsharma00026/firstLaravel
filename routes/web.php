<?php

use Illuminate\Support\Facades\Route;
//load controler
use App\Http\Controllers\FirstController;
use App\Http\Controllers\RagisterController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CheckCountry;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*call view using route
Route::get('user', function () {
    return view('showUser');
});*/

/*here we show view using controler using call firstcontroler class fucntion name showView 
Route::get('user',[FirstController::class,'showView']);*/

//now we use same controler function and view but this time show data in view dynamically
Route::get('user',[FirstController::class,'showView']);
//call new function to show view and check view exit method
Route::get('check',[FirstController::class,'viewCheck']);

//make route for  ragister view to show and also apply middle
Route::view('ragister','ragister')->middleware(CheckCountry::class);

//make route for ragister controller 
Route::post('adduser',[RagisterController::class,'AddUser']);

//here make route for url generation view
Route::view('url','url_generation');

//here make route for middle ware view
Route::view('middle','middleWare')->middleware(AgeCheck::class);