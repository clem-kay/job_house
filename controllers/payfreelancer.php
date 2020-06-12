<?php
	if (isset($_GET['id'])){
		$jobid = $_GET['id'];

		//getting the details of the freelance and tha amount to be paid to him
		$query = mysqli_query ($con,"SELECT * FROM transaction WHERE jobid = '$jobid'");
		$num_row =mysqli_num_rows($query);
		if($num_row < 1){
			echo '<div class="alert alert-danger">Please Ensure that the required amount is paid into the account<div>';
		}
		else{
			$query = mysqli_querry($con,"SELECT * FROM appliedjob WHERE jobid='$jobid'");
			while (mysqli_fetch_array()) {
				# code...
			}
		}
	}


?>