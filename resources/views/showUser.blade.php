<div>
    <h1>User details</h1>

    <table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Age</td>
        <Td>password</Td>
    </tr>
    @foreach($UserData as $users)
    <tr>
    <td>{{$users->name}}</td>
    <td>{{$users->email}}</td>
    <td>{{$users->age}}</td>
    <td>{{$users->password}}</td>
    </tr>


    @endforeach
    </table>


</div>