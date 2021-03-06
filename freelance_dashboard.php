<?php

session_start();
   
include('config/dbconfig2.php');
include('functions.php');
$username = $_SESSION['username'];
$fid = $_SESSION['id'];


 $query = mysqli_query($con,"SELECT * FROM appliedjob WHERE freelancer_id = '$fid'");
  $applied=mysqli_num_rows($query);

   $query = mysqli_query($con,"SELECT * FROM appliedjob WHERE freelancer_id = '$fid' and approved=0");
  $pending=mysqli_num_rows($query);

   $query = mysqli_query($con,"SELECT * FROM appliedjob WHERE freelancer_id = '$fid' and approved=1 and accepted = 0");
  $approved=mysqli_num_rows($query);
 
  $query = mysqli_query($con,"SELECT * FROM appliedjob WHERE freelancer_id = '$fid' and accepted=1 ");
  $accepted=mysqli_num_rows($query);

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
    <ul  class="navbar-nav sidebar fl-bk-pm sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="freelance_dashboard.php">
       <img class="sidebar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px"></a>
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

               
       <!-- Search form -->
       <form class=" md-form form-inline ml-auto" method="post" action="search.php">
      <div class=" my-0">
        <input class="form-control active-green" type="text" name="item" placeholder="Search for jobs..." aria-label="Search">
      </div>
      <button class="btn fl-btn-pm btn-sm my-0 ml-sm-2" name="search" type="submit">Search</button>

    </form>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
     
              <li style="margin-top: 10px"class="nav-item no-arrow mr-2">
                <a href="" class="btn fl-btn-pm btn-sm  ml-4">Find Clients</a>
              </li>
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

            <div class="row">

            <!-- Jobs Applied -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div  class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="jobsApplied.php"><div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jobs Applied</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $applied ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-location-arrow fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Jobs Approved -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div  class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="jobsApproved.php"><div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jobs Approved</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $approved ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Jobs Accepted -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="jobAccepted.php"><div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">On-Going Jobs</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $accepted?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pending?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-layer-group fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> 


            <div class="card shadow mb-4">
            <div class="card-body">
            
            <?php
            if (isset($_GET['pageno'])){
              $pageno = $_GET['pageno'];
            }else{
              $pageno = 1;
            }         
            $no_of_records_per_page = 10;

            $offset = ($pageno - 1)*$no_of_records_per_page;
            $result = mysqli_query($con, "SELECT COUNT(*) From job_posted where closed = 0");
          $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);
       
            
            $sql = mysqli_query($con, "SELECT * From job_posted where closed = 0 ORDER BY created_date DESC LIMIT $offset, $no_of_records_per_page");
                     $row = mysqli_num_rows($sql);

                     while ($row = mysqli_fetch_array($sql)){
                       $id =$row['id'];
                       $userid = $row['user_id'];
                     $sql2 = mysqli_query($con,"SELECT * from useraccount where id='$userid'");
                     $row2 = mysqli_num_rows($sql2);
                     while($row2 = mysqli_fetch_array($sql2)){
                      $date=TimeAgo($row['created_date']);
                          
                      echo' 
                    
                        <div class=" card ml-3 mr-3" >
                          <div class="card-body row align-items-center">
                            <div class="ml-3 col">
                              <h5 class="card-title font-weight-bold">'.$row['job_title'].'</h5>
                              <div class="row pl-3">'
                                .$row2['username']. "  ". '&nbsp|&nbsp'."  " .$date. '&nbsp; | &nbsp;' .$row['job_category']. '&nbsp&nbsp;| &nbsp; <strong>'." $ ".$row['budget'].'</strong>
                               </div>
                               </div>
                               </div>
                               <hr/>
                               <div class="row">
                               <div class="col">
                               <p class="card-text  job-desc">'
                               .$row['description'].'
                            </p>
                               </div>
                               
                              <div class="ml-3 col pl-3 text-right" style="">
                          <a class="btn btn-sm fl-btn-pm" href="applyJob.php?id='.$id.'">APPLY</a>
                         </div>
                              </div>
                              
                          </div>
                  
                  <br/>

             
              '
              ;
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
        


          <!-- End of row -->
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
</body>

</html>
