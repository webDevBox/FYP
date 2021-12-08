<?php 
    include('../../database/supervisor/session.php');
   include('header.php');
    include('../../includes/supervisor/navbar.php'); 
    $user=$_SESSION['user_id'];
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
				<div class="dropdown-divider"></div>
			  </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../../../../includes/supervisor/navbar.php" data-toggle="modal" data-target="#ProfileModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../../../includes/supervisor/navbar.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="form-group p-1 rounded">
            <div class="col-lg-12 bg-light p-4 rounded nt-5">
            <div class="row justify-content-center p-2 rounded">
              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="text-center">Groups</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql3=mysqli_query($con,"SELECT * FROM select_supervisor WHERE supervisor_id='$user'");
                  foreach($sql3 as $group)
                  {
                  $current=$group['group_id'];
                  $sql4=mysqli_query($con,"SELECT * FROM member WHERE group_id='$current'");
                  while($row=mysqli_fetch_assoc($sql4))
                  {
                      $student=$row['user_id'];
                      $sql5=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM register WHERE user_id='$student'"));
                      $stuname=$sql5['username'];
                    ?>
                    <tr>
                      <td class="row"> <?php echo $stuname; ?>
                        <a href="chat.php?status=<?php echo $student; ?>" class="btn btn-success ml-auto" >Chat Now</a>
                    </td>
                    </tr>
                 
                    <?php
                  }
                 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            </div>    
              </div>
  </div>
  <?php 
    include('../../includes/scripts.php');
    
   ?>
  

 


