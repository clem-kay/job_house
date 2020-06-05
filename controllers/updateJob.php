<?php

if(isset($_POST['update_job'])){

$jobtitle =$_POST['jobtitle'];
$jobcategory =$_POST['category'];
$jobtype =$_POST['jobtype'];
$budget = $_POST['budget'];
$description = $_POST['jobdescription'];
$user_id = $_SESSION['id'];



$update_query= "UPDATE job_posted SET job_title = '$jobtitle',job_category = '$jobcategory',job_type ='$jobtype', budget ='$budget',description='$jobdescription' WHERE id = '$jobid'";

$update = ($con,$update_query);

if($update){
	echo "<script>window.location='client_job_posted.php'</script>";
}else
echo "Not posted";

}



?>