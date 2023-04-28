<?php
session_start();
include "dbconnection.php";

if(isset($_POST['submit']))
{
    $count=0;
    $username = $_POST['username'];
    $query = "SELECT * FROM `user` WHERE username='$username'";
    $res=mysqli_query($db, $query);

    $row= mysqli_fetch_assoc($res);

    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
            alert("The username and password doesn't match.");
        </script>
        <?php
    }
    else
    {
        $query = "UPDATE `user` SET password='$_POST[password]' WHERE username='$username'";
        $res = mysqli_query($db, $query);
        ?>
        <script type="text/javascript">
            alert("Password changed successfully.");
            window.location="change_password.php"
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required=""><br>
            <input type="password" name="password" placeholder="New Password" required=""><br>
            <input type="password" name="password" placeholder="Confirm New Password" required=""><br>
            <input type="submit" name="submit" value="Change Password">
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>