<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

//create first controler class
class FirstController extends BaseController
{
    //first function in controlerr and use this in web.app routes to show
    //get data with routes
   function userDetails($name){
    echo "user name is $name";
    echo "<br>";
    echo "user password is 123";
   }

   function showDetails($name,$pass){

    return view('userDetails',['name'=>$name,'pass'=>$pass]);

   }
}