<?php

session_start();
   
include('config/dbconfig2.php');
include('functions.php');
$username = $_SESSION['username'];

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

  <!-- <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul  class="navbar-nav sidebar fl-bk-pm sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="freelance_dashboard.php">
      <img class="sidebar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px"></a>

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
            <i class="fa fap fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="md-form d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="search.php">
            <div class="input-group ">
              <input type="text" class="form-control medium" name="item" placeholder="Search for job by category..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" name="search" class="btn btn-sm fl-btn-pm"> <i class="fa fap-w fa-search" aria-hidden="true"></i></button>
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
                 <!-- <form class="mdb-form form-inline mr-auto w-100 navbar-search" method="post" action="search.php">
                  <div class="mdb-form input-group">
                    <input type="text" class="form-control   small" name="item" placeholder="Search for job by category..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="mdb-form input-group-append">
                      <input  type="submit" name="search" class="btn fl-btn-pm" value=">>"/>
                    </div>
                  </div>
                </form> -->
                <form class="form-inline mr-auto" method = "post" action="search.php">
                    <div class="md-form my-0 input-with-pre-icon ">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search for job by category" aria-label="Search">
                        <button type="submit" name="search" class="btn fl-btn-pm">Search</button>
                    </div>
                </form>
              </div>
            </li>

          
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
        <!-- Begin Page Content -->
        <div class="container-fluid">
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="jobstb" width="100%" cellspacing="0">
                  <tbody>

            <?php
            if (isset($_GET['pageno'])){
              $pageno = $_GET['pageno'];
            }else{
              $pageno = 1;
            }         
            $no_of_records_per_page = 4;

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
                      $description = $row['description'];

                      
                          
                      echo' <tr><td>
                        <div class="mx-auto card ml-3 mr-3 pl-3 pr-3 w-75" >
                          <div class="card-body row align-items-center">
                            <div class="ml-3 col-md-10-12">
                              <h5 class="card-title font-weight-bold">'.$row['job_title'].'</h5>
                              <div class="row pl-3">'
                                .$date. '&nbsp; | &nbsp;' .$row['job_category']. '&nbsp;| &nbsp; <strong>'." $ ".$row['budget'].'</strong>
                               </div>
                               <hr/>
                                <p class="card-text job-desc">'
                                 .substr($description, 0,150).'...
                              </p>
                              
                          </div>
                          <div class="ml-3 col-md-2-12 pl-3 pr-3" style="">
                          <a class="btn btn-sm fl-btn-pm" data-id="'.$id.'" id="viewjobid" data-toggle="modal" data-target="#basicExampleModal" href="">View Job</a>
                           <a class="btn btn-sm fl-btn-pm" href="applyJob.php?id='.$id.'">APPLY</a>
                          </div>
                         
                      </div>
                  </div></td><td hidden>'.$description.'</td></tr>';
              }
            } 
           ?>   

                      
                      
                 </tbody>
                </table>
              </div>

                  
         <nav style="float: right;"aria-label="Page navigation example">
              <ul class="pagination">
        <li><a class="btn btn-sm btn-outline-green " href="?pageno=1">First</a></li>
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

  <!-- View Freelancer Modal-->

<!-- Modal -->

<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content pt-3 pb-3 pl-4  pr-4">
           <div class="fl-modal-head">
             <div class=" form-inline align-items-center mb-2">
             <img class="rounded-circle z-depth-1 img-fluid " avatar="">
               <h5 class="modal-title ml-4 font-weight-bold" id="exampleModalLabel"></h5>
               <h6 class="pt-2 pl-3"></h6>
             </div>
             
             <small class="text-muted green-text font-weight-bold" >Posted Job:job number</small>
           </div>
           <br>
           <div class="fl-modal-body">
           <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link text-muted active" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="home"
      aria-selected="true">Job Description</a>
  </li>
  <li class="nav-item">
  
    <a class="nav-link text-muted" id="profile-tab" data-toggle="tab" href="#review" role="tab" aria-controls="profile"
      aria-selected="false">Reviews <span class="badge badge-success">reviews come here</span> </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" id="contact-tab" data-toggle="tab" href="#projects" role="tab" aria-controls="contact"
      aria-selected="false">Projects <span class="badge badge-success">number comes here</span> </a>
  </li>
</ul>
<!--contents of tabs-->
<div class="tab-content pl-3 pr-3" id="myTabContent">
 <!-- Job Description contents -->
 <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
 
  <div class="no-content align-items-center text-center mt-4">
    <p id="jobdesc"></p>
    <i class="fas fa-briefcase fa-2x text-muted"></i></div>';
                    
  </div>
  <!-- review contents -->
  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="profile-tab">
   <div class = "">
     <hr class="my-2">
    <div class="no-content align-items-center text-center mt-4">
    <p>No Reviews yet.</p>
    <i class="fas fa-comment-dots fa-2x text-muted   "></i>

  </div>
  <p class="mt-2"><i class="fa fa-quote-left mr-2" aria-hidden="true"></i>'.$comment.'<i class="fa fa-quote-right ml-2" aria-hidden="true"></i></p>
   </div>
  </div>
<!-- projects contents -->
  <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="contact-tab">
  <div class="no-content align-items-center text-center mt-4">
    <?php 
        while ($row4 = mysqli_fetch_array($result)){
            echo $row4['job_title'].'<br/>';
        }
    ?>
    
   

  </div>
</div>
</div>
<div class="modal-footer mt-2">
<button type="button" class="btn btn-outline-green" data-dismiss="modal">Close</button>
</div>
</div>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" hidden>×</span>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

  <!-- <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="admin/vendor/chart.js/Chart.min.js"></script> -->

  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script> -->

  <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <!-- <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->
   <!-- <script type="text/javascript">
    $(document).ready(function(event){
      

      $('jobstb tbody').on('tr','click',function(){
        let table = $('#jobstb').DataTable();
        let data = table.data(this).row();
        alert(data[1]);
        $("#jobdesc").html(data[1]);

        $("#basicExampleModal").modal('show');

      });


    });

  </script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="admin/js/demo/datatables-demo.js"></script> -->
  <script type="text/javascript" src="admin/js/avatar.js"></script>
</body>

</html>
