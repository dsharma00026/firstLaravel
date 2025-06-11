<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

//create first controler class
class DBController extends BaseController
{
    

    //now here we learn about basic crud opreation in database using both method
    //like using db laravel built in class and other eqliant model class




    //run crud method using db Class
   function showView(){

    /*here we learn about blade so first we show variable in view
    $name="deepak_sharma"; 
    $names=["deepak","peter","sam","john"];
    return view('showUser',['name'=>$name,'names'=>$names]); */


    //learn basic crud opreation using db class


    $userData=DB::table('students')->paginate(3);
     /*both  way to fetch data using select and db class bult function
     $userData=DB::select('select * from users where age=24');
     $userData=DB::table('users')->where('age','24')->get();*/


     /*now learn insert method usign both db class method
     $userData=DB::select("INSERT INTO users (name, email, password, age) VALUES ('sharma', 'f@gmail.com', 'khdkhfh', '28')");
     $userData=DB::table('users')->insert([
        'name'=>'Sam',
        'email'=>'dhfh@gmail.com',
        'password'=>'dhf',
        'age'=>'52'
     ]);*/


     /*now we learn about update method using db both method
     $userData=DB::select("update users set name='peter singh ',age='54' where password='sdeepak2';");
     $userData=DB::table('users')->where('password','dhf')->update([
         'name'=>'sam sing',
         'age'=>'45'
     ]);*/

     /*now we learn final op like delete method in db class
     $userData=DB::select("delete from users where name='sam sing'");
     $userData=DB::table('users')->where('name','peter singh')->delete();*/


     //get data and show to view
     return view('showUser',['UserData'=>$userData]);
     }







    
 

 
     //run crud opreation using model
     function getData(){
        /*here we use model to fetch data from databse and show into show user view 
        $user=users::get();  //assign and fetch data from database using model
        now we get data from database and store in $user variable */

        $user=Student::paginate(3);
     

        //now here we learn about basic crud opreation in laravel using model
        /*fetchData form databse using model
        $user=users::all()->where('name','sharma');*/

       /* insert Data in databse using model
        $user=Student::insert([
        'name'=>'Sam singh',
        'email'=>'dhfh@yahoo.com',
        'password'=>'dhdf',
        'age'=>'48'
        ]);*/

        /*update data in database using model
        $user=users::where('name','sharma')->update([
            'name'=>'deepak sharma'
            
        ]);*/

        /*delete method in model
        $user=users::where('age','24')->delete();*/



        return view('showuser',['UserData'=>$user]);
        
    }
   


}