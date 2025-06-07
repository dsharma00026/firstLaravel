<!-- in this we learn about component in laravel we  create  1 toast orspan message
 and show in main file and also pass message and style dynamically -->

 <!-- and learn also how to pass data view to subview dymancially -->

@include('common.header',['hname'=>"DRS agency"]);

<h1>
Hello laravel
lear about component in laravel 

<x-toast msg="user login successfully" class="success"/>
<br/>


<a href="/ragister?country=india&age=20">Ragister User</a><br>
<a href="{{URL::to('url')}}">URL Page</a><br>
<a href="/middle?age=15">Middle Ware</a><br>

<x-toast msg="user login failed" class="failed"/>






</h1>
@include('common.footer',['title'=>"all right reserved 2025"]);

<style>
.success{
        background-color: lightgreen;
        color: green;
        padding: 2px 8px;
        
    }

.failed{
        background-color: red;
        color: black;
        padding: 2px 8px;
        
    }
</style>