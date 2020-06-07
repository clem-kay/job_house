<?php

include('../config/dbconfig2.php');

            if (isset($_GET['id'])){

              $applied_job_id = $_GET['id'];
              
              $approved_query = mysqli_query($con, "UPDATE appliedjob SET approved = 1 WHERE id ='$applied_job_id' ");
                  
              if($approved_query){
                    echo '<div class="alert alert-success">
                    <p>You have sucessfuly approved Job</p>
                  </div>';
                  echo "<script>window.location='../jobhouse/client_dashboard.php'</script>";
              }else{
                   echo '<div class="alert alert-danger">
                    <p>Error in approving of job</p>
                  </div>';
                  echo "<script>window.location='client_approval.php'</script>";
              }
          }     
      
    ?>