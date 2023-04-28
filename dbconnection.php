<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "hrms";

    $db = mysqli_connect($host, $user, $password, $database);

    if($db->connect_error)
    {
        die("Failed to connect with database.");
    }
    else
    {
        // echo("Success!");
    }
?>