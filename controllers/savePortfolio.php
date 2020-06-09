<?php

if(isset($_POST['save'])){
 
      $temp_image= $_FILES["pics"]["tmp_name"];

      $pix = $_FILES["pics"]["name"];

      $filetype = $_FILES["pics"]["type"];
     
      $filepath = "upload/".$pix;

   if(move_uploaded_file($temp_image,$filepath)){
   echo '<div class="alert alert-success">
                    <p>Image Uploaded</p>
                  </div>';
     
   }
   else {
    echo 'failed';
   }
   
$title =$_POST['title'];
$links =$_POST['links'];
$description = $_POST['description'];
$img_path = $filepath; 
$user_id = $_SESSION['id'];



$save_to_db_query = mysqli_query($con,"INSERT INTO portfolio(title,links,description,img_path,user_id)VALUES('$title','$links','$description','$img_path','$user_id')");
if($save_to_db_query){
   echo '<div class="alert alert-success">
                    <p>Portfolio Created</p>
                  </div>';
	}
}
?>