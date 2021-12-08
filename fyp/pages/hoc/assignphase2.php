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
                <a class="dropdown-item" href="../../../../includes/hoc/nav.php" data-toggle="modal" data-target="#ProfileModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../../../includes/hoc/nav.php" data-toggle="modal" data-target="#logoutModal">
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
        <div class="row justify-content-center">
        <div class="col-lg-12 bg-light p-4 rounded nt-5">
        <div class="form-group p-1 rounded">
        <h4 class="text-center btn btn-success btn-block btn-user btn-block">Assign Phase 2 For Evaluation</h4>
        <table width="100%" class="table table-striped  table-hover" >
        <thead>
            <tr class="table-btn btn-success">
                <th scope="col">Group ID</th>
                <th scope="col">No of Members</th>
                <th scope="col">Phase 2 File</th>
                <th scope="col">Upload Date</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
    <?php
           $group_id = $_GET['group_id'];
            $query=mysqli_fetch_assoc(mysqli_query($con,"select * from groupp where group_id='$group_id'"));
           $user=$query['user_id'];
           $query1=mysqli_fetch_assoc(mysqli_query($con,"select * from phase2 where user_id='$user'"));
            
				$num=mysqli_num_rows(mysqli_query($con,"select * from member where group_id='".$group_id."'"));
                
			?>
			<tr>
                <td><?php echo $group_id; ?></td>
                <td><?php echo $num; ?></td>
				<td><?php echo $query1['upload_file']; ?></td>
				<td><?php echo $query1['date_uploaded']; ?></td>
				<td><a href="selectecph2.php?group_id=<?php echo $group_id; ?>" class="btn btn-success">Assign</a> 
				</td>
			</tr>
			<?php
			
		?>
        </tbody>
        </table><hr>                    
        </div> 
        </div>
        </div> 
          </div>
  		</div>

  <?php 
    include('../../includes/scripts.php');
    
   ?>
