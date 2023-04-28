<?php
session_start();
include("dbconnection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $dept_name = $_POST['dept_name'];
    $dept_head = $_POST['dept_head'];
    $dept_task = $_POST['dept_task'];
    $no_of_members = $_POST['no_of_members'];

    $query = "select * from department where dept_name = '$dept_name'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 0)
    {
        $query = "insert into department values(0, '$dept_name', '$dept_head', '$dept_task', '$no_of_members')";
        $result = mysqli_query($db, $query);
    }
    else
    {
        $text = "Department Already Exists!";
        echo("<script type=text/javascript>alert('$text');</script>");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        <form method="POST">
            <input type="text" name="dept_name" placeholder="Department Name" required><br>
            <input type="text" name="dept_head" placeholder="Department Head" required><br>
            <input type="text" name="dept_task" placeholder="Department Task" required><br>
            <input type="number" name="no_of_members" placeholder="Number of Members" required><br>
            <input type="submit" value="Add Department">
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>