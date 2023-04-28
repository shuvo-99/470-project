<?php
session_start();
include "dbconnection.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $month = $_POST['month'];
    $salary = $_POST['salary'];
    $medium = $_POST['medium'];
    
    $sql = "INSERT INTO salary (username, emp_name, month, medium, amount) VALUES ('$_SESSION[username]', '$name', '$month', '$medium', '$salary')";
    $result = mysqli_query($db, $sql);
    
    if($result)
    {
        echo "<script>alert('Salary sent successfully.')</script>";
    }
    else
    {
        echo "<script>alert('Failed to send salary.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Salary to Employee</title>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        <form method="POST">
            <input type="text" name="name" placeholder="Employee Name" required><br><br>
            <input type="text" name="month" placeholder="Month" required><br><br>
            <input type="text" name="salary" placeholder="Salary" required><br><br>
            <input type="text" name="medium" placeholder="Medium" required><br><br>
            
            <input type="submit" name="submit" value="Send">
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>