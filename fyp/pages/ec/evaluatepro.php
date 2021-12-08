<?php 
    include('../../database/ec/session.php');
   include('header.php');
    include('../../includes/ec/navbar.php'); 
    $group_id=$_GET['id_group'];
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
                <a class="dropdown-item" href="../../../../includes/ec/navbar.php" data-toggle="modal" data-target="#ProfileModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../../../includes/ec/navbar.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">
          </div>
        </div><br>
        <!-- /.container-fluid -->

                <div class="form-group p-1 rounded">
                <div class="row justify-content-center">
				<div class="col-md-12 bg-light p-4 rounded nt-5">
       <div class="form-group p-1 rounded">
        <h4 class="text-center btn btn-success btn-block btn-user btn-block">Evaluate Group Proposal </h4>
                <form action="../../database/ec/process.php" method="post" id="form-data">
				<div class="form-group input-group">
                <span class="input-group-addon" style="width:60px;">Status:</span>
				<select style="width:350px;" class="form-control" name="status">
                <option value="Approved">Approved</option>
                <option value="Reject">Reject</option>
				</select>
				</div>
				<div class="form-group">
                <input type="text" name="remarks" class="form-control" placeholder="Remarks" required>
        </div>
        <div class="form-group d-none">
                <input type="text" name="id_group" class="form-control" value="<?php echo $group_id; ?>" required>
				</div>
                <hr>
                <div style="color: green; font-size: 15px;">
		        <div class="text-center">
		        <?php
			    	if(isset($_SESSION['msg']))
                    {
				      echo $_SESSION['msg'];
				  	  unset($_SESSION['msg']);
			    	}
		     	?>
	         	</div>
                </div>
                <hr>
				<div class="form-group ">
                <button type="submit" name="evaluate_proposal" class="btn btn-success btn-block btn-user btn-block">Evaluate</button>
				</div>			
                </form>                      
           </div>
           </div>
  		</div>
        </div >
        
  </div>

  <?php 
    include('../../includes/scripts.php');
   
   ?>
  

 



 


