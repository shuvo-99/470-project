<?php
session_start();
include "dbconnection.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $no_of_days = $_POST['no_of_days'];
    $reason = $_POST['reason'];
    $query = "INSERT INTO `leave_request` (`username`, `emp_name`, `no_of_days_requested`, `reason`) VALUES ('$_SESSION[username]', '$name', '$no_of_days', '$reason')";
    $res = mysqli_query($db, $query);

    ?>
        <script type="text/javascript">
            alert("Request Sent Successfully.");
            window.location="leave_request.php"
        </script>
        <?php
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request</title>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="no_of_days" placeholder="Number of Days" required><br>
            <input type="text" name="reason" placeholder="Reason" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>