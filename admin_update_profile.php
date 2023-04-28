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
	
	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['username']; ?></h4>
	</div><br><br>

	<div class="form1">
		<form action="" method="POST" enctype="multipart/form-data">

        
		<!--<input class="form-control" type="file" name="file">-->

        <label><h4><b>Username </b></h4></label>
		<input class="form-control" type="text" name="username">

        <label><h4><b>Name </b></h4></label>
		<input class="form-control" type="text" name="emp_name">

		<label><h4><b>Dept_name </b></h4></label>
		<input class="form-control" type="text" name="dept_name">

		<label><h4><b>Position</b></h4></label>
		<input class="form-control" type="text" name="emp_position">

        <label><h4><b>Email: </b></h4></label>
		<input class="form-control" type="text" name="gmail">

		<label><h4><b>Gender: </b></h4></label>
		<input class="form-control" type="text" name="gender">

        <label><h4><b>Birth Year</b></h4></label>
		<input class="form-control" type="text" name="birth_year">

        <label><h4><b>Phone: </b></h4></label>
		<input class="form-control" type="text" name="mobile_no">

		<label><h4><b>Joining year </b></h4></label>
		<input class="form-control" type="text" name="joining_year">
		

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>

</div>
	<?php 

		if(isset($_POST['submit']))
		{
			/*move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);*/
            $username = $_POST['username'];
            $emp_name = $_POST['emp_name'];
            $birth_year = $_POST['birth_year'];
			$gmail=$_POST['gmail'];
			$mobile_no=$_POST['mobile_no'];
            $emp_position = $_POST['emp_position'];
			$dept_name=$_POST['dept_name'];
            $gender = $_POST['gender'];
            $joining_year = $_POST['joining_year'];

            $sql1= "UPDATE `employee` SET emp_name='$emp_name', birth_year = '$birth_year', joining_year='$joining_year', gender='$gender'  gmail='$gmail',mobile_no='$mobile_no',dept_name='$dept_name' WHERE username='$username' ;";



			if(mysqli_query($db,$sql1))
			{
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