<?php 
	include "dbconnection.php";
	// include "navbaradmin.php";
 ?>
 <!DOCTYPE html>
 <html>
	<head>
		<title>Profile</title>

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
			.wrapper
			{
				width: 300px;
				margin: 0 auto;
				color: white;
			}
			
      .link-deco {
        text-decoration: none;
      }
			.gray{
        color: #ced4da;
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

            <!-- Add Items button -->

            <li class="nav-item nav-text">
              <a href="#additem" class="btn" role="button">Add Items</a>
            </li>
            <!-- Manage Reports button -->

            <li class="nav-item nav-text">
              <a href="#report" class="btn" role="button">Manage Reports</a>
            </li>
            <!-- Manage Employee button -->

            <li class="nav-item nav-text">
              <a href="#manage_emp" class="btn" role="button">Manage Employee</a>
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

		<!-- Add items -->

		<section id="additem" class="container my-5" >
			<h1 class="text-center">Add Items</h1><br>
			<div class="row g-4">
				<div class="col-lg-6 col-md-6 col-12">
					<a href="add_employee.php" class="link-deco">
						<div class="p-3 border bg-warning rounded-3  ">
							<h3 class="text-white  text-center">Employee</h3>
						</div>
					</a>
				</div>  
				<div class="col-lg-6 col-md-6 col-12">
					<a href="add_department.php" class="link-deco">
						<div class="p-3 border bg-success  rounded-3">
							<h3 class="text-white text-center">Department</h3>
						</div>
					</a>
					
				</div>    
				<div class="col-lg-6 col-md-6 col-12">
				<a href="add_project.php" class="link-deco">
				<div class="p-3 border bg-primary rounded-3">
					
					<h3 class="text-white text-center">Project</h3>
				</div>
				</a>
					
				</div>
				<div class="col-lg-6 col-md-6 col-12">
				<a href="send_salary.php" class="link-deco">
					<div class="p-3 border bg-success  rounded-3">
						<h3 class="text-white text-center">Payment</h3>
						
					</div>
				</a>
				</div>
			</div> 
			<br>
			<!-- <div class="container text-center">
			<div class="row row-cols-2">
				<div class="col">Column</div>
				<div class="col">Column</div>
				<div class="col">Column</div>
				<div class="col">Column</div>
			</div> -->
		</section>

		<!-- Manage Reports  -->

		<section id="report" class="container my-5" >
			<h1 class="text-center">Manage Reports</h1><br>
			<div class="row g-4">
				<div class="col-lg-6 col-md-6 col-12">
					<a href="employeereport.php" class="link-deco">
						<div class="p-3 border bg-warning rounded-3  ">
							<h3 class="text-white  text-center">Employee</h3>
						</div>
					</a>
				</div>  
				<div class="col-lg-6 col-md-6 col-12">
					<a href="departmentreport.php" class="link-deco">
						<div class="p-3 border bg-success  rounded-3">
							<h3 class="text-white text-center">Department</h3>
						</div>
					</a>
					
				</div>    
				<div class="col-lg-6 col-md-6 col-12">
				<a href="projectreport.php" class="link-deco">
				<div class="p-3 border bg-primary rounded-3">
					
					<h3 class="text-white text-center">Project</h3>
				</div>
				</a>
					
				</div>
				<div class="col-lg-6 col-md-6 col-12">
				<a href="salaryreport.php" class="link-deco">
					<div class="p-3 border bg-primary  rounded-3">
						<h3 class="text-white text-center">Payment</h3>
						
					</div>
				</a>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
				<a href="adminleavereport.php" class="link-deco">
					<div class="p-3 border bg-primary  rounded-3">
						<h3 class="text-white text-center">Leave</h3>
						
					</div>
				</a>
				</div>
			</div> 
			<br>
			<!-- <div class="container text-center">
			<div class="row row-cols-2">
				<div class="col">Column</div>
				<div class="col">Column</div>
				<div class="col">Column</div>
				<div class="col">Column</div>
			</div> -->
		</section>

		<!-- Manage Employee  -->

		<section id="manage_emp" class="container my-5" >
			<h1 class="text-center">Manage Employee</h1><br>
			<div class="row g-4">
				<div class="col-lg-6 col-md-6 col-12">
					<a href="admin_update_profile.php" class="link-deco">
						<div class="p-3 border bg-warning rounded-3  ">
							<h3 class="text-white  text-center">Update Employee Information</h3>
						</div>
					</a>
				</div>  
				<div class="col-lg-6 col-md-6 col-12">
					<a href="" class="link-deco">
						<div class="p-3 border bg-success  rounded-3">
							<h3 class="text-white text-center">Delete Employee Information</h3>
						</div>
					</a>
					
				</div>    
				<div class="col-lg-6 col-md-6 col-12">
				<a href="admin_manage_leave.php" class="link-deco">
				<div class="p-3 border bg-primary rounded-3">
					
					<h3 class="text-white text-center">Approve Leave Request</h3>
				</div>
				</a>
					
				
				
			</div> 
			<br>
			<!-- <div class="container text-center">
			<div class="row row-cols-2">
				<div class="col">Column</div>
				<div class="col">Column</div>
				<div class="col">Column</div>
				<div class="col">Column</div>
			</div> -->
		</section>
		<!-- <div class="container">
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
		</div> -->
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
                    <a class="flink text-white">Multinational team</a>
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
                    <a class=" text-white">Interdisciplinary skillset</a>
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
                    <a  class="flink text-white">Equal opportunity employer</a>
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
                    <a class="flink text-white">Rapid solution development</a>
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
                    <a href="#skill" class="flink text-white">Customer and user centered</a>
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