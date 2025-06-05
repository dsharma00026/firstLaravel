<div>
    <h1>Ragister user</h1>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

   <!-- to show error
    @if($errors->any())
    @foreach($errors->all() as $err)
    <div style="color: red;">
        {{$err}}
    </div>
    @endforeach
    @endif
-->
    <form action="adduser" method="post">
        @csrf <!-- for laravel sequirty is must to mention -->
<div>
    <input type="text" name="user_name" placeholder="Enter your name">
    <span style="color: red;">@error('user_name'){{$message}}@enderror</span> 
    <br> 
</div>
<div >
    <input type="text" name="user_email" placeholder="enter your email">
    <span style="color: red;">@error('user_email'){{$message}}@enderror</span> 
<br>
</div>
<div >
    <input type="text" name="user_mobile" placeholder="Enter your Number"> 
        <span style="color: red;">@error('user_mobile'){{$message}}@enderror</span> 
<br>
</div>
<div >
    <input type="text" name="user_password" placeholder="Enter your passwrord">
        <span style="color: red;">@error('user_password'){{$message}}@enderror</span> 

</div>
<div>
    <input type="text" name="user_age" placeholder="Enter your Age">
        <span style="color: red;">@error('user_age'){{$message}}@enderror</span> 

</div>

<div>
<h5>Gender</h5>
<input type="radio" name="user_gender" value="Male" id="male">
<label for="male">Male</label>
<input type="radio" name="user_gender" value="Female" id="female">
<label for="female">Female</label>
    <span style="color: red;">@error('user_gender'){{$message}}@enderror</span> 

</div><br>



<div>
    <h5>Skills</h5>
<input type="checkbox" name="user_skill[]" value="php"id="php">
<label for="php">PHP</label>
<input type="checkbox" name="user_skill[]" value="mysql"id="mysql">
<label for="mysql">MYsql</label>
<input type="checkbox" name="user_skill[]" value="html"id="html">
<label for="htmlo">HTML</label>
<input type="checkbox" name="user_skill[]" value="css"id="css">
<label for="css">CSS</label>
<input type="checkbox" name="user_skill[]" value="laravel"id="laravel">
<label for="laravel">Laravel</label>
</div><br>


<div> 
    <h5>State</h5>
    <select name="user_state">
    <option value="uttar prades">Uttar Prades</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Haryana">Haryana</option>
    <option value="punjab">Punjab</option>
    <option value="himachal">Himachal</option>
    <option value="chandigarh">Chandigarh</option>
    </select>
        <span style="color: red;">@error('user_state'){{$message}}@enderror</span> 

</div>


    


<div>
    <br><br><button> Submit</button>
</div>
    </form>
</div>






<!--here our css part here 
<style>

.input-wrapper{
     border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
    margin: 10px;
}







</style>
-->