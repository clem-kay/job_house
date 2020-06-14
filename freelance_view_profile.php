<?php
include('config/dbconfig2.php');
include('functions.php');
  session_start();

  $id=$_SESSION['id'];
  $firstname =$_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];

  $query = mysqli_query($con,"SELECT * FROM profile WHERE userid = '$id'");
    if($query){
       $num_of_user = mysqli_num_rows($query);
        if($num_of_user> 0 ){
            //user exist so go ahead and activate account
            $user_row = mysqli_fetch_array($query);
            $headline = $user_row['headline'];
            $country = $user_row['country'];
            $city = $user_row['city'];
            $phone = $user_row['phone'];
            $summary =$user_row['summary'];
            $address = $user_row['address'];


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
    <link rel="stylesheet" href="css/selectCountry.min.css">
    <Script type="text/javascript">
    $(document).ready(function() {

       $("#country_select").countrySelect();

$("#country_selector").countrySelect({
    defaultStyling: "inside"
});
    });
    </Script>

    


  <!-- Custom styles for this template-->



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul  class="navbar-nav sidebar sidebar-dark fl-bk-pm accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        
        <img class="sidebar-brand-text mx-3" src="img/job-house-logo .png" alt="jobhouse" width="120px">
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
          <!--   <a class="collapse-item" href="profile_edit.php">Edit Profile</a> -->
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
            <i style="color: #207b41; border-color: #207b41;"class="fa fa-bars"></i>
          </button>

  
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item avatar dropdown no-arrow mr-2">
              <a class="nav-link dropdown-toggle pt-3 " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']?>&nbsp | &nbsp</span>
                 <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                 <img class="img-profile rounded-circle" avatar="<?php echo $firstname." ".$lastname;?>">
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div  class="container emp-profile">
    
        <div class="row">

          <div  class="col-md-6">
                <div class="profile-head">
                            <h5><?php echo $_SESSION['firstname']." ". $_SESSION['lastname']?> </h5>
                            <h6> <?php echo $user_row['headline'];?> </h6>
                            <p class="proile-rating">RANKINGS : <span>Not Yet</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" 
                            href="#profile" role="tab" aria-controls="profile" aria-selected="false">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="text-right">
                    <button type="button" class="btn fl-btn-pm btn-sm " data-toggle="modal" data-target="#profileModal">
                    <i class="fas fa-edit fap-w   "></i> Edit Profile
                    </button>
                    </div>
                    
                                <div style="margin-top:20px;" class="row">
                                    <div class="col-md-6">
                                        <label>User Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $_SESSION['username']?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $_SESSION['email']?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Country</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $country?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $phone?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $headline?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Personal Summary</label>
                                    </div>
                                    <div class="col-md-6">
                                         <p><?php echo $summary;?></p>
                                    </div>
                                </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM portfolio WHERE user_id = '$id'");
                              if($query){
                                $num_of_user = mysqli_num_rows($query);
                                  if($num_of_user > 0 ){
                                      //user exist so go ahead and activate account
                                    while($user_row = mysqli_fetch_array($query)){
                                    echo
                                    ' <div class="row">
                                    <div class="col-md-6">
                                        <label>Title</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>'.$user_row["title"].'</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Links to Project</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>'.$user_row["links"].'</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Brief Description</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>'.$user_row["description"].'</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Image</label>
                                    </div>
                                    <div class="col-md-6">
                                        <img width="300px" src="'.$user_row["img_path"].'">
                                    </div>
                                </div>';
                                  
                                   }
                                 }
                                   else{
                                    echo '<p>No Portfolio To display</p>';
                                   }
                              }
                            
                            ?>
                                
                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>           
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


  
  <!-- Modal -->
  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">

         <div class="modal-content">
             <div class="modal-header row align-items-center">
             <a class="nav-link  col-2 " href="#" id="userAvatar" role="button" aria-haspopup="true" aria-expanded="false">
                <?php include('controllers/updateProfile.php')?>
                 <img class="img-profile rounded-circle" avatar="<?php echo $firstname." ".$lastname;?>">
              </a>
              <div class="col-8 pl-4 modal-title">
                <h4><?php echo $firstname ?></h4>
                <small><?php echo $_SESSION['email']?></small>
              </div>
                 <!-- <h5 class="modal-title" id="profileModalLabel">Modal title</h5> -->
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" hidden>&times;</span>
                 </button>
             </div>
             <div class="modal-body">
               
               <form class ="me-form needs-validation"action="" method="post" novalidate>
                
                 <div class="md-form  col input-with-pre-icon active-success">
                   <i style="color: #388e3c;" class="fa fap fa-user input-prefix " aria-hidden="true"></i>
                   <input type="text" id="userFirstName" name="fname" class="form-control " value="<?php echo $firstname;?>" required readonly>
                   <label for="userFirstName"  class="ml-3">First Name</label>
                 </div> 
               <div class="md-form col input-with-pre-icon ">
                   <i style="color: #388e3c;" class="fa fap fa-user input-prefix " aria-hidden="true"></i>
                   <input type="text" id="userLastName" value="<?php echo $lastname ?>"name="lname" class="form-control" required readonly>
                   <label for="userLastName" class="ml-3">Last Name</label>
               </div>  

                 
                 <div class="md-form col input-with-pre-icon">
                   <i style="color: #388e3c;" class="fa fap fa-user-tag input-prefix " aria-hidden="true"></i>
                   <input type="text" id="profession" value="<?php echo $headline?>" name="headline" class="form-control" required>
                   <label for="profession" class="ml-3">Professional Heading</label>
               </div>

                <div class="md-form input-with-pre-icon">
                  <i style="color: #388e3c;" class="fa fap fa-city input-prefix" aria-hidden="true"></i>
                  <input id ="userCity" value="<?php echo $city?>" class="form-control" type="text" name="city" id="userCity">
                  <label for="userCity" class="ml-3">City</label>

                  <!-- <small id="userCity " class="form-text text-muted">City</small> -->
                </div>
                
                <div class="md-form col input-with-pre-icon">
                   <i style="color: #388e3c;" class="fa fap fa-location-arrow pb-4 input-prefix " aria-hidden="true"></i>
                   <input type="text" value="<?php echo $address ?>"id="userAddress" name="address" class="form-control " required>
                   <label for="userAddress" class="ml-3">Address</label>
                   <small id="userAddress " class="form-text text-muted ml-3">Post address or location</small>
               </div>
               <div class="md-form col input-with-pre-icon">
                   <i style="color: #388e3c;" class="fa fap fa-phone input-prefix " aria-hidden="true"></i>
                   <input type="text" id="userContact"value="<?php echo $phone ?>"name="contact" class="form-control" required>
                   <label for="userContact" class="ml-3">Contact</label>
               </div>
               <div class="md-form">
                    <textarea id="textarea-char-counter" name="summary" class="form-control md-textarea"  rows="5"><?php echo $summary?> </textarea>
                    <label for="textarea-char-counter">Profile Summary</label>
                    <small id="summaryHelp" class="form-text text-muted ">Add a professional summary of your potentials, skills, services or products</small>
                </div>

               
                 
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn fl-btn-pm" name="update">Save changes</button>
               </form>
             </div>
         </div>
     </div>
  </div>


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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a style="background-color: red; border-color: red; color:#fff" class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js "></script>
    <!-- Your custom scripts (optional) -->
   
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Page level plugins -->
  <script type="text/javascript" src="admin/js/avatar.js"></script>
    <script src="js/countrySelect.min.js" type="text/javascript"></script>
    <script src="js/customscripts.js " type="text/javascript "></script>
    <!-- <script src="admin/js/dashboardscripts.js " type="text/javascript "></script> -->





</body>

</html>