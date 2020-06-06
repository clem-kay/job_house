<?php
session_start();
if(isset($_POST['create_account'])){
    //get form data
    $username = checkValues($_POST['username']);
    $firstname = checkValues($_POST['firstname']);
    $lastname = checkValues($_POST['lastname']);
    $email = checkValues($_POST['email']);
    $password = md5(checkValues($_POST['password']));
    $usertype = $_POST['usertype'];
    $verified = 0;
    $activation_code = uniqid(rand(2332,30000));
    $code = $activation_code ;

  

    //check if user already exist
    $check_user_account = mysqli_query($con,"SELECT * FROM useraccount WHERE username = '$username' ");

    $num_of_users = mysqli_num_rows($check_user_account);
    if($num_of_users > 0){

        //if user already exist, display error message
        echo '                
    <h6>Username Taken</h6>
';

    }else{
        //proceed to register user
        //perform query
        $save_to_db_query = mysqli_query($con,"INSERT INTO useraccount(username,password,firstname,lastname,email,verified,usertype,code)VALUES('$username','$password','$firstname','$lastname','$email','$verified','$usertype','$code')");
        $user_id = mysqli_insert_id($con);
        if($save_to_db_query){

            $_SESSION['username'] = $username;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname']  = $lastname;
            $_SESSION['email']      =$email;
            $_SESSION['usertype'] = $usertype;

          //send activation code to email
            $host = $_SERVER['SERVER_NAME'];


            $headers = "From: JobHouse@".$host."\r\n";
            $headers .= "Content-type: text/html\r\n";

            $at = "@";

            $email_title = "Activate Your JobHouse Account";
            //$email_title_customer = "Email Verification";
            $body_email =  '
            
             
            <div class="card-head">
                               
                            </div>
                            <div class="gaps-1x"></div><!-- .gaps -->
                            <table class="email-wraper">
                               <tbody><tr>
                                   <td class="pdt-4x pdb-4x">
                                        <table class="email-header">
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="email-body">
                                            <tbody>
                                                <tr>
                                                    <td class="pd-3x pdb-1-5x">
                                                        <h2 class="email-heading">Activate Your E-Mail Address</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pdl-3x pdr-3x pdb-2x">
                                                      
                                                        <p class="mgb-1x"> Please use the code below to activate your account on job house</p>
                                                        
                                                         
                                                         <h1> '.$activation_code.'</h1>
                                                       
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="pd-3x pdt-2x pdb-3x">
                                                        <p>If you did not make this request, please contact us or ignore this message.</p>
                                                        <p class="email-note">Do not reply this email</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                   </td>
                               </tr>
                            </tbody></table>';

            mail($email,$email_title,$body_email,$headers);

         echo "<script>window.location='check_mail.php';</script>";

        }
    }

}