<?php

if (isset($_POST['update'])){


    $firstname = checkValues($_POST['firstname']);
    $lastname = checkValues($_POST['lastname']);
    $headline = checkValues($_POST['headline']);
    $city = checkValues($_POST['city']);
    $phone = checkValues($_POST['contact']);
    $summary = checkValues($_POST['summary']);
    $address = checkValues($_POST['address']);
    $userid =$user_row['id'];


$update_account = mysqli_query($con,"UPDATE useraccount SET firstname='$firstname',lastname='$lastname'WHERE id='$id'");

$save_to_db_query = mysqli_query($con,"UPDATE profile SET headline='$headline',city='$city',phone='$phone',summary='$summary',address='$address' WHERE userid='$id'");
if($save_to_db_query and $update_account){
 
echo "<script>window.location='freelance_view_profile.php';</script>";
      echo "profile updated";
    	

	}else{
		echo "not saved";
	}
}

?>