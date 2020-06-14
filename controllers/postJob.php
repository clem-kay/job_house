<?php

if(isset($_POST['postjob'])){
   
$jobtitle =$_POST['jobtitle'];
$jobcategory =$_POST['category'];
$jobtype =$_POST['jobtype'];
$budget = $_POST['budget'];
$description = $_POST['jobdescription'];
$user_id = $_SESSION['id'];



$save_to_db_query = mysqli_query($con,"INSERT INTO job_posted(job_title,job_category,job_type,budget,description,user_id)VALUES('$jobtitle','$jobcategory','$jobtype',$budget,'$description','$user_id')");
if($save_to_db_query){

   	echo '<div class="alert alert-success" role="alert">
                    <p>Successfully </p>
                  </div>';
	}

	else{
		echo '<div class="alert alert-danger" role="alert">
                    <p>Not Posted </p>
                  </div>';
	}
}


?>