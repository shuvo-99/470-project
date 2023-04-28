<?php
session_start();
include("dbconnection.php");
$query = mysqli_query($db, "SELECT * FROM user");
while($row = mysqli_fetch_array($query))
{
    $name = $row['username'];
    $password = $row['password'];
    echo("$name<br>$password<br>");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Database</title>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        
    </main>

    <footer>
        
    </footer>
</body>
</html>