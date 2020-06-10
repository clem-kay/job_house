<?php 

session_start();
include('config/dbconfig2.php');
include('functions.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin | Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div style="background-color:#207b41;" id="wrapper">

    <!-- Sidebar -->
    <ul  class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminIndex.php">
        <div class="sidebar-brand-text mx-3">Administrator</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="adminIndex.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">JobHouse Users</h6>
            <a class="collapse-item" href="view_freelancers.php">Freelancers</a></a>
            <a class="collapse-item" href="view_clients.php">Clients</a>
          </div>
        </div>
      </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="view_messages.php">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Messages</span></a>
      </li>


      <!-- Heading -->
      <div class="sidebar-heading">
        Finances
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="transaction.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Transactions</span></a>
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
        <nav  class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

    

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']?></span>
                <div class="topbar-divider d-none d-sm-block"></div>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Add Administrator
                </a>


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">
                  <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
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

        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Amalitech &copy; Freelance 2020</span>
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
    <?php 
    if (isset($_POST['save'])){
    $user = $_POST['username'];
   $password = md5($_POST['password']);
  
    //check if user already exist
    $check_user_account = mysqli_query($con,"SELECT * FROM adminuser WHERE username = '$user' ");

    $num_of_users = mysqli_num_rows($check_user_account);
    if($num_of_users > 0){

        //if user already exist, display error message
        echo '<h6>Username Taken</h6>';

    }else{
        //proceed to register user
        //perform query
        $save_to_db_query = mysqli_query($con,"INSERT INTO adminuser(username,password)VALUES('$user','$password')");
       
        if($save_to_db_query){
          echo '<h6>New Administrator Added</h6>';
        }
  }

}

    ?>

    <!-- Modal content-->
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h4 class="modal-title">Add New Admin</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Enter Username" >
        </div>
        
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        
      </div>
      <div class="modal-footer">
        <input style="background-color:#207b41; color: #fff;" type="submit" class="btn btn-primay" name="save" value="Save">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </form>>
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
          <a style="background-color: #ff0000;border-color:#ff0000;" class="btn btn-primary" href="controllers/logoutAdmin.php">Logout</a>
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

  <!-- Page level custom scripts -->
  <script src="admin/js/demo/chart-area-demo.js"></script>
  <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>
