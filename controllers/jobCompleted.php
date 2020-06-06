<?php
if(isset($_GET['GET'])){
	$job_id =$_GET['id'];

	$query = mysqli_query($con,"UPDATE job_posted SET completed = 1 WHERE id = '$job_id'");

	if ($query){
			 echo '<div class="alert alert-success"><p>Succssfully</p></div>';
			}

    else{
    echo '<div class="alert alert-danger"><p>Not Succssful</p></div>';
	}
}

?>