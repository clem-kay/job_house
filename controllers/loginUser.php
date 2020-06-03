<?php

$result = '';
if (isset($_POST['login'])) {
    //obtain user input and sanitize

    $user = checkValues($_POST['username']);
    $password = checkValues($_POST['password']);

    $password = md5($password);

   
    $login_query = "SELECT * FROM useraccount WHERE username ='$user'";
    $db_login_query = mysqli_query($con,$login_query);
    if( $db_login_query){
        $num_of_user = mysqli_num_rows($db_login_query);

        if($num_of_user == 1 ){
            
            $user_row = mysqli_fetch_array($db_login_query);
            $verified =  $user_row['verified'];
            $usertype = $user_row['usertype'];

            
            if (!isset($_SESSION['id'])) {
                $_SESSION['id'] = $user_row['id'];
                echo "Isset" . " " .  $_SESSION['id'];

                $_SESSION['username'] = $user_row['username'];
                $_SESSION['firstname'] = $user_row['firstname'];
                $_SESSION['lastname']  = $user_row['lastname'];
            }
            
            // $_SESSION['id'] = $user_row['id'];
            // $_SESSION['username'] = $user_row['username'];
            // $_SESSION['firstname'] = $user_row['firstname'];
            // $_SESSION['lastname']  = $user_row['lastname'];

            // var_dump($_SESSION['id']);

            if ($verified == 1 and $usertype =="client"){ 
            
               echo "<script>window.location='client_dashboard.php'</script>";
            }else if($verified ==1 and $usertype=="freelancer"){
                
                echo "<script>window.location='freelance_dashboard.php'</script>";
            }else{
                echo '                
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry username or password incorrect</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div> ';

            }

        }
         else echo '                
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry username or password incorrect</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>    
';

    }
    else echo '                
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry username or password incorrect</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>    
';
}
?>