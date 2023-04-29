
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
    </style>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
    
    <main>
      <section class="container">
        <div class="container text-center">
          <div class="row">
            <div class="col-4 text bg-secondary">
              
              
              <div class="d-grid gap-5 pt-5 pb-5 col-6 mx-auto">
                <a href="update_profile.php" class="btn btn-light" type="button">Update Profile</a>
                <a href="employeesalary.php" class="btn btn-light" type="button">View Salary Report</a>
                <a href="employeeleavereport.php" class="btn btn-light" type="button">View Leave Report</a>
                <a href="leave_request.php" class="btn btn-light" type="button">Leave Request</a>
                <a href="change_password.php" class="btn btn-light" type="button">Change Password</a>
              </div>
              
            </div>
            <div class="col-8">
              
            <?php
                
                $q=mysqli_query($db,"SELECT * FROM employee where username='$_SESSION[username]' ;");
 				$row=mysqli_fetch_assoc($q);

 	
 			?>
              <h3 class="text-danger">Welcome <?php echo($row['emp_name']); ?></h3>
              <br>
              <!-- <table class="table">
                <thead> -->
                  <!-- <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr> -->
                <!-- </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>     -->
            <?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Employee Sl: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['emp_sl'];
	 					echo "</td>";
	 				echo "</tr>";


                     echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['emp_name'];
	 					echo "</td>";
	 				echo "</tr>";
                     echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Employee Position: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['emp_position'];
	 					echo "</td>";
	 				echo "</tr>";


                     echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['gmail'];
	 					echo "</td>";
	 				echo "</tr>";


	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Mobile No </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['mobile_no'];
	 					echo "</td>";
	 				echo "</tr>";
                     echo "<tr>";
                     echo "<td>";
                         echo "<b>Department_ Name: </b>";
                     echo "</td>";
                     echo "<td>";
                         echo $row['dept_name'];
                     echo "</td>";
                 echo "</tr>";
                 echo "<tr>";
                 echo "<td>";
                     echo "<b> Birth Year: </b>";
                 echo "</td>";
                 echo "<td>";
                     echo $row['birth_year'];
                 echo "</td>";
             echo "</tr>";	
             echo "<tr>";
            //  echo "<td>";
            //      echo "<b> Salary: </b>";
            //  echo "</td>";
            //  echo "<td>";
            //      echo $row['salary'];
            //  echo "</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td>";
             echo "<b> Gender: </b>";
         echo "</td>";
         echo "<td>";
             echo $row['gender'];
         echo "</td>";
     echo "</tr>";
 				echo "</table>";
 				echo "</b>";
 			?>
            </div>
           
          </div>
        </div>
      </section>
    </main>
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