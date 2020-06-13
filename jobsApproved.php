<?php

session_start();
   
include('config/dbconfig2.php');
include('functions.php');
$username = $_SESSION['username'];
$fid = $_SESSION['id'];

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
     <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar fl-bk-pm sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <img class="sidebar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px">      </a>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="freelance_dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Messages</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="freelance_compose_message.php">Compose Message</a>
            <a class="collapse-item" href="freelance_inbox.php">Inbox</a>
            <a class="collapse-item" href="freelance_send_message.php">Sent Message</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="viewjob.php">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>View Jobs</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Freelance
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="freelance_compose_message.php" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profiles</h6>
            <a class="collapse-item" href="freelance_view_profile.php">View Profile</a>
        <!--     <a class="collapse-item" href="profile_edit.php">Edit Profile</a> -->
          </div>
        </div>
      </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Portfolio</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
           <!--  <a class="collapse-item" href="freelance_view_potfolio.php">View Portfolio</a> -->
            <a class="collapse-item" href="portfolio.php">Add Portfolio</a>
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fap fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item avatar dropdown no-arrow mr-2">
              <a class="nav-link dropdown-toggle pt-3 " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']?>&nbsp | &nbsp</span>
                 <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                 <img class="img-profile rounded-circle" avatar="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="freelance_view_profile.php">
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

         <div class="card shadow mb-4">
          <?php 
            if(isset($_GET['id'])){
              $jobid = $_GET['id'];
              
              $accepted_query = mysqli_query($con,"UPDATE appliedjob SET accepted = 1 WHERE jobid = '$jobid'");

              $end_job_query = mysqli_query($con, "UPDATE job_posted SET closed = 1 WHERE id = '$jobid'");

              if($accepted_query && $end_job_query){
                 echo '<div class="alert alert-success">
                    <p>You have sucessfuly accepted the job</p>
                  </div>';
                }else
                 echo '<div class="alert alert-success">
                    <p>Acceptance Failed</p>
                  </div>';

            }
          ?>
            <div class="card-header py-3">
              <h6 style="color:#000;" class="m-0 font-weight-bold">Your Approved Job</h6>
            </div>
            <div class="card-body">
              
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Job Title</th>
                      <th>Job Category</th>
                       <th>Job Type</th>
                      <th>Description</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $sql = mysqli_query($con, "SELECT * From appliedjob where freelancer_id='$fid' and approved = 1 and accepted = 0");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                          $jobid = $row['jobid'];
                          $sql2 = mysqli_query($con, "SELECT * FROM job_posted WHERE id = '$jobid'");
                          $row2 = mysqli_num_rows($sql2);
                          while ($jobrow = mysqli_fetch_array($sql2)){
                      echo 
                         '<tr>
                    <td>'.$jobrow["job_title"].'</td>
                    <td>'.$jobrow["job_category"].'</td>
                    <td>'.$jobrow["job_type"].'</td>
                    <td>'.$jobrow["description"].'</td>
                    <td> <a  href="jobsApproved.php?id='.$jobid.'" style="background-color:#207b41;border-color:#207b41;color:#fff" class="btn btn-primary"> Accept</a></td>                                            
                      </tr> ';
                        }
                      }
                        ?>
                 </tbody>
                </table>
              </div>
            </div>
          
       



          <!-- End of row -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Amalitech Freelance</span>
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
          <a style="background-color: red; border-color: red; color:#fff" class="btn btn-primary" href="controllers/logoutUser.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Upload Picture Modal -->
  <div class="modal fade" id="#changePictureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Picture</h5>
        </div>
        <div class="modal-body">Click to select a picture.</div>
        <div class="modal-footer">
          <form method="post" enctype="form">
          <input type="files" name="change" id="pic">
        </form>>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="admin/vendor/chart.js/Chart.min.js"></script>

  <script src="admin/js/demo/datatables-demo.js"></script>
  <script type="text/javascript" src="admin/js/avatar.js"></script>

   <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="addmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="admin/js/demo/datatables-demo.js"></script>

</body>

</html>
