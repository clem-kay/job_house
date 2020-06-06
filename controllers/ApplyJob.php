<?php

if(isset($_POST['apply'])){
   
$jobid =$_POST['jobid'];

$comment = $_POST['comment'];
$description = $_POST['jobdescription'];
$user_id = $_SESSION['id'];



$save_to_db_query = mysqli_query($con,"INSERT INTO appliedjob(comment,freelancer_id,jobid)VALUES('$comment','$user_id','$jobid','$user_id')");
if($save_to_db_query){

   	echo '<div class="alert alert-success">
                    <p>Succssfully </p>
                  </div>';
	}

	else{
		echo '<div class="alert alert-danger">
                    <p>Not Succssful </p>
                  </div>';
	}
}

?>