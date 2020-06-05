<?php
include('./config/dbconfig2.php');
include('./functions.php');

if(isset($_GET['id'])){
	

	$id= $_GET['id'];

	$delete_query = mysqli_query($con,"DELETE FROM job_posted WHERE id = '$id'");
		if ($delete_query){
			header('Location:../client_job_posted.php?response=sucess');
		}else{
			header('Location:../client_job_posted.php?response=error');
		}
	
}

?>