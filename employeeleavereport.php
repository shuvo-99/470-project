<?php 
    session_start();
	include "dbconnection.php";
	
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <!-- font awesome -->

    <script
      src="https://kit.fontawesome.com/5b05054594.js"
      crossorigin="anonymous"
    ></script>

    <style>
      .func_btn{
        color: rgb(250, green, blue);
      }
    </style>
  </head>
<?php
$q=mysqli_query($db,"SELECT * FROM leave_request where username='$_SESSION[username]' and status='Approved';");

$row=mysqli_fetch_assoc($q);
?>
<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				
                     echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Reason: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['reason'];
	 					echo "</td>";
	 				echo "</tr>";
                     echo "<tr>";
	 					echo "<td>";
	 						echo "<b> no_of_days_requested </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['no_of_days_requested'];
	 					echo "</td>";
	 				echo "</tr>";


                    
 				echo "</table>";
 				echo "</b>";
 			?>