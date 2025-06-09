<div>
    <h1>User Information</h1>

    <table border="1">
    <tr>
        <td>Name</td>
        <td>number</td>
        <td>email</td>
        <Td>password</Td>
        <Td>age</Td>
        <td>gender</td>
        <td>state</td>
        <td>method</td>
        <td>get path</td>
        <td>url</td>
        <td>IP Address</td>
        <td>skills</td>
    </tr>
    <tr>
    <td>{{$UserData->user_name}}</td>
    <td>{{$UserData->user_mobile}}</td>
    <td>{{$UserData->user_email}}</td>
    <td>{{$UserData->user_password}}</td>
    <td>{{$UserData->user_age}}</td>
    <td>{{$UserData->user_gender}}</td>
    <td>{{$UserData->user_state}}</td>
     <td>{{$UserData->method()}}</td>
     <td>{{$UserData->path()}}</td>
     <td>{{$UserData->url()}}</td>
    <td>{{$UserData->ip()}}</td>


    @foreach($UserData->user_skill as $skill)
      <td>{{$skill}}</td>
    @endforeach
   

    </tr>


    </table>


</div>