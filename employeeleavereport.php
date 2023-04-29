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
      .link-deco {
        text-decoration: none;
      }
    </style>
  </head>
    
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div>
        <a href="employee.php" class="btn" role="button">Human Resource Management System</a>
        </div>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarScroll"
        >
          <ul
            class="navbar-nav me-2 my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <!-- Profile button -->

            <li class="nav-item nav-text">
              <a href="employee.php" class="btn" role="button">Profile</a>
            </li>
            <!-- Logout button -->

            <li class="nav-item">
              <a href="logout.php" class="btn btn-warning" role="button"
                >Log Out</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php
$q=mysqli_query($db,"SELECT * FROM leave_request");

$row=mysqli_fetch_assoc($q);
?>
<section class="container">
  <div>
  <br>
      <br>
      <br>
      <br>
      <h3 class="text-center">My Leave Report</h3>
      <br>
  </div>
</section>
<table class="table table-striped table-primary table-bordered border-dark" >
            <thead>
            
            <tr >
              
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
  
								$sql= "SELECT username,emp_name,reason,no_of_days_requested,status  FROM leave_request where username = '$_SESSION[username]'";
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
									echo "<tr><td>{$row["username"]}</td><td>{$row["emp_name"]}</td><td>{$row["reason"]}</td><td>{$row["no_of_days_requested"]}</td><td>{$row["status"]}</td></tr>";
                   ?> 
                  <tr>
                  
                  <td class="text-center"><?php echo $row['username'] ?></td>
                  <td class="text-center"><?php echo $row['emp_name'] ?></td>
                  <td class="text-center"><?php echo $row['reason'] ?></td>
                  <td class="text-center"><?php echo $row['no_of_days_reqested'] ?></td>
                  <td class="text-center"><?php echo $row['status'] ?></td>
                  </tr>  <?php                 
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
        </table>
</body>
</html>