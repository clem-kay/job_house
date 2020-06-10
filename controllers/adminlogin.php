<?php

$result = '';
if (isset($_POST['login'])) {
    //obtain user input and sanitize

    $user = checkValues($_POST['username']);
    $password = checkValues($_POST['password']);

    $password = md5($password);

   
    $login_query = "SELECT * FROM adminuser WHERE username ='$user' and password ='$password'";
    $db_login_query = mysqli_query($con,$login_query);
        if(mysqli_num_rows($db_login_query) > 0 ){
           
            $user_row = mysqli_fetch_array($db_login_query);
                       
             $_SESSION['id'] = $user_row['id'];
             $_SESSION['username'] = $user_row['username'];
    
         echo "<script>window.location='adminIndex.php'</script> ";

            } else echo '<h6>Incorrect Username or Password</h6>';
        }
        
    
?>



