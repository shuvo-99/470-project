<?php 
    session_start();
	include "dbconnection.php";
	
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department</title>
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
$q=mysqli_query($db,"SELECT * FROM salary where username='$_SESSION[username]';");

$row=mysqli_fetch_assoc($q);
?>
<table class="table table-striped table-primary" >
            <thead>
            
            <tr >
              
              <th scope="col " class="text-center">user</th>
              
              <th scope="col " class="text-center">Name</th>
              <th scope="col " class="text-center">Month</th>
              <th scope="col " class="text-center">Medium</th>
              <th scope="col " class="text-center">Salary</th>
              
            </tr>
            
          </thead>
          <tbody>
            <tr class="td-text text-center">
            
              <?php
  
								$sql= "SELECT emp_name,username,month,medium,payment  FROM salary where username = '$_SESSION[username]';
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
									echo "<tr><td>{$row["username"]}</td><td>{$row["emp_name"]}</td><td>{$row["month"]}</td><td>{$row["medium"]}</td><td>{$row["payment"]}</td></tr>";
                                    
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>