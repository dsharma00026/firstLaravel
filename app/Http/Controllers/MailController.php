<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeGmail;

class MailController extends Controller
{
    function sendMail(){
        $to='dsharma00026@gmail.com';
        $msg="this is dummy mail by deepak sharma";
        $subject="text mail feture";
            Mail::to($to)->send(new welcomeGmail($msg,$subject));

    }
    
}
