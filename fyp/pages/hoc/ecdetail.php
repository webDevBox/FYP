<?php 
    include('../../database/hoc/session.php');
   include('header.php');
    include('../../includes/hoc/navbar.php'); 
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
				<div class="dropdown-divider"></div>
			  </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../../../../includes/hoc/navbar.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../../../includes/hoc/navbar.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <!-- /.container-fluid -->
                <div class="form-group p-2 rounded">
                <div class="row justify-content-center">
                <div class="col-md-12 bg-light p-4 rounded nt-5">
	            <table class="table table-striped" id="dataTable" width="100%" >
                  <h4 class="text-center btn btn-success btn-block btn-user btn-block">Evaluation Committee Information </h4>
				  <thead>
					<tr class="table-btn btn-success">
					  <th scope="col">Name</th>
					  <th scope="col">Email</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Domain</th>
                      <th scope="col">Created Date</th>
					</tr>
				  </thead>
				  <tbody>
		           <?php
                   $user_id = $_SESSION['user_id'];
			       $query=mysqli_query($con,"SELECT register.username,register.email,register.date_created,faculty.contact,faculty.domain FROM register,faculty WHERE register.username = faculty.username and register.email = faculty.email and register.access='4'");
			       while($row=mysqli_fetch_array($query))
                   {
                       $user_name = $row['username'];
                       $email = $row['email'];
                       $contact = $row['contact'];
                       $domain = $row['domain'];
                       $created_date = date('M d, Y - h:i A', strtotime($row['date_created']));
			       ?>
					<tr class="table">
                      <td><?php echo $user_name; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $contact; ?></td>
                      <td><?php echo $domain; ?></td>
					  <td><?php echo $created_date; ?></td>				
                    </tr>
                 <?php } ?>
				  </tbody>
				</table>
				</div>	  
                </div>
                </div>
     </div>
     <?php 
      include('../../includes/scripts.php');
     
     ?>
  

 


