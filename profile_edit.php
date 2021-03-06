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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
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
    <link rel="stylesheet" href="css/countrySelect.min.css">
</head>

<body>
    <!-- Start your project here-->
    <div style="height: 100vh">
        <div class="card profile-card">
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold"><a>Personal Data</a></h4>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <form role="form needs-validation" action="" method="post" novalidate>
                    <?php include('controllers/updateProfile.php')?>
                    <div class="row">
                        <div class="col-md-3-12">
                            <div class="ml-3">
                                <div id="profile-container">
                                   
                                </div>
                            </div>
                            <hr>
                            <div class="list-group-flush text-muted">
                                <div class="list-group-item">
                                    <p class="mb-0"><i class="fa fa-address-card mr-2" aria-hidden="true"></i> <?php echo $_SESSION['usertype']; ?></p>
                                </div>
                                <div class="list-group-item">
                                    <p class="mb-0"><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <?php echo $_SESSION['date']?></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-primary font-weigth-bold"><?php echo $_SESSION['username'];?></h4>
                            <small class="text-muted"><?php echo $_SESSION['firstname']." ". $_SESSION['lastname'];?></small> | <small class="text-muted"><?php echo $_SESSION['email'];?></small>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="md-form ml-4">
                                        <div class="md-form">
                                            
                                            <i class="fa fap fa-user-tag prefix" aria-hidden="true"></i>
                                            <input type="text" id="profHeadline" name="headline" class=" form-control" value="<?php echo $user_row['headline'];?>" aria-describedby="profHeadlineHelp " required>
                                            <label for="profHeadline ">Professional Headline</label>

                                            <small id="profHeadlineHelp " class="form-text text-muted ">
                                             Enter a title that best suits you........eg Web designers lover
                                            </small>
                                            <div class="invalid-feedback">Enter a Professional Headline</div>
                                        </div>

                                        <div class="md-form country">
                                            <!-- <i class="fa fap fa-2x fa-globe" aria-hidden="true"></i> -->

                                            <input class="form-control" type="text" name="country" value=" <?php echo $user_row['country']?>" name="" id="country_selector">
                                            <input class="form-control" type="text"   id="country_selectors" style="display: none;">
                                            <small id="countryHelp " style="margin-left: 2.3rem;" class="form-text text-muted">Select Country</small>
                                        </div>

                                        <div class="md-form">
                                            <!-- <i class="fa fap fa-city prefix" aria-hidden="true"></i> -->
                                            <input type="text" id="userCity" name="city" value=" <?php echo $user_row['city'];?>" class="form-control">
                                            <label for="userCity">Enter City</label>
                                        </div>
                                        <div class="md-form">
                                            <!-- <i class="fas fap fa-mobile prefix   "></i> -->
                                            <!-- <i class="fa fap fa-phone-square prefix" aria-hidden="true"></i> -->
                                            <input type="text" id="userContact" name="phone" value="<?php echo $user_row['phone'];?>" class="form-control">
                                            <input type="text" id="userContact2"  class="form-control" style="display: none;">
                                            <label for="userContact">Enter Phone</label>
                                            <small id="contactHelp " class="form-text text-muted ">Ignore Country code</small>

                                        </div>
                                        <div class="md-form ">
                                            <!-- <i class="fas fap fa-sticky-note  prefix" aria-hidden="true"></i> -->
                                            <!-- <i class="fa fap fa-list prefix" aria-hidden="true"></i> -->
                                            <textarea id="textarea-char-counter" name="summary" class="form-control md-textarea" length="250" rows="4"> <?php echo $user_row['summary'];?></textarea>
                                            <label for="textarea-char-counter">Profile Summary</label>
                                            <small id="summaryHelp" class="form-text text-muted ">Add a professional summary of your potentials, skills, services or products</small>
                                        </div>
                                        <div class="md-form">
                                            <!-- <i class="fa fap fa-location-arrow prefix" aria-hidden="true"></i> -->
                                            <textarea id="userAddress" class="form-control md-textarea" name="address" length="50" rows="2">  <?php echo $user_row['address'];?></textarea>
                                            <label for="textarea-char-counter">Address</label>
                                            <small id="addressHelp" class="form-text text-muted ">Enter either location address or post address</small>
                                        </div>
                                    </div>


                                    <!--proifle summary-->



                                    <button style="border-radius: 2px;width: 350px; float: right;" class="btn fl-btn-pm btn-block my-4 mt-2" name="update_profile" type="submit">Update Profile</button>


                                </div>
                            </div>


                        </div>

                    </div>
                </form>
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
    <script src="js/customscripts.js " type="text/javascript "></script>
    <script src="js/countrySelect.min.js" type="text/javascript"></script>
    <script src="js/addons/datatables-select.min.js" type="text/javascript"></script>
    <script src="js/phonecode.js" type="text/javascript"></script>
</body>

</html>