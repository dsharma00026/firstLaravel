<!-- in this we learn about subview like we create 2 view  header and footer
 and some code into the view and include in this file -->

 <!-- and learn also how to pass data view to subview dymancially -->

@include('common.header',['hname'=>"deepak sharma"]);

<h1>
Hello laravel

</h1>
@include('common.footer',['title'=>"all right reserved 2025"]);
