<?php
session_start();
include("dbconnection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   
    $proj_name = $_POST['proj_name'];
    $dept_name = $_POST['dept_name'];
    $proj_leader = $_POST['proj_leader'];
    $proj_task = $_POST['proj_task'];   
    $no_of_members = $_POST['no_of_members'];


    $query = "select * from project where proj_name = '$proj_name'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 0)
    {
        $query = "insert into project values(0,  '$proj_name', '$dept_name', '$proj_leader', '$proj_task', '$no_of_members')";
        $result = mysqli_query($db, $query);
    }
    else
    {
        $text = "Project Already Exists!";
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
        
            <input type="text" name="proj_name" placeholder="Project Name" required><br>
            <input type="text" name="dept_name" placeholder="Department Name" required><br>
            <input type="text" name="proj_leader" placeholder="Project Leader" required><br>
            <input type="text" name="proj_task" placeholder="Project Task" required><br>
            <input type="number" name="no_of_members" placeholder="Project Task" required><br>
            <input type="submit" value="Add Project">
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>
