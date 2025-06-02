<div>

<h1>show User</h1>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <!-- here we learm about blade template  like how to show variable and how use fucntion if else 
     loop and foreach loop -->

</div>

<div>
    <!-- so show variabele in view we use this method -->
     <h1>{{$name}}</h1>
</div>

<div>
    <!-- to uswe function se use this method -->
    <h4>{{rand()}}</h4>
</div>

<div>
    <!-- here we learn about if else conditon wher we check somthing and 
     in blade use of method is diffrent like no use {} and start with @ and also use if loop or othr we also 
     end of mtehod -->

     @if($name=="deepak")
        <h5>name is deepak</h5>
    @elseif($name=="sharma")
        <h5>name is sharma</h5>
    @elseif($name=="deepak sharma")
        <h5>name is deepak sharma</h5>
    @else <h5>other name</h5>
   @endif

</div>

<div>
<!-- here we learn about how to get array and show with using  for loop 
    @for($i=0;$i<=3;$i++)
    <h4> {{$names[$i]}}</h4>
    @endfor    
-->

<!-- here we learn about how to get array and show with using  foreach loop-->

    @foreach($names as $n)
     <h4>{{$n}}</h4>

    @endforeach    

</div>

<!-- all these use with .blade.php extendsion if we not use this extenison so we not use this all syntax