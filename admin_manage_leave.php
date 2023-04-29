<?php 
    session_start();
	include "dbconnection.php";
	
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Leave</title>
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

  <body>
  <?php
$q=mysqli_query($db,"SELECT * FROM leave_request");

$row=mysqli_fetch_assoc($q);
?>
<table class="table table-striped table-primary" >
            <thead>
            
            <tr >
            <th scope="col " class="text-center">Request Serial</th>
              <th scope="col " class="text-center">Username</th>
              
              <th scope="col " class="text-center">Name</th>
              <th scope="col " class="text-center">Reason</th>
              <th scope="col " class="text-center">No of days leave</th>
              <th scope="col " class="text-center">Status</th>
            </tr>
            
          </thead>
          <tbody>
            <tr class="td-text text-center">
            
              <?php
  
								$sql= "SELECT req_sl,username,emp_name,reason,no_of_days_requested,status  FROM leave_request where status is NULL";
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
									// echo "<tr><td>{$row["req_sl"]}</td><td>{$row["username"]}</td><td>{$row["emp_name"]}</td><td>{$row["reason"]}</td><td>{$row["no_of_days_requested"]}</td><td>{$row["status"]}</td></tr>";
                  ?>
                  <tr>
                      <td class="text-center"><?php echo $row['req_sl'] ?></td>
                      <td class="text-center"><?php echo $row['username'] ?></td>
                      <td class="text-center"><?php echo $row['emp_name'] ?></td>
                      <td class="text-center"><?php echo $row['reason'] ?></td>
                      <td class="text-center"><?php echo $row['no_of_days_requested'] ?></td>
                      <td class="text-center"><?php echo $row['status'] ?></td>
                  </tr> <?php                 
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>

<form method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Serial</label>
        <input type="text" name="serial" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Serial">
        
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <input type="text" name="status" class="form-control" id="exampleInputPassword1" placeholder="Enter Status">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['submit'])){
    $serial = $_POST['serial'];
    $status = $_POST['status'];
    
    $sql = "UPDATE leave_request SET status='$status' WHERE req_sl='$serial'";
    $res = mysqli_query($db, $sql);
    
    if($res){
        ?>
        <script type="text/javascript">
			alert("Updated Successfully");
			window.location="admin.php";
		</script>
        <?php
    }else{
        echo "Failed to update";
    }

}
?>
  </body>
</html>
