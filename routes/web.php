<?php

use Illuminate\Support\Facades\Route;
//load controler
use App\Http\Controllers\FirstController;
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

//here we create route to use controler
//also use pass value dynimacally
Route::get('user/{name}',[FirstController::class,'userDetails']);
//pass value dynamically into ciontroler for passing value and show in view
Route::get('show/{name}/{pass}',[FirstController::class,'showDetails']);
