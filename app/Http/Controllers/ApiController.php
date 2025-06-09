<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //here we learn about how to fetch data from api and show into view

    //here we use one free api which show us popuylation on year by year.
    function fetchData(){


        $response=Http::get('https://jsonplaceholder.typicode.com/users'); //use this pass api url and get data from api and store in variable 
       $response=$response->body();//here weget only body of api and remove unnessary data
        return view('apiView',['ApiData'=>json_decode($response)]);
    }
}
