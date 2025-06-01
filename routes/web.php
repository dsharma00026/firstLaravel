<?php

use Illuminate\Support\Facades\Route;

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

//in laravel we have 2 method for routing;
//1
Route::get('/home', function () {
    return view('home');
});

//bund if only show view so we can only use this method but if use controler also dont use
//Route::view('/home','home');



//if we use any page with predefined any data or give data with url wo we use this mehod
//url like localhost/8000/name/deepak
Route::get('/name/{name}', function ($name) {
    return view('name',['name'=>$name]);
    
});
//for redirect in laravle routing we can use 
//route::redirect('home','/');
