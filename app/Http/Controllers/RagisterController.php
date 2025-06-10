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
           'user_name'=>'required | min:3 | max:15',
           'user_email'=>'required | email',
           'user_mobile'=>'required', 
           'user_password'=>'required', 
           'user_gender'=>'required', 
           'user_age'=>'required', 
           'user_state'=>'required' 
         ],[
          'user_name.required'=>'user field required',
          'user_name.min'=>'user field must 3 character',
          'user_name.max'=>'user field max 15 character',
          'user_mobile.required'=>'user mobile field required',
          'user_email.required'=>'user email field required',
          'user_name.email'=>'user email field must be valid'
         ]);

       
         /*get image or file path and here filename laravel generated automaticlly
         //here we store path of image into our public folder so we have 2 way 1path generate by laravel
         //2nd is we declare path name by own
         $path=$request->file('file')->store('public');//this is 1method
         $path=explode("/",$path);//here we remove public name from path and 
        // also our path make now array*/

        $filename=$request->user_name.'.jpg';//this is 2nd method
         $path=$request->file('file')->storeAs('public',$filename);

         //now we get all tha data from form and show userdata into view 
         return view('formUser',['UserData'=>$request,'path'=>$filename]);




         /*here we learn about flsh session to save data into server like session 
           but this data only save until uou reload or refresh not page when you refresh the page
         data will remove
         $request->session()->flash('message','user added succesfully');
         return redirect('ragister');*/

    }



    //crete to learn about session
   function login(Request $request){

     //here we create and init session for use in profile page
     $request->session()->put('user_name',$request->user_name);
     $request->session()->put('user_password',$request->user_password);

     return redirect('profile');
    }

    //here we delete session

    function logout(){
      session()->put('user_name');
     return redirect('login');
    }

    
  
}
