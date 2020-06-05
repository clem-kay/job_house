<?php

if(isset($_REQUEST['id'])){
	

	$id= $_REQUEST['id'];
	$delete_query ="DELETE FROM job_posted WHERE id = 'id'";

	$delete = mysqli_query($con,$delete_query);
		if ($delete){
			header('Location:../client_job_posted.php?response=sucess');
		}else{
			header('Location:../client_job_posted.php?response=error');
		}
	
}

?>