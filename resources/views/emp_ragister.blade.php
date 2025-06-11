<div>
    <h1>Ragister New Employee</h1>

    <form action="emp_ragister" method="post">
        @csrf

    <input type="text" name="emp_name" placeholder="Enter name" require><br><br>
    <input type="text" name="emp_email" placeholder="Enter email"><br><br>
    <input type="text" name="emp_password" placeholder="Enter Password"><br><br>
    <input type="text" name="emp_mobile" placeholder="Enter mobile"><br><br>
    <input type="text" name="emp_department" placeholder="Enter department"><br><br>
    <input type="text" name="emp_salery" placeholder="Enter salery"><br><br>
    <input type="text" name="emp_date" placeholder="Enter date"><br><br>


    <button>Ragister</button><br><br>
    <a href="https://www.google.com/">Login</a><br><br>
    <a href="https://www.google.com/">Admin</a>


    </form>

</div>
