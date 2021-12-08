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
    <div class="row justify-content-center">
    <div class="col-md-12 bg-light p-4 rounded ">
    <h4 class="btn btn-success btn-block btn-user btn-block">Phase 2 Information</h4>
         <table width="100%" class="table table-striped  table-hover" >
        <thead>
            <tr class="table-btn btn-success">
                <th scope="col">Group ID</th>
                <th scope="col">No of Members</th>
                <th scope="col">File</th>
                <th scope="col">Upload Date</th>
                <th scope="col">Download File</th>
                <th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
           $user_id = $_SESSION['user_id'];
           $group_id = $_GET['group_id'];
            $sql2=mysqli_num_rows(mysqli_query($con,"SELECT * FROM member WHERE group_id='$group_id'"));
$sql5=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM groupp WHERE group_id='$group_id'"));
         
$user=$sql5['user_id'];
$sql3=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM phase2 WHERE user_id='$user'"));
if($sql3)
{
			?>
			<tr>
                <td><?php echo $group_id; ?></td>
                <td><?php echo $sql2; ?></td>
				<td><?php echo $sql3['upload_file']; ?></td>
        <td><?php echo $sql3['date_uploaded']; ?></td>
        <td><a class="btn btn-primary" href="../student/upload/<?php echo $sql3['upload_file']; ?>"> Download  </a></td>
        <td><a href="phase2_status.php?group_id=<?php echo $group_id; ?>" class="btn btn-info">Status Report</a></td>
      </tr>
      <?php
}
      ?>
        </tbody>
        </table><hr>
    </div>	  
    </div>
    </div>
     <?php 
      include('../../includes/scripts.php');
      
     ?>
  

 


