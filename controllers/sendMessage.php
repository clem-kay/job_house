<?php
if(isset($_POST['send'])){
    //get message text and sanitize
	
	$sender = $_SESSION['username'];
	$receiver = $_POST['receiver'];
	$message = $_POST['message'];

    //save chat into db

    $save_message = mysqli_query($con,"INSERT INTO chat(sender,receiver,message)VALUES('$sender','$receiver','$message')");

    if($save_message){
    		echo "message sent";
    }

}
