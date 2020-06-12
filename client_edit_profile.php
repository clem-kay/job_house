<?php
include('config/dbconfig2.php');
include('functions.php');
  session_start();

  $id=$_SESSION['id'];

  $query = mysqli_query($con,"SELECT * FROM profile WHERE userid = '$id'");
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
  <link rel="stylesheet" href="../css/countrySelect.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #207b41;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

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
            <a class="collapse-item" href="">Edit Profile</a>
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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button style="background-color: #207b41; border-color: #207b41; "class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button style="background-color: #207b41; border-color: #207b41; class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
              </a>
              <!-- Dropdown - Alerts -->
          
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']?></span>
                <img class="img-profile rounded-circle" src="">
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <div style="height: 100vh">
        <div class="card profile-card">
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold"><a>Personal Data</a></h4>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <form role="form needs-validation" action="" method="post" novalidate>
                    <div class="row">
                        <div class="col-md-3-12">
                            <div class="ml-3">
                                <div id="profile-container">
                                    <img id="profileImage" src="img/avatar.png" />
                                    <input class="file-upload" id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>

                                </div>
                                <small class="text-muted">Chose profile image
                                    (150px Square)</small>
                            </div>
                            <hr>
                            <div class="list-group-flush text-muted">
                                <div class="list-group-item">
                                    <p class="mb-0"><i class="fa fa-address-card mr-2" aria-hidden="true"></i> Freelancer</p>
                                </div>
                                <div class="list-group-item">
                                    <p class="mb-0"><i class="fa fa-calendar mr-2" aria-hidden="true"></i> Joined 29th May, 2020.</p>
                                </div>
                                <div class="list-group-item">
                                    <p class="mb-0"><i class="fa fa-heart mr-2" aria-hidden="true"></i>0 Recommendations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-primary font-weigth-bold">Prince A.</h4>
                            <small class="text-muted">abaidooprince</small> | <small class="text-muted">abaidooprince@gmail.com</small>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="md-form ml-4">
                                        <div class="md-form">
                                            <i class="fa fap fa-user-tag prefix" aria-hidden="true"></i>
                                            <input type="text" id="profHeadline" class=" form-control" aria-describedby="profHeadlineHelp " required>
                                            <label for="profHeadline ">Professional Headline</label>
                                            <small id="profHeadlineHelp " class="form-text text-muted ">
                                            What best describes the services you provide. E.g. Branding Agency, Software Developer, Graphic Designer...
                                            </small>
                                            <div class="invalid-feedback">Enter a Professional Headline</div>
                                        </div>

                                        <div class="md-form country">
                                            <!-- <i class="fa fap fa-2x fa-globe" aria-hidden="true"></i> -->

                                            <input class="form-control" type="text" name="" id="country_selector">
                                            <input class="form-control" type="text" name="" id="country_selectors" style="display: none;">
                                            <small id="countryHelp " style="margin-left: 2.3rem;" class="form-text text-muted">Select Country</small>
                                        </div>

                                        <div class="md-form">
                                            <!-- <i class="fa fap fa-city prefix" aria-hidden="true"></i> -->
                                            <input type="text" id="userCity" class="form-control">
                                            <label for="userCity">Enter City</label>
                                        </div>
                                        <div class="md-form">
                                            <!-- <i class="fas fap fa-mobile prefix   "></i> -->
                                            <!-- <i class="fa fap fa-phone-square prefix" aria-hidden="true"></i> -->
                                            <input type="text" id="userContact" class="form-control">
                                            <input type="text" id="userContact2" class="form-control" style="display: none;">
                                            <label for="userContact">Enter Phone</label>
                                            <small id="contactHelp " class="form-text text-muted ">Ignore Country code</small>

                                        </div>
                                        <div class="md-form ">
                                            <!-- <i class="fas fap fa-sticky-note  prefix" aria-hidden="true"></i> -->
                                            <!-- <i class="fa fap fa-list prefix" aria-hidden="true"></i> -->
                                            <textarea id="textarea-char-counter" class="form-control md-textarea" length="250" rows="4"></textarea>
                                            <label for="textarea-char-counter">Profile Summary</label>
                                            <small id="summaryHelp" class="form-text text-muted ">Add a professional summary of your potentials, skills, services or products</small>
                                        </div>
                                        <div class="md-form">
                                            <!-- <i class="fa fap fa-location-arrow prefix" aria-hidden="true"></i> -->
                                            <textarea id="userAddress" class="form-control md-textarea" length="50" rows="2"></textarea>
                                            <label for="textarea-char-counter">Address</label>
                                            <small id="addressHelp" class="form-text text-muted ">Enter either location address or post address</small>
                                        </div>
                                    </div>


                                    <!--proifle summary-->



                                    <button class="btn fl-btn-pm btn-rounded btn-block my-4 mt-2" type="submit">Save</button>


                                </div>
                            </div>


                        </div>

                    </div>
                </form>
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
            <span>Amalitech Freelance</span>
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
          <a style="background-color: red; border-color: red; color:#fff" class="btn btn-primary" href="login.php">Logout</a>
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


   <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js "></script>
    <!-- Your custom scripts (optional) -->
    <script src="../js/customscripts.js " type="text/javascript "></script>
    <script src="../js/countrySelect.min.js" type="text/javascript"></script>
    <script src="../js/addons/datatables-select.min.js" type="text/javascript"></script>
    <script src="../js/phonecode.js" type="text/javascript"></script>
</body>

</html>