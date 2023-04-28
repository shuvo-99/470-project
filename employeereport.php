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
$q=mysqli_query($db,"SELECT * FROM leave_request");

$row=mysqli_fetch_assoc($q);
?>
<table class="table table-striped table-primary" >
            <thead>
            
            <tr >
              
              <th scope="col " class="text-center">DeptSl</th>
              
              <th scope="col " class="text-center">DeptName</th>
              <th scope="col " class="text-center">DeptHead</th>
              <th scope="col " class="text-center">DeptTask</th>
              
            </tr>
            
          </thead>
          <tbody>
            <tr class="td-text text-center">
            
              <?php
  
								$sql= "SELECT emp_sl,username,emp_position,dept_name  FROM employee";
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
									echo "<tr><td>{$row["emp_sl"]}</td><td>{$row["username"]}</td><td>{$row["emp_position"]}</td><td>{$row["dept_name"]}</td></tr>";
                                    
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>