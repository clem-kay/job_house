<?php
include('config/dbconfig2.php');
include('functions.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job House</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Start your project here-->
    <div style="height: 100vh;">
        <!--Navbar-->
        <nav class="navbar fixed-top navbar-expand-md scrolling-navbar">
            <!-- Navbar brand -->
            <a class="navbar-brand ml-4" href="#"><img src="img/job-house-logo-g.png" width="140px" alt="Jobhouse"></a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
            <!-- Collapsible content -->
            
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->

        <div class="card" style="overflow-x: hidden;">
           
            <div class="row">
                 <?php include('controllers/activate.php')?>
                <div class="col-6">
                    <img class="card-img-top" src="img/check_mail_banner.png" alt="Card image cap">
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h4 class="card-title" style="padding-top: 6rem;"><i class="fa fa-3x fap fa-check-circle" aria-hidden="true"></i> </h4>
                        <h1>Congratulations!</h1>
                        <h5>You are few steps away to start work</h5>
                        <h5>A mail has been sent to you.</h5>
                        <h5>Check and Activate your account.</h5>
                        <p class="card-text">Thank your for signing up with Jobhouse.</p>
                    </div>
                    <form class="form-inline" method="post">

                    <div class="md-form my-0 input-with-pre-icon">
                        <input class="form-control mr-sm-2" type="text" name="email" placeholder="Enter Email">
                        <input class="form-control mr-sm-2" type="text" name="activationcode" placeholder="Enter Code">
                    </div>
                    <input style="border-radius:2px;background-color: #207b41;color:#fff;vertical-align: middle;" class="form-control" type="submit" value="Activate" name="activate">
                   </form>
                </div>
            </div>

            <!-- <div class="collapse navbar-collapse" id="basicExampleNav">
               
               

            </div> -->
            <footer class="page-footer font-small black ">

            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#"> www.jobhouse.com</a>
            </div>
        </footer>

        </div>
        
    </div>




    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script src="js/customscripts.js" type="text/javascript">
    </script>
</body>

</html>