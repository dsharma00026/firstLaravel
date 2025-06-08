<?php

use Illuminate\Support\Facades\Route;
//load controler
use App\Http\Controllers\DBController;
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

//now we use same controler function and view but this time show data from database
Route::get('getData',[DBController::class,'showView']);
//call new function to show view and check view exit method
//Route::get('showData',[DBController::class,'viewCheck']);

//make route for  ragister view to show and also apply middle
Route::view('ragister','ragister')->middleware([CheckCountry::class,AgeCheck::class]);

//make route for ragister controller 
Route::post('adduser',[RagisterController::class,'AddUser']);

//here make route for url generation view
Route::view('url','url_generation');

//here make route for middle ware view
Route::view('middle','middleWare')->middleware(AgeCheck::class);

//here we create route for use model to fetch data and show into view
Route::get('model',[DBController::class,'getData']);