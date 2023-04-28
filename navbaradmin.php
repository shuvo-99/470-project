<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">Human Resource MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
           <!-- <li><a href="feedback.php">FEEDBACK</a></li>-->
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {?>
                <ul class="nav navbar-nav">
                  
                  <li><a href="admin.php">PROFILE</a></li>
                
                  
                  <!--<li><a href="fine.php">FINES</a></li>-->
                  <li><a href="addemployee.php">Add_Employee</a></li>
                  <li><a href="adddepartment.php">Add_Department</a></li>
                  <li> <a href="addproject.php">Add_Project</a></li>
                  <!--<li><a href="addsalary.php">Feedback</a></li>-->
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="AdminProfile.php">
                    
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                  
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
                <?php
            }

          ?>

      </div>
    </nav>



</body>
</html>