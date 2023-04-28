<?php
  include "dbconnection.php";
  include "navbaradmin.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

<section>
  <div class="log_img">
   <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Volunteer Managment System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form  name="login" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"> 
        </div>
      
      <p style="color: white; padding-left: 15px;">
        <br><br>
       <a style="color:yellow;text-decoration: none;" href="update_passwordadmin.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp  
        <!--New to this website?<a style="color: yellow; text-decoration: none;" href="registration.html">&nbspSign Up</a>-->
      </p>
    </form>
    </div>
  </div>
</section>

  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `user` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        /*-------------if username & password matches---*/

        $_SESSION['username'] = $_POST['username']; 
        /*$_SESSION['pic']= $row['pic'];*/

        if($_SESSION['username'] == 'admin')
        {
          ?>
            <script type="text/javascript">
              window.location="admin.php"
            </script>
          <?php
        }
        else
        {
          ?>
            <script type="text/javascript">
              window.location="employee.php"
            </script>
          <?php
        }
      }
    }

  ?>

</body>
</html>