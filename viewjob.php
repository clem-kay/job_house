<?php

session_start();
   
include('config/dbconfig2.php');
include('functions.php');
$username = $_SESSION['username'];

?>


<!DOCTYPE html>
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
  <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="search.php">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" name="item" placeholder="Search for job by category..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input style="background-color: #207b41; border-color: #207b41;" type="submit" name="search" class="btn btn-primary" value=">>"/>
              </div>
            </div>
          </form>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="freelance_compose_message.php" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                 <form class="form-inline mr-auto w-100 navbar-search" method="post" action="search.php">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="item" placeholder="Search for job by category..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <input style="background-color: #207b41; border-color: #207b41;" type="submit" name="search" class="btn btn-primary" value=">>"/>
                    
                    </div>
                  </div>
                </form>
              </div>
            </li>

          
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
        <!-- Begin Page Content -->
        <div class="container-fluid">
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                  <?php
                     $sql = mysqli_query($con, "SELECT * From job_posted where closed = 0");
                     $row = mysqli_num_rows($sql);

                     while ($row = mysqli_fetch_array($sql)){
                       $id =$row['id'];
                       $userid = $row['user_id'];
                     $sql2 = mysqli_query($con,"SELECT * from useraccount where id='$userid'");
                     $row2 = mysqli_num_rows($sql2);
                     while($row2 = mysqli_fetch_array($sql2)){
                          
                      echo' <tr><td>
                      <div id="dataTable" style="height:100vh width:40px">
                        <div class="mx-auto card ml-3 mr-3 pl-3 pr-3 w-75" style="width: fit-content;">
                          <div class="card-body row">
                            <div class="ml-3 col-md-1-12">
                              <h5 class="card-title font-weight-bold">'.$row['job_title'].'</h5>
                              <div class="row pl-3">'
                                .$row2['username']. "  ". '|'."  " .$row['created_date']. '&nbsp; | &nbsp;' .$row['job_category']. '&nbsp;| &nbsp; <strong>'." $ ".$row['budget'].'</strong>
                               </div>
                               <hr/>
                                <p class="card-text job-desc">'
                                 .$row['description'].'
                              </p>
                              <hr/>
                          </div>
                          <div class="ml-3 col-md-1-12 pl-3 pr-3 poster-col">
                           <a class="btn btn-primary" style="background-color: #207b41; border-color: #207b41; position:relative;left:37rem;" href="applyJob.php?id='.$id.'">APPLY</a>
                          </div>
                          <div class="col-sm-1-12 mt-2 ml-3"  ">            
                          </div>
                      </div>
                  </div>
              </div></td>
              </tr>'
              ;
              }
            }        
           ?>   
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->

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
 
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="admin/js/demo/datatables-demo.js"></script>
</body>

</html>
