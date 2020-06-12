<?php
include('config/dbconfig2.php');
include('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image" href="img/jobhouse-w.png">

    <title>Job House</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="overflow-y:none;">
<!-- Just an image -->
<nav class="navbar fixed-top navbar-light navbar-light">
  <a class="navbar-brand" href="index.php">
    <img src="img/job-house-logo-g.png" width="140px" alt="mdb logo" class="ml-8" >
  </a>
</nav>
    <!-- Start your project here-->
    <div style="height: 100vh; position:absolute; left: 15rem;">
        <div class="left-signup">
            <!-- <h2 class="h1 text-hide" style="background-image: url('img/jobhouse-b.png'); margin-left: 4rem; width: 133px; height: 133px;">
                JobHouse</h2> -->
          <div class="mt-8" style = "margin-top: 5rem">
          <h1 class="font-weight-bolder" style="color: #388e3c;">Sign Up</h1>
            <p class="font-weight-light">You are at the right place to have your projects handled by our experts in varoius fields accross the world.</p>
            <hr>
            <p>Already a member? <a href="login.php">Click here to login</a></p>
            
            </div>      
        </div>
        


        <div class="card fl-signup-card">
            <!-- <br> -->
            <div class="card-body" style = "padding-bottom:3rem;">
                <?php include('controllers/registerUser.php');?>
                <form class="needs-validation" action="" method="post" novalidate>
                    <div class="md-form input-with-pre-icon minus-margin-bttm">
                        <i style="color:#388e3c;" class="fa fa-login fa-user input-prefix"></i>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <!--first name and last name-->
                    <div class="row name ">
                        <div class="col minus-margin-bttm">
                            <div class="md-form input-with-pre-icon minus-margin-bttm">
                                <i style="color:#388e3c;" class="fa fa-user input-prefix"></i>
                                <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col minus-margin-bttm">
                            <div class="md-form input-with-pre-icon minus-margin-bttm">
                                <i style="color:#388e3c;" class="fa fa-user input-prefix"></i>
                                <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <!---end of first name and last name-->

                    <div class="md-form email input-with-pre-icon minus-margin-bttm">
                        <i style="color:#388e3c;" class="fa fa-envelope input-prefix"></i>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>

                    <div class="invalid-feedback">Please enter email</div>

                    <!--password and password repeat-->
                    <div class="row minus-margin-bttm">
                        <div class="col">
                            <div class="md-form  input-with-pre-icon">
                                <i style="color:#388e3c;" class="fas fa-lock input-prefix"></i>
                                <input  type="password" id="userPassword" name="password" class="form-control userPassword validate " placeholder="Password" required>
                                <label for="userPassword" data-error="Wrong/Weak Password" data-success="Appopriate Password"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form input-with-pre-icon">
                                <i style="color:#388e3c;" class="fa fa-lock input-prefix"></i>
                                <input type="password" id="userConfirmPassword" class="form-control passRepeat" placeholder="Repeat Password" required>
                            </div>
                        </div>
                        <div class="match invalid-feedback">Passwords don't match</div>
                        <div class="alert alert-warning password-alert" role="alert">
                            <ul>
                                <li class="requirements leng"><i class="fas fa-check green-text"></i><i class="fas fa-times red-text"></i> Your password must have at least 8 chars.</li>
                                <li class="requirements big-letter"><i class="fas fa-check green-text"></i><i class="fas fa-times red-text"></i> Your password must have at least 1 big letter.</li>
                                <li class="requirements num"><i class="fas fa-check green-text"></i><i class="fas fa-times red-text"></i> Your password must have at least 1 number.</li>
                                <li class="requirements special-char"><i class="fas fa-check green-text"></i><i class="fas fa-times red-text"></i> Your password must have at least 1 special char.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <small>Password must be at least 8 characters</small> -->

                    <!-- <br> -->
                    <!---end of first name and last name-->
                    <!--type of subscription -->

                    <!-- <div style="position:relative; left:3rem;" class="custom-control custom-radio custom-control-inline" data-toggle="buttons">
                        <label class="custom-control-label text-sentence active">
                           <input class="form-check-input" type="radio" name="usertype" value="freelancer" id="Freelancer" autocomplete="off" checked>
                      Freelancer </label>
                        <label class="btn btn-success form-check-label">
                           <input class="form-check-input" type="radio" name="usertype" value="client" id="Client" autocomplete="off">
                      Client
                       </label>
                    </div> -->
                    <!-- Default inline 1-->
                    
                    
                    <div class="form-inline my-0 align-items-center row">
                    <small class=" inline row ml-3 mr-4">What do you want to do</small>
                    <div class="custom-control col custom-radio custom-control-inline text-center ml-2">
                    <input type="radio" class="custom-control-input success-color " id="freelancer" value="freelancer" name="usertype" checked>
                    <label class="custom-control-label text-muted" for="freelancer">Freelancer</label>
                </div>

<!-- Default inline 2-->
                <div class="custom-control  col custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="client" value="client" name="usertype">
                    <label class="custom-control-label text-muted" for="client">Client</label>
                </div>
                    </div>
                
                    <div class="form-group agree">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                            <label class="custom-control-label fl-radio" for="invalidCheck"><a class="" href="#">Agree to Terms & Conditions</a></label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>

                    <button style="border-radius:2px; " id="signupButton" type="submit" name="create_account" class="btn btn-lg btn-block fl-btn-pm">Register</button>

                </form>

            </div>
        </div>


        <div class="footer-copyright text-left fixed-bottom ml-4 py-2">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" >jobhouse.com</a>
  </div>
        </div>

<!-- Footer -->



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