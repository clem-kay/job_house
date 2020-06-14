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
    <title>Search Result</title>
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
    <ul  class="navbar-nav sidebar fl-bk-pm sidebar-dark accordion" id="accordionSidebar">

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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profiles</h6>
            <a class="collapse-item" href="freelance_view_profile.php">View Profile</a>
           <!--  <a class="collapse-item" href="profile_edit.php">Edit Profile</a> -->
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

       <form method="post" action="search.php" class="form-inline ml-auto" >
      <div class="md-form my-0">
        <input class="form-control" type="text" placeholder="Search" name="item" aria-label="Search">
      </div>
      <input  class="btn btn-sm btn-outline-green" type="submit"name="search" value="Search">
    </form>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - Alerts -->
           
            <!-- Nav Item - User Information -->
            <li class="nav-item avatar dropdown no-arrow mr-2">
              <a class="nav-link dropdown-toggle pt-3 " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']?>&nbsp | &nbsp</span>
                 <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                 <img class="img-profile rounded-circle" avatar="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php 
                  if (isset($_POST['search'])){
                      $searchq =$_POST['item'];

                       $query = mysqli_query($con,"SELECT * FROM job_posted WHERE job_category = '$searchq'");
                        $count=mysqli_num_rows($query);
                      if ($count == 0){
                       echo '<div class="alert alert-danger"> No job related to your search </div>';
                      }
                  else{
                    if (isset($_GET['pageno'])){
              $pageno = $_GET['pageno'];
            }else{
              $pageno = 1;
            }         
            $no_of_records_per_page = 3;

            $offset = ($pageno - 1)*$no_of_records_per_page;
            $result = mysqli_query($con, "SELECT COUNT(*) From job_posted where closed = 0");
          $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);
            
            $sql = mysqli_query($con, "SELECT * From job_posted where job_category LIKE '%$searchq%' or job_title  like '%$searchq%' and closed = 0 LIMIT $offset, $no_of_records_per_page");
                     $row = mysqli_num_rows($sql);

                     while ($row = mysqli_fetch_array($sql)){
                       $id =$row['id'];
                       $userid = $row['user_id'];
                     $sql2 = mysqli_query($con,"SELECT * from useraccount where id='$userid'");
                     $row2 = mysqli_num_rows($sql2);
                     while($row2 = mysqli_fetch_array($sql2)){
                      $date=TimeAgo($row['created_date']);
                          
                      echo' 
                    
                        <div class="mx-auto card ml-3 mr-3 pl-3 pr-3 w-75" style="width: fit-content;">
                          <div class="card-body row">
                            <div class="ml-3 col-md-1-12">
                              <h5 class="card-title font-weight-bold">'.$row['job_title'].'</h5>
                              <div class="row pl-3">'
                                .$row2['username']. "  ". '|'."  " .$date. '&nbsp; | &nbsp;' .$row['job_category']. '&nbsp;| &nbsp; <strong>'." $ ".$row['budget'].'</strong>
                               </div>
                               <hr/>
                                <p class="card-text job-desc">'
                                 .$row['description'].'
                              </p>
                              
                          </div>
                          <div class="ml-3 col-md-1-12 pl-3 pr-3 poster-col">
                           <a class="btn btn-sm fl-btn-pm" style="background-color: #207b41; border-color: #207b41; position:relative;left:37rem;" href="applyJob.php?id='.$id.'">APPLY</a>
                          </div>
                          <div class="col-sm-1-12 mt-2 ml-3"  ">            
                          </div>
                      </div>
                  </div>
                  <br/>';
              }
            } 
          }
}
           ?>   
                  
         <nav style="float: right;"aria-label="Page navigation example">
              <ul class="pagination">
        <li><a class="btn btn-sm btn-outline-green" href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a class="btn btn-sm btn-outline-green" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a class="btn btn-sm btn-outline-green" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a class="btn btn-sm btn-outline-green" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
         </ul>
              </nav>
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
    <script src="admin/js/demo/datatables-demo.js"></script>
    <script src="admin/js/avatar.js"></script>
</body>

</html>
