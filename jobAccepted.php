<?php

session_start();
   
include('config/dbconfig2.php');
include('functions.php');
$username = $_SESSION['username'];
$fid = $_SESSION['id'];
  
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #207b41;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Job House</div>
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
        <a class="nav-link collapsed" href="freelance_compose_message.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profiles</h6>
            <a class="collapse-item" href="freelance_view_profile.php">View Profile</a>
            <a class="collapse-item" href="profile_edit.php">Edit Profile</a>
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
            
            <a class="collapse-item" href="freelance_view_potfolio.php">View Portfolio</a>
            <a class="collapse-item" href="portfolio.php"> Portfolio</a>
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
            <i style="color: #207b41; border-color: #207b41;"class="fa fa-bars"></i>
          </button>

                 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']?></span>
                 <div class="topbar-divider d-none d-sm-block"></div>
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['usertype']?></span>
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
              
              $accepted_query = mysqli_query($con,"DELETE FROM appliedjob WHERE jobid = '$jobid'");

              $end_job_query = mysqli_query($con, "UPDATE job_posted SET closed = 0 WHERE id = '$jobid'");

              if($accepted_query && $end_job_query){
                 echo '<div class="alert alert-success">
                    <p>You have sucessfuly declined the job</p>
                  </div>';
                }else
                 echo '<div class="alert alert-success">
                    <p>Decline Failed</p>
                  </div>';

            }
          ?>
            <div class="card-header py-3">
              <h6 style="color:#000;" class="m-0 font-weight-bold">On-Going Jobs</h6>
              <a href="jobscompleted.php" style="float: right; margin-top: -30px;"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-complete fa-sm text-white-50"></i> Completed Jobs</a>
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
                        $sql = mysqli_query($con, "SELECT * From appliedjob where freelancer_id='$fid' and approved = 1 and accepted = 1");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                          $jobid = $row['jobid'];
                          $clientid = $row['client_id'];
                          $sql2 = mysqli_query($con, "SELECT * FROM job_posted WHERE id = '$jobid' and completed = 0 ");
                          $row2 = mysqli_num_rows($sql2);
                          if ($row== 0){
                            echo '<div class=""><h4>Sorry you do not have any on going project</h4></div>';
                          }
                          while ($jobrow = mysqli_fetch_array($sql2)){
                    
                      echo 
                         '<tr>
                    <td>'.$jobrow["job_title"].'</td>
                    <td>'.$jobrow["job_category"].'</td>
                    <td>'.$jobrow["job_type"].'</td>
                    <td>'.$jobrow["description"].'</td>
                    <td> <a  href="jobAccepted.php?id='.$jobid.'" style="background-color:#ff0000;border-color:#ff0000;color:#fff" class="btn btn-primary"><i class="fas fa-fw fa-times"></i>Decline</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-fw fa-comments"></i>Review</button> 
                       <a  href="jobscompleted.php?id='.$jobid.'" style="background-color:#207b41;border-color:#207b41;color:#fff" class="btn btn-primary"><i class="fas fa-fw fa-check"></i>Complete</a>
                      
                    </td> 

                      </tr> ';
                      }
                    }

                      if(isset($_POST['review'])){

         $stars = $_POST['stars'];
         $comment = $_POST['comment'];
    
    $save_query = mysqli_query($con,"INSERT into review(client_id,frelancer_id,stars,comment) VALUES ('$clientid','$fid','$stars','$comment')");

    if($save_query){
        echo 'Thank you very much for your review';
    }else{
        echo 'Review Failed....Please try again';
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

       

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!--Rating, Review and comment-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">Review Your Client</h4> 
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form method="post" action="">
        <div class="form-group">
          <input type="number" class="form-control" max="5" min="1" name="stars" placeholder="Number of stars for your client">
        </div>
        <div class="form-group">
        <textarea class="form-control" name="comment" placeholder="Enter Your Comment Here"></textarea>
        </div>
      </div>
    
      <div class="modal-footer">
      <input style="border-color:#207b41 ;background-color:#207b41;color:#fff; " type = submit name="review" class="btn" value="Review"/>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </form>
    </div>
    </div>

  </div>
</div>

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
  

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="admin/vendor/chart.js/Chart.min.js"></script>
</body>

</html>
