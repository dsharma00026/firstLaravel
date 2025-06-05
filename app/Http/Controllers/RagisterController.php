<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RagisterController extends Controller
{
    //here we handle our ragister view form and data
    function AddUser(Request $request){

        //when we this function called from form so we get data in Request method mention top
        //he we return all form data Return $request;

        /* we get single data from form using this method
        echo $request->user_name;
        echo "<br>";
        echo $request->user_email;
         echo "<br>";
        echo $request->user_password;*/
         //return $request;
         

         //here we learn about form validation

         $request->validate([
           'user_name'=>'required',
           'user_email'=>'required | email',
           'user_mobile'=>'required', 
           'user_password'=>'required', 
           'user_gender'=>'required', 
           'user_age'=>'required', 
           'user_state'=>'required' 
         ]);
         return $request;
    }
}
