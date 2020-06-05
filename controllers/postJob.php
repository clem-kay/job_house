<?php

if(isset($_POST['postjob'])){
   
$jobtitle =$_POST['jobtitle'];
$jobcategory =$_POST['category'];
$jobtype =$_POST['jobtype'];
$budget = $_POST['budget'];
$description = $_POST['jobdescription'];
$date = date('y-m-d'); 
$user_id = $_SESSION['id'];



$save_to_db_query = mysqli_query($con,"INSERT INTO job_posted(job_title,job_category,job_type,budget,description,created_date,user_id)VALUES('$jobtitle','$jobcategory','$jobtype',$budget,'$description',$date,'$user_id')");
if($save_to_db_query){
   	echo '<h3>Job Posted Successfully';
	}

	else{
		echo '<h3>Not posted';
	}
}else{
	echo'<h3>Not isset</h3>';
}


?>