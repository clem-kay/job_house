<?php
session_start();
include('config/dbconfig2.php');
include('functions.php');


$username = $_SESSION['username'];

$id = $_SESSION['id'];

 if(isset($_GET['response'])){
                          $msg = $_GET['response'];

                          if($msg==='error'){
                              echo '<div class=alert alert-danger>Job has already been paid</div>';
                          }
                          else if($msg ==='success'){
                            echo '<div class=alert alert-success>Payment Sucessful</div>';
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
    <ul  class="navbar-nav sidebar sidebar-dark fl-bk-pm accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <img class="sidebar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px">      </a>

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
          <i class="fas fa-fw fa-upload"></i>
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
            <li class="nav-item avatar dropdown no-arrow mr-2">
              <a class="nav-link dropdown-toggle pt-3 " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']?>&nbsp | &nbsp</span>
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
         <!-- Begin Page Content -->
        <div class="container-fluid">
          <?include('controllers/approveJob.php')?>
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold">Your Posted Job Awaiting Approval</h6>
            </div>
            <div class="card-body">
              
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-success font-weight-bold">
                      <th>Job Title</th>
                      <th>Job Category</th>
                       <th>Job Type</th>
                       <th>Freelancer Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    
                      
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                        $id = $_SESSION['id'];
                       $query = mysqli_query($con,"SELECT * FROM appliedjob WHERE client_id = '$id' and approved=0");
                        $applied=mysqli_num_rows($query);
                        if ($applied < 0){
                           echo '<div class="alert alert-danger">
                    <p>Sorry You have no Jobs to approve</p>
                  </div>';
                        }
                        else{
                        while($applied = mysqli_fetch_array($query) ){
                          $applied_job_id = $applied['id'];
                          $jobid = $applied['jobid'];
                          $freelancer = $applied['freelancer_id'];
                       
                        $query = mysqli_query($con,"SELECT * FROM useraccount WHERE id = '$freelancer'");
                        while($user_name_row = mysqli_fetch_array($query) ){ 
                          $freelancer_name = $user_name_row['username'];
                        
                        $sql = mysqli_query($con, "SELECT * From job_posted where id='$jobid'");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                      echo 
                         '<tr>
                    <td>'.$row["job_title"].'</td>
                    <td>'.$row["job_category"].'</td>
                    <td>'.$row["job_type"].'</td>
                    <td ><a data-toggle="modal" data-target="#basicExampleModal" href=?id='.$freelancer.'">'.$freelancer_name.'<a></td>
                    <td>'.$row["description"].'</td> 
                    <td class="form-inline"><a href="invoice.php?id='.$applied_job_id.'" class="btn fl-btn-pm btn-sm mr-2">Invoice</a>
                      <a href="controllers/approveJob.php?id='.$applied_job_id.'" class="btn btn-outline-green"></i>Approve</a>
                    </td>    
                      </tr>';
                        }
                      }
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
    <div class="modal-dialog .modal-dialog-scrollable" role="document">
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

  <!-- view freelancer profile modal -->

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><?php   $query = mysqli_query($con,"SELECT * FROM useraccount WHERE id = '$freelancer'");
                        while($user_name_row = mysqli_fetch_array($query) ){ 
                          $freelancer_name = $user_name_row['firstname']." ".$user_name_row['lastname'];
                          
                        }
                        $query = mysqli_query($con,"SELECT * FROM profile WHERE userid = '$freelancer'");
                        while($user_name_row = mysqli_fetch_array($query) ){ 
                          $headline = $user_name_row['headline'];
                          
                        }
                           ?>
   <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content pt-3 pb-3 pl-4  pr-4">
           <div class="fl-modal-head">
             <div class=" form-inline align-items-center mb-2">
             <img class="rounded-circle z-depth-1 img-fluid " avatar="<?php echo $freelancer_name?>">
               <h5 class="modal-title ml-4 font-weight-bold" id="exampleModalLabel"><?php echo $freelancer_name?> |</h5>
               <h6 class="pt-2 pl-3"><?php echo $headline ?></h6>

              <?php
                        $sql = mysqli_query($con, "SELECT * From appliedjob where freelancer_id='$freelancer' and approved = 1 and accepted = 1");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                          $jobid = $row['jobid'];
                          $sql2 = mysqli_query($con, "SELECT * FROM job_posted WHERE id = '$jobid' and completed= 1");
                          $row2 = mysqli_num_rows($sql2);
                          }?>
             </div>
             
             <small class="text-muted green-text font-weight-bold" >Completed Job: <?php echo $row2?></small>
           </div>
           <br>
           <div class="fl-modal-body">
           <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link text-muted active" id="home-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="home"
      aria-selected="true">Portfolio</a>
  </li>
  <li class="nav-item">
    <?php
                        $sql = mysqli_query($con, "SELECT * From freview where freelancer_id='$freelancer'");
                        $row = mysqli_num_rows($sql);

                        ?>
    <a class="nav-link text-muted" id="profile-tab" data-toggle="tab" href="#review" role="tab" aria-controls="profile"
      aria-selected="false">Reviews <span class="badge badge-success"><?php echo $row; ?></span> </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" id="contact-tab" data-toggle="tab" href="#projects" role="tab" aria-controls="contact"
      aria-selected="false">Projects <span class="badge badge-success">0</span> </a>
  </li>
</ul>
<!--contents of tabs-->
<div class="tab-content pl-3 pr-3" id="myTabContent">
 <!-- portfolio contents -->
 <div class="tab-pane fade show active" id="portfolio" role="tabpanel" aria-labelledby="home-tab">
 <?php 
                    $sql2 = mysqli_query($con, "SELECT * From portfolio where user_id = '$freelancer'");
                        $row2 = mysqli_num_rows($sql2);
                        if($row2 == 0){
                          echo'
  <div class="no-content align-items-center text-center mt-4">
    <p>No Portfolio yet.</p>
    <i class="fas fa-briefcase fa-2x text-muted"></i></div>';
                        }
                        else{
                          while($row2 = mysqli_fetch_array($sql2)){
                              $title = $row2['title'];
                              $link = $row2['links'];
                              $description = $row2['description']; 
                              $img=$row2['img_path'];

              echo'<div class="card w-50 m-sm">
                          <div class="card-header font-weight-bold">'.$title.'</div>
                                    <div class="card-body background-grey">
                                        <div style="max-width:80px; " class=" text-muted">
                                            <!-- <i class="fa fa-briefcase fa-8x" aria-hidden="true"></i> -->
                                            <img class="card-img-top" src="'.$img.'" alt="Card image cap">
                                        </div>
                                        <div class="card-text">
                                            <p class="font-weight-bold">Description :</p>'.$description.'</div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <a href="#" class="">'.$link.'</a></div>
                                </div><br>';
                        }
                      }

 ?>

  </div>
  <!-- review contents -->
  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="profile-tab">
   <div class = "">
     <hr class="my-2">
     <?php if($row == 0){
      echo' <div class="no-content align-items-center text-center mt-4">
    <p>No Reviews yet.</p>
    <i class="fas fa-comment-dots fa-2x text-muted   "></i>

  </div>';}
  else {
       while ($row = mysqli_fetch_array($sql)){
                          $comment = $row['comment'];
                          $stars = $row['stars'];
                          $clientid = $row['client_id'];
            
            echo ' <p class="mt-2"><i class="fa fa-quote-left mr-2" aria-hidden="true"></i>'.$comment.'<i class="fa fa-quote-right ml-2" aria-hidden="true"></i>
              
            </p>';
          }

}
     ?>
   </div>
  </div>
<!-- projects contents -->
  <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="contact-tab">
  <div class="no-content align-items-center text-center mt-4">
    <p>No Projects yet.</p>
    <i class="fas fa-toolbox fa-2x text-muted   "></i>

  </div>
</div>
           </div>
           <div class="modal-footer mt-2">
               <button type="button" class="btn btn-outline-green" data-dismiss="modal">Close</button>
               
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
  <!-- <script src="admin/vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

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
