<?php
	include "navbaradmin.php";
	include "dbconnection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: #004528;">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	
    <?php
		
		$sql = "SELECT * FROM employee  where username='$_SESSION[username]' ;";
		$result = mysqli_query($db,$sql);

		while ($row = mysqli_fetch_assoc($result)) 
		{
			
			$mobile_no=$row['mobile_no'];
			$dept_name=$row['dept_name'];
           
		}

	?>
	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['username']; ?></h4>
	</div><br><br>
	<?php
		
        $q=mysqli_query($db,"SELECT * FROM employee  where username='$_SESSION[username]' ;");
        $row=mysqli_fetch_assoc($q);
        

	?>
	<div class="form1">
		<form action="" method="POST" enctype="multipart/form-data">

		<!--<input class="form-control" type="file" name="file">-->

		<label><h4><b>Dept_name </b></h4></label>
		<input class="form-control" type="text" name="dept_name" value="<?php echo $dept_name; ?>">

		<label><h4><b>Name</b></h4></label>
        <?php
        echo "<td>"; echo $row['emp_name']; echo "</td>";
        ?>
        <br>

		<label><h4><b>Position</b></h4></label>
        <?php
        echo "<td>"; echo $row['emp_position']; echo "</td>";
        ?>
        <br>

        <label><h4><b>Email: </b></h4></label>
		<input class="form-control" type="text" name="gmail" value="<?php echo $row['gmail']; ?>">

		<label><h4><b>Gender</b></h4></label>
        <?php
        echo "<td>"; echo $row['gender']; echo "</td>";
        ?>
        <br>
        <label><h4><b>Phone: </b></h4></label>
		<input class="form-control" type="text" name="mobile_no" value="<?php echo $mobile_no; ?>">

		<label><h4><b>Joining Year</b></h4></label>
        <?php
        echo "<td>"; echo $row['joining_year']; echo "</td>";
        ?>
        <br>
		<label><h4><b>Birth Year</b></h4></label>
        <?php
        echo "<td>"; echo $row['birth_year']; echo "</td>";
        ?>
		

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>

</div>
	<?php 

		if(isset($_POST['submit']))
		{
			/*move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);*/

			$gmail=$_POST['gmail'];
			$mobile_no=$_POST['mobile_no'];
			$dept_name=$_POST['dept_name'];

			$sql1= "UPDATE `employee` SET  gmail='$gmail',mobile_no='$mobile_no',dept_name='$dept_name' WHERE username='$_SESSION[username]' ;";
            echo $sql1;
			if(mysqli_query($db,$sql1))
			{   echo "hello";
				?>
                
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="update_profile.php";
					</script>
				<?php
			}
            else{
                echo "not";
            }
		}
 	?>
</body>
</html>