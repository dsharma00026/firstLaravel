<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

//create first controler class
class DBController extends BaseController
{
    
    


    //here we show view with dynacally data
   function showView(){
    /*here we learn about blade so first we show variable in view
    $name="deepak_sharma"; 
    $names=["deepak","peter","sam","john"];

    return view('showUser',['name'=>$name,'names'=>$names]); */
    $userData=DB::select('select * from users');
    return view('showUser',['UserData'=>$userData]);
    }
   


}