<div>

<h5>this is view whene i show  wthose data which fetch by api</h5>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
     <table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>UserName</td>
        <Td>Email</Td>
        
    </tr>
    @foreach($ApiData as $Data)
    <tr>
    <td>{{$Data->id}}</td>
    <td>{{$Data->name}}</td>
    <td>{{$Data->username}}</td>
    <td>{{$Data->email}}</td>
    </tr>


    @endforeach
    </table>
</div>
