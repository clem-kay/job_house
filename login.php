<?php
session_start();
include('config/dbconfig2.php');
include('functions.php');

?><!-- Start your project here-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image" href="img/jobhouse-w.png">
    <title>Login</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-back">

    <!-- Start your project here-->
    <div class="card fl-login-card">
        <div class="card-body">
            <div class="md-form">
                <!-- Default form login -->
                <form class="text-center needs-validation" method="post" action="" novalidate>
                    <?php include('controllers/loginUser.php');?>
                    <p class="h1 mb-4 font-weight-bolder" style="color: #208927;">Login</p>
                    <hr>
                    <!-- Email -->
                    <div class="md-form input-with-pre-icon">
                        <div>
                            <i class="fas fa-envelope input-prefix"></i>
                            <input type="text" id="username" class="form-control" name="username" required>
                        </div>
                        <div class="invalid-feedback">Please enter email</div>
                    </div>

                    <!-- Password -->
                    <div class="md-form input-with-pre-icon">
                        <div>
                            <i class="fa fa-lock input-prefix" aria-hidden="true"></i>
                            <input type="password" id="userPassword" class="form-control mb-4" name="password" placeholder="Password" required>
                            <!-- <label for="userPassword"></label> -->
                        </div>
                        <div class="invalid-feedback">Please enter password</div>

                    </div>


                    <div class="justify-content-around remember">

                        <!-- Remember me -->
                        <div class=" custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>

                        <div class="forgot">
                            <!-- Forgot password -->
                            <a href="#forgot-password" id="forgot" class="text-primary">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <div class="login-bottom">
                        <button class="btn fl-btn-pm btn-rounded btn-block my-4" name="login" type="submit">LOGIN</button>

                        <!-- Register -->
                        <p>Not a member?
                            <a href="signup.php">Register</a>
                        </p>
                        <!-- Social login -->
                        <p>Sign in with Google: <a href="#" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>
                        </p>
                    </div>

                </form>
                <!-- Default form login -->

            </div>
            <!--forgto password form-->
            <div id="forgot-password" class="forgot-password">
                <form class="needs-validation2" action="" method="post" novalidate>
                    <div class="md-form">
                        <input type="email" id="rp-email" class="email form-control " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        <label for="email">Enter your Email</label>
                    </div>
                    <div class="invalid-feedback">Please enter valid email</div>
                    <button type="submit" class="btn  btn-outline fl-btn-pm btn-rounded btn-block">RESET PASSWORD</button>
                </form>
            </div>

        </div>




        <!-- End your project here-->

        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript" src="js/customscripts.js"></script>

</body>

</html>