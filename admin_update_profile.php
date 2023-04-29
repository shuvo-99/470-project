<?php
	// include "navbaradmin.php";
	include "dbconnection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Employee Profile</title>
	<link
				href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
				rel="stylesheet"
				integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
				crossorigin="anonymous"
			/>
		<!-- font awesome -->

    <script
      src="https://kit.fontawesome.com/5b05054594.js"
      crossorigin="anonymous"
    ></script>
	<style type="text/css">
		
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
			<a href="admin.php" class="btn" role="button">Human Resource Management System</a>
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
						<a href="admin.php" class="btn" role="button">Profile</a>
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
	<br>
	<?php
    $q=mysqli_query($db,"SELECT * FROM employee");

    $row=mysqli_fetch_assoc($q);
    ?>
    <section class="container">
      <div>
        <br>
        <br>
        <br>
        <br>
        <h3 class="text-center">Employee List</h3>
        <br>
        <table class="table table-striped table-primary table-bordered border-dark" >
          <thead>
            
            <tr >
              
              <th scope="col " class="text-center">EmployeeSl</th>
              
              <th scope="col " class="text-center">UserName</th>
              <th scope="col " class="text-center">Employee name</th>
              <th scope="col " class="text-center">Emp_Position</th>
              <th scope="col " class="text-center">Department</th>
              <th scope="col " class="text-center">Birth Year</th>
             
              <th scope="col " class="text-center">Mobile No</th>
              <th scope="col " class="text-center">Joining Year</th>
              <th scope="col " class="text-center">Gender</th>
             
            </tr> 
          </thead>
          <tbody>
            <tr class="td-text text-center">
            
              <?php
  
								$sql= "SELECT emp_sl,username,emp_position,dept_name,mobile_no,birth_year,joining_year,emp_name,gender  FROM employee";
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
                  
									// echo "<tr><td>{$row["emp_sl"]}</td><td>{$row["username"]}</td><td>{$row["emp_name"]}</td><td>{$row["emp_position"]}</td><td>{$row["dept_name"]}</td><td>{$row["birth_year"]}</td><td>{$row["mobile_no"]}</td><td>{$row["joining_year"]}</td><td>{$row["gender"]}</td>/tr>";
                  ?>
                  <td class="text-center"><?php echo $row['emp_sl'] ?></td>
                  <td class="text-center"><?php echo $row['username'] ?></td>
                  <td class="text-center"><?php echo $row['emp_name'] ?></td>
                  <td class="text-center"><?php echo $row['emp_position'] ?></td>
                  <td class="text-center"><?php echo $row['dept_name'] ?></td>
                  <td class="text-center"><?php echo $row['birth_year'] ?></td>
                  
                  <td class="text-center"><?php echo $row['mobile_no'] ?></td>
                  <td class="text-center"><?php echo $row['joining_year'] ?></td>
                  <td class="text-center"><?php echo $row['gender'] ?></td>
                  </tr>  <?php             
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
          
        </table>
    
      </div>
    </section>
	
	
	<!-- <div>
		<h2 class="text-center text-dark">Edit Employee Information</h2>
	</div> -->
	<br>
	<!-- Form -->
	<section style="height: 1100px;" class="container bg-info d-flex justify-content-center align-items-center rounded-3 " id="subscribe">
            
		<div>
		<br>
		<h1>Edit Employee Information</h1> <br>
				<form method="POST">
						
						<div class="mb-3">
								
								<label class="form-label">Username </label>
								<input type="type" class="form-control" name="username" required="">
								
						</div>
						<div class="mb-3">
								<label class="form-label">Employee Name</label>
								<input type="text" name="emp_name" class="form-control"  required="">
						</div>
						<!-- <div class="mb-3">
								<label class="form-label">Password</label>
								<input type="password" name="password" class="form-control"  required="">
						</div> -->
						<div class="mb-3">
								<label class="form-label">Mobile Number</label>
								<input type="text" name="mobile_no" class="form-control" required="">
						</div>
						<div class="mb-3">
								<label class="form-label">Gmail</label>
								<input type="text" name="gmail" class="form-control" required="">
						</div>
						<div class="mb-3">
								<label class="form-label">Birth Year (Year-Month-Day)</label>
								<input type="text" name="birth_year" class="form-control" required="">
						</div>
						<div class="mb-3">
								<label class="form-label">Department Name</label>
								<input type="text" name="dept_name" class="form-control" required="">
						</div>
						<div class="mb-3">
								<label class="form-label">Employee Position</label>
								<input type="text" name="emp_position" class="form-control" required="">
						</div>
						<div class="mb-3">
								<label class="form-label">Gender</label>
								<input type="text" name="gender" class="form-control" required="">
						</div>
						<!-- <div class="mb-3">
								<label class="form-label">Salary</label>
								<input type="text" name="salary" class="form-control" required="">
						</div> -->
						<div class="mb-3">
								<label class="form-label">Joining Year (Year-Month-Day)</label>
								<input type="text" name="joining_year" class="form-control" required="">
						</div>

						<br> 
						<button type="submit" name="submit" class="btn btn-danger">Update</button>
						<br>
				</form>
		</div>
	</section>


	<!-- <div class="form1">
		<form action="" method="POST" enctype="multipart/form-data">

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

</div> -->
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

        



  if(mysqli_query($db,"UPDATE `employee` SET emp_name='$emp_name', birth_year = '$birth_year', joining_year='$joining_year', gender='$gender' ,gmail='$gmail',mobile_no='$mobile_no',dept_name='$dept_name',emp_position='$emp_position' WHERE username='$_POST[username]' ;"))
  {
    ?>
            
      <script type="text/javascript">
        alert("Saved Successfully.");
        window.location="admin_update_profile.php";
      </script>
    <?php
  }
        else{
            echo "not";
        }
}
?>
	<br>
    <footer>
      <section class="bg-dark">
        <div class="container my-5">
          <div class="row gx-5 gy-5">
            <!-- About me -->

            <div class="col-lg-4">
              <!-- <div class="p-3 rounded-3 shadow-lg text-center h mb-5">
                Experience
              </div> -->
              <h3 class="fw-bold text-white">About Us</h3>
              <p class="text-white">
                Sunrise company is a leading IT company in Bangladesh with over 150+ clients from different countries accross the world. 
              </p>
            </div>

            <!-- Links -->

            <div class="col-lg-4">
              <h3 class="text-white">What makes us unique</h3>
              <ul class="p-0">
                <!-- home -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#home">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class="flink text-white link-deco">Multinational team</a>
                  </div>
                </li>

                <!-- About Me -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#aboutme">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class=" text-white link-deco">Interdisciplinary skillset</a>
                  </div>
                </li>

                <!-- Experience -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#ex">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a  class="flink text-white link-deco">Equal opportunity employer</a>
                  </div>
                </li>

                <!-- Projects -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#project">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class="flink text-white link-deco">Rapid solution development</a>
                  </div>
                </li>

                <!-- Skill -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#skill">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class="flink text-white link-deco">Customer and user centered</a>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Conatacts and Info -->

            <div class="col-lg-4">
              <h3 class="text-white">Contacts and Info</h3>
              <ul class="p-0">
                <!-- House -->

                <li class="py-2 d-flex">
                  <div>
                    <i class="fas fa-map-marker-alt text-white"></i>
                  </div>
                  <div class="text-white ps-3">
                    House - 12, Block - C, Road - 01 Gulshan-01, Dhaka
                  </div>
                </li>

                <!-- phone -->

                <li class="py-2 d-flex">
                  <div>
                    <i class="fas fa-phone-alt text-white"></i>
                  </div>
                  <div class="text-white ps-3">987******</div>
                </li>

                <!-- gmail -->

                <li class="py-2 d-flex">
                  <div>
                    <i class="fas fa-envelope text-white"></i>
                  </div>
                  <div class="text-white ps-3">sunrise*****@gmail.com</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- social Links -->

        <div class="container mt-5 pb-5">
          <ul class="d-flex justify-content-center align-items-center m-0 p-0">
            
            <li class="py-2 pe-4 d-flex">
              <a
                target="_blank"
                href=""
              >
                <i class="fab fa-linkedin text-white fa-2x"></i>
              </a>
            </li>
            <li class="py-2 pe-4 d-flex">
              <a target="_blank" href="">
                <i class="fab fa-behance-square text-white fa-2x"></i>
              </a>
            </li>
            <li class="py-2 pe-4 d-flex">
              <a
                target="_blank"
                href=""
              >
                <i class="fab fa-facebook-square text-white fa-2x"></i>
              </a>
            </li>
            <li class="py-2 pe-4 d-flex">
              <a target="_blank" href="">
                <i class="fab fa-twitter-square text-white fa-2x"></i>
              </a>
            </li>
          </ul>
          <br />
          <p class="text-white text-center">
            © Copyright 2023 Sunrise Company | All rights Reserved
          </p>
        </div>
      </section>
    </footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>