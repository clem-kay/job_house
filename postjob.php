<?php

include('config/dbconfig2.php');
include('functions.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style=" padding-top:5rem;" class="navbar-nav fixed-top fl-bl-pm sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      

      <!-- Divider -->

      <!-- Nav Item - Dashboard -->
      <li class="nav-item mt-4 active">
        <a class="nav-link" href="client_dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
          <hr class="sidebar-divider my-0 mb-4">

      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Messages</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Message</h6>
            <a class="collapse-item" href="client_message.php">Compose Message</a>
            <a class="collapse-item" href="client_inbox.php">Inbox</a>
            <a class="collapse-item" href="client_send_message.php">Sent Messages</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="postjob.php">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Post Job</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Profile
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profiles</h6>
            <a class="collapse-item" href="client_profile.php">View Profile</a>
          <!--   <a class="collapse-item" href="profile_edit.php">Edit Profile</a> -->
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar fl-bk-pm navbar-expand fixed-top navbar-dark  topbar mb-4 static-top shadow">
        <a class="navbar-brand " href="#">
      <img class="navbar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px">      </a>
      </a>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto align-items-center">

          
            <!-- Nav Item - User Information -->
            <li class="nav-item avatar dropdown no-arrow mr-2">
              <a class="nav-link dropdown-toggle pt-3 " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-light-600 small"><?php echo $_SESSION['firstname']?>&nbsp &nbsp | &nbsp</span>
                 <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                 <img class="img-profile rounded-circle" avatar="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="client_profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

         <div class="container">

    <div style="margin-left: 15rem;" class="card o-hidden border-0  my-5 w-75">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class=" col big-box">
            <div class=" p-5">
              <div class="text-center">
               
                <h1 class="h4 text-gray-900 mb-4">Post Your job</h1>

              </div>
              <form class="md-form user needs-validation" action="" method="post" novalidate>
              	 <?php  include('controllers/postJob.php') ?>
                <div class="form-group">
                	<div class="form-group">
                		<input type="text" name="jobtitle" class="form-control" placeholder="Enter Job Title" required>
                  	</div>
                  	<div class="form-group" required>
                  		<select name="category" class="form-control" placeholder="Select job type" required>
                  			<option value="" class="form-text">Select Category...</option>
                  			<?php
                        $sql = mysqli_query($con, "SELECT * From category");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['category_name'] ."'>" .$row['category_name'] ."</option>" ;}?>
                  		</select>
                  	</div>


 				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <!-- <label for="jobType" class="ml-4 font-weight-regular" >Select Job Type</label> -->
                   <select id="jobType"name="jobtype" role="" class="form-control" placeholder="Select job type" required>
                     <option value="" class="form-text" selected>Select Term...</option>
                        <option class="">Long Term</option>
                  			<option>Short Term</option>
                  		</select>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="budget" class="form-control"  placeholder="Enter Budget ($)" required>
                    <small class="form-text text-muted"> The notice on payments should be here
                     
                        </small>
                  </div>
        </div>
        <div class="md-form mb-4 green-textarea active-green-textarea">
           <textarea id="jobDesc" class="md-textarea form-control" name="jobdescription" rows="5" placeholder="Enter Job Desciption...." required></textarea>
           <!-- <label class="font-weight-medium" for="jobDesc">Enter job description..</label> -->
           <small class="text-muted">Short details of job including skills required and deliverables</small>

        </div>
              

               
                <div class="text-right">
                  <input class="md-form btn fl-btn-pm" type="submit" name="postjob" value="Post Job"/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>




          
        

           
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>www.jobhouse.com</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a style="background-color: red; border-color: red; color:#fff" class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>
  <script src="js/customscripts.js" type="text/javascript">
    </script>
  <!-- Page level plugins -->
  <script src="admin/vendor/chart.js/Chart.min.js"></script>
  <script type="text/javascript" src="admin/js/avatar.js"></script>
</body>

</html>
