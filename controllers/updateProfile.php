<?php

if (isset($_POST['update_profile'])){

 $headline = checkValues($_POST['headline']);
    $country = checkValues($_POST['country']);
    $city = checkValues($_POST['city']);
    $phone = checkValues($_POST['phone']);
    $summary = checkValues($_POST['summary']);
    $address = checkValues($_POST['address']);
    $userid =$user_row['id'];

$save_to_db_query = mysqli_query($con,"UPDATE profile SET headline='$headline',country='$country',city='$city',phone='$phone',summary='$summary',address='$address' WHERE userid='$userid'");
if($save_to_db_query){
    if ($_SESSION['usertype']==="client"){
        
        echo "<script>window.location='client_dashboard.php';</script>";
        echo "profile updated";
    }
    else if($_SESSION['usertype']==="freelancer"){
      echo "<script>window.location='freelance_dashboard.php';</script>";
      echo "profile updated";
    	}

	}else{
		echo "not saved";
	}
}
else{
	echo "not isset";
}
?>