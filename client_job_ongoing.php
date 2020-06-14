<?php

include('config/dbconfig2.php');
include('functions.php');
session_start();

$username = $_SESSION['username'];

$id = $_SESSION['id'];


  $query = mysqli_query($con,"SELECT * FROM useraccount WHERE id = '$id' ");
    if($query){
       $num_of_user = mysqli_num_rows($query);
        if($num_of_user> 0 ){
            //user exist so go ahead and activate account
            $user_row = mysqli_fetch_array($query);
        }
    }

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
    <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul  class="navbar-nav sidebar fl-bk-pm sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <img class="sidebar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px">      </a>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="client_dashboard.php">
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
      <div class="sidebar-heading">
        Profile
      </div>

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

         <div class="card shadow mb-4">
        
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Your Ongoing Jobs</h6>
              <a href="client_job_completed.php" style="float: right; margin-top: -30px;"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-complete fa-sm text-white-50"></i> Completed Jobs</a>
            </div>
            <div class="card-body">
              
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-success font-weight-bold">
                      <th>Job Title</th>
                      <th>Job Category</th>
                       <th>Job Type</th>
                      <th>Description</th>
                    
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                      <?php
                        $sql = mysqli_query($con, "SELECT * From appliedjob  where client_id='$id' and approved = 1 and accepted = 1");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                          $cid = $row['client_id'];
                          $fid=$row['freelancer_id'];

                          $job_id =$row['jobid'];
                        $sql2 = mysqli_query($con, "SELECT * From job_posted  where id = '$job_id' and completed = 1");
                        $row2 = mysqli_num_rows($sql2);

                        while($row2 =mysqli_fetch_array($sql2)){


                      echo 
                         '<tr>
                    <td>'.$row2["job_title"].'</td>
                    <td>'.$row2["job_category"].'</td>
                    <td>'.$row2["job_type"].'</td>
                    <td>'.$row2["description"].'</td>                                      
                      </tr> ';
                        }
                      }



                        if(isset($_POST['review'])){

         $stars = $_POST['stars'];
         $comment = $_POST['comment'];
    
    $save_query = mysqli_query($con,"INSERT into freview(client_id,freelancer_id,stars,comment) VALUES ('$cid','$fid','$stars','$comment')");

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
      </div>        <!-- End of inbox-->
         
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!--Rating, Review and comment-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">Review Your Freelancer</h4> 
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
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-sm fl-btn-pm" href="login.php">Logout</a>
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
  <script type="text/javascript" src="admin/js/avatar.js"></script>
  <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="admin/js/demo/datatables-demo.js"></script>
</body>

</html>
