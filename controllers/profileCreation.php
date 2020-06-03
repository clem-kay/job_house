<?php 

if(isset($_POST['create_profile'])){
    //get form data
    $headline = checkValues($_POST['headline']);
    $country = checkValues($_POST['country']);
    $city = checkValues($_POST['city']);
    $phone = checkValues($_POST['phone']);
    $summary = checkValues($_POST['summary']);
    $address = checkValues($_POST['address']);

$save_to_db_query = mysqli_query($con,"INSERT INTO profile(headline,country,city,phone,summary,address,userid)VALUES('$headline','$country','$city','$phone','$summary','$address','$id')");
if($save_to_db_query){
    if ($user_row['usertype']==="client"){
        $_SESSION['id'] = $id;
        echo "<script>window.location='client_dashboard.php';</script>";
    }
    else if($user_row['usertype']==="freelancer"){
      echo "<script>window.location='freelance_dashboard.php';</script>";
    	}

	}
}
?>
