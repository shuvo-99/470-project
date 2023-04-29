<?php 
    session_start();
	include "dbconnection.php";
	
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Report</title>
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
              
              <th scope="col " class="text-center">Project Serial</th>
              
              <th scope="col " class="text-center">Name</th>
              <th scope="col " class="text-center">Supervisor</th>
              <th scope="col " class="text-center">Project Name</th>
              <th scope="col " class="text-center">No of members</th>
            </tr>
            
          </thead>
          <tbody>
            <tr class="td-text text-center">
            
              <?php
  
								$sql= "SELECT project_sl,proj_name,proj_leader,proj_task,no_of_members  FROM project";
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
								//	echo "<tr><td>{$row["project_sl"]}</td><td>{$row["proj_name"]}</td><td>{$row["proj_leader"]}</td><td>{$row["proj_task"]}</td><td>{$row["no_of_members"]}</td></tr>";
                ?>
                <tr>
                    <td class="text-center"><?php echo $row['project_sl'] ?></td>
                    <td class="text-center"><?php echo $row['proj_name'] ?></td>
                    <td class="text-center"><?php echo $row['proj_leader'] ?></td>
                    <td class="text-center"><?php echo $row['proj_task'] ?></td>
                    <td class="text-center"><?php echo $row['no_of_members'] ?></td>
                </tr>     <?php               
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>