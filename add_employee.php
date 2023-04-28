<?php
session_start();
include("dbconnection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $emp_name = $_POST['emp_name'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile_no'];
    $gmail = $_POST['gmail'];
    $birth_year = $_POST['birth_year'];
    $dept_name = $_POST['dept_name'];
    $emp_position = $_POST['emp_position'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $joining_year = $_POST['joining_year'];

    $query = "select * from user where username = '$username'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) == 0)
    {
        $query = "insert into employee values(0, '$username', '$emp_name', '$mobile_no', '$gmail', '$birth_year', '$emp_position', '$dept_name', '$gender', '$salary', '$joining_year')";
        $result = mysqli_query($connect, $query);
        $query = "insert into user values('$username', '$password')";
        $result = mysqli_query($connect, $query);
    }
    else
    {
        $text = "Username Already Exists!";
        echo("<script type=text/javascript>alert('$text');</script>");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="text" name="emp_name" placeholder="Employee Name" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="text" name="mobile_no" placeholder="Mobile Number" required><br>
            <input type="text" name="gmail" placeholder="Gmail" required><br>
            <input type="text" name="birth_year" placeholder="Birth Year (Year-Month-Day)" required><br>
            <input type="text" name="dept_name" placeholder="Department Name" required><br>
            <input type="text" name="emp_position" placeholder="Employee Position" required><br>
            <input type="text" name="gender" placeholder="Gender" required><br>
            <input type="text" name="salary" placeholder="Salary" required><br>
            <input type="text" name="joining_year" placeholder="Joining Year (Year-Month-Day)" required><br>
            <input type="submit" value="Add Employee">
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>