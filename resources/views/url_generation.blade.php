<div>
    <!-- here we learn about url generation in laravael where we get about url like 
     previors url current url full url and many more so get urlwe have two method of use -->
    
     <h1>Url Generation</h1>

     <!-- current url get we have 2 method-->
        <h3>{{URL::current()}}</h3>
        <h3>{{url()->current()}}</h3>

    <!-- get full current url like passing variable data-->
     <h3>{{URL::full()}}</h3>
     <h3>{{url()->full()}}</h3>

     <h5>check previous url
     </h5>

     <h4>{{URL::previous()}}</h4>
     <h4>{{url()->previous()}}</h4>
</div>
