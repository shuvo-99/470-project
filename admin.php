<?php 
	include "dbconnection.php";
	include "navbaradmin.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: white;
 		}
 	</style>
 </head>
 <body style="background-color: #004528; ">
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px;" name="submit1" type="submit">Edit</button>
 		</form>
 		<div class="wrapper">
 			<?php

 			if(isset($_POST['submit1']))
 			{
 				?>
 				<script type="text/javascript">
 					window.location="editadmin.php"
 				</script>
 				<?php
 			}


 				$q=mysqli_query($db,"SELECT * FROM user where username='$_SESSION[username]' ;");
 			?>
 			<h2 style="text-align: center;">My Profile</h2>
             <br>
        </br>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 	
 			?>
 			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['username']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				


                     echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";


                    


	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Admin_Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";
				echo "</table>";
				echo "</b>";
				
 			?>
 		</div>
		<div style="text-align: center;"> <b>Add </b>
		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px;" name="submit2" type="submit">DEPT</button>
 		</form>
		<?php

if(isset($_POST['submit2']))
{
	?>
	<script type="text/javascript">
		window.location="add_department.php"
	</script>
	<?php
}


	
?>
<br>

 			
 			?>
			 <form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px;" name="submit3" type="submit">EMPLOYEE</button>
 		</form>
		<?php

if(isset($_POST['submit3']))
{
	?>
	<script type="text/javascript">
		window.location="add_employee.php"
	</script>
	<?php
}


	
?>

 			
 			?>	 		
 			</div>
			 <br>

 			
?>
<form action="" method="post">
<button class="btn btn-default" style="float: right; width: 70px;" name="submit4" type="submit">Project</button>
</form>
<?php

if(isset($_POST['submit4']))
{
?>
<script type="text/javascript">
window.location="add_project.php"
</script>
<?php
}



?>


?>	 	
	
	
 			
 			</div>

    

 </body>
 </html>