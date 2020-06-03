
<?php
session_start();
if(isset($_POST['activate'])){
    //get activate code and sanitize

    $activation_code = checkValues($_POST['activationcode']);
    $username = checkValues($_POST['username']);


    // compare entere code with code in db

    $activation_code_query = mysqli_query($con,"SELECT * FROM useraccount WHERE username = '$username' ");
    if($activation_code_query){
       $num_of_user = mysqli_num_rows($activation_code_query);
        if($num_of_user> 0 ){
            //user exist so go ahead and activate account
            $user_row = mysqli_fetch_array($activation_code_query);
            $db_activation_code =  $user_row['code'];
           
            
            if(trim($db_activation_code)=== $activation_code ){
                //activate user account
                $activate_user_query = mysqli_query($con,"UPDATE useraccount SET verified = 1 WHERE username ='$username' ");

                //redirect user to dashboard
                 $_SESSION['id']= $user_row['id'];
                 echo "<script>window.location='profile.php'</script>";
                


            }else{
                echo '                
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry activation code is incorrect</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>    
';
            }

        }else{
            //no user
            echo '                
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry no account with this Email address found</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>    
';
        }
    }



}