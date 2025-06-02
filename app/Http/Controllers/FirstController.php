<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

//create first controler class
class FirstController extends BaseController
{
    
    

    //here we show view with dynacally data
   function showView($name,$mobile,$city)
    {
        //here we check view exit or not
        if(View::exists('showUser')){
            return view('showUser',['name'=>$name,'mobile'=>$mobile,'city'=>$city]);
        }else{
            echo "No view found";
        }
        
    }
    function viewCheck(){
       /*here we check view exit or not
        if(View::exists('viewChecks')){
            return view('viewChecks');
        }else{
            echo "No view found";
        }*/  

        //here we check view exit or not
        if(View::exists('viewCheck')){
            return view('viewCheck');
        }else{
            echo "No view found";
        }
    }

   
}