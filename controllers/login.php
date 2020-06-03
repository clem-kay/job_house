<?php

ob_start();
session_start();

// two passwords are equal to each other
  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
    $password=substr($password,0,100);

  $res=mysqli_query($con,"SELECT * FROM useraccount WHERE username='$username'");
      $row=mysqli_fetch_array($res);
      if ($count = mysqli_num_rows($res) == 1){
      	echo "true";
      } // if uname correct it returns must be 1 row
    	
    if( $count === 1 && $row['password']===$password && $row['verified']===1)
    {echo "true";
        $_SESSION['users'] = $row['id'];
       		
       		if($row['usertype']==='client'){
       			header("Location: client_dashboard.php");
       		}
       		else if($row['usertype']==='freelance'){
       			header("Location: f_dashboard.php");
       		}

      } else {
          // alert notification
        echo '<center style="margin-top:15px;"><div class="alert alert-danger alert-dismissible" style="width:620px;align:center;border-radius:5px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Error!</h4>
               Your login information is incorrect
              </div></center>';
      }

}

  


?>