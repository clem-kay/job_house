<?php

$result = '';
if (isset($_POST['login'])) {
    //obtain user input and sanitize

    $user = checkValues($_POST['username']);
    $password = checkValues($_POST['password']);

    $password = md5($password);

   
    $login_query = "SELECT * FROM useraccount WHERE username ='$user' and password ='$password'";
    $db_login_query = mysqli_query($con,$login_query);
    if( $db_login_query){
        if(mysqli_num_rows($db_login_query) > 0 ){
           
            $user_row = mysqli_fetch_array($db_login_query);
            $verified =  $user_row['verified'];
            $usertype = $user_row['usertype'];

                       
             $_SESSION['id'] = $user_row['id'];
             $_SESSION['username'] = $user_row['username'];
             $_SESSION['firstname'] = $user_row['firstname'];
             $_SESSION['lastname']  = $user_row['lastname'];
             $_SESSION['email'] = $user_row['email'];
             $_SESSION['date'] =$user_row['date'];
             $_SESSION['usertype'] = $usertype;

            // var_dump($_SESSION['id']);

            if ($verified == 1 and $usertype =="client"){ 
            
               echo "<script>window.location='client_dashboard.php'</script>";
            }else if($verified ==1 and $usertype=="freelancer"){
                
                echo "<script>window.location='freelance_dashboard.php'</script>";
            }else{
                echo "<script>window.location='check_mail.php'</script> ";

            }
        }
         else echo '<h6>Incorrect Username or Password</h6>';
    }
    else echo ' <h6>No user found</h6>';
}
?>



