<?php

include('config/dbconfig2.php');
include('functions.php');

if(isset($_GET['id'])){
  $jobid =$_GET['id'];

   $query = mysqli_query($con,"SELECT * FROM appliedjob WHERE id = '$jobid'");
    while($user_name_row = mysqli_fetch_array($query) ){ 
      $client_id = $user_name_row['client_id'];
      $f_id = $user_name_row['freelancer_id'];
      $jobid = $user_name_row['jobid'];
    }
    $query = mysqli_query ($con,"SELECT * FROM useraccount WHERE id = '$client_id' ");
    while($row = mysqli_fetch_array($query)){
      $client_firstname = $row['firstname'];
      $client_lastname = $row['lastname'];
      $client_email = $row['email'];
    }
    $query = mysqli_query ($con,"SELECT * FROM useraccount WHERE id = '$f_id' ");
    while($row = mysqli_fetch_array($query)){
      $free_firstname = $row['firstname'];
      $free_lastname = $row['lastname'];
      $free_email = $row['email'];
    }

    $query = mysqli_query ($con,"SELECT * FROM job_posted WHERE id = '$jobid' ");
    while($row = mysqli_fetch_array($query)){
      $jobname = $row['job_title'];
      $price = $row['budget'];
      $description = $row['description'];
    }

}


?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>Job House | Invoice</title>
       <!-- Font Awesome -->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
       <!-- Google Fonts Roboto -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
       <!-- Bootstrap core CSS -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
       <!-- Material Design Bootstrap -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
       <!-- Your custom styles (optional) -->
       <link rel="stylesheet" href="invoice.css">
   
   
    </head>
   <body>
    <div id="invoice">

       
        <div class="toolbar hidden-print">
            <div class="text-right">
                <button id="printInvoice" style="background-color: #20c141;border-color:#20c141;color:#fff" class="btn"><i class="fa fa-print"></i> Print</button>
                <button style="background-color: #20c141;border-color:#20c141;color:#fff" class="btn"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
            </div>
            <hr>
        </div>
        
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                
                <header> 
                    <div class="row">
                         <!-- Freelancer Detials -->
                        <div class="col company-details">
                            <h3 class="name">
                                 <?php echo $free_firstname." ".$free_lastname?>
                            </h3>
                            
                            <div class="email"><a href="#"><?php echo $free_email ?></a></div>
                        </div>
                    </div>
                </header>
                
                <!-- client Detials -->
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">INVOICE TO:</div>
                            <h2 class="to"><?php echo $client_firstname . " ".$client_lastname; ?></h2>
                            
                            <div class="email"><a href="#"><?php echo $client_email; ?></a></div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id"><?php  $num = (int)uniqid(rand(2332,30000));   echo $num;?></h1>
                            <div class="date"><?php echo date('Y/M/D');?></div>
                        </div>
                    </div>

                    <!-- invioce content -->
                    <table style="margin-left: auto; margin-right: auto" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                               
                                <th class="text-left">Title</th>
                                <th class="text-left">Job Description</th>
                                <th class="text-right">Cost Price</th>
                                <th class="text-right">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td class="text-left"><?php echo $jobname?></td>
                                <td class="text-left qty"><?php echo $description?></td>
                                <td class="qty"><?php echo $price?></td>
                                <td class="total"><?php echo $price?></td>
                            </tr>
                            
                           
                        </tbody>
                        
                        <!-- calculations -->
                        <tfoot>
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="1">SUBTOTAL</td>
                                <td><?php echo "$".$price?></td>
                            </tr>
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="1">TAX 25%</td>
                                <td> <?php $tax=($price * 0.25);    echo "$".$tax; ?></td>
                            </tr>
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="1"><strong>GRAND TOTAL</strong></td>
                                <td> <?php echo "$".($price + $tax); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="thanks">Thank you!</div>
                    <div class="notices">
                        <div>NOTICE:</div>
                        <div class="notice">A finance charge of $50 will be deducted if you terminate a contract with a freelancer.</div>
                    </div>
                </main>
                <footer>
                    Jobhouse invoice generator
                </footer>
            </div>
            <div></div>
        </div>
    </div>


       




       <!-- End your project here-->
       <!-- jQuery -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <!-- Bootstrap tooltips -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
       <!-- Bootstrap core JavaScript -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
       <!-- MDB core JavaScript -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
       <!-- Your custom scripts (optional) -->
       <script type="text/javascript" src="invoice.js"> </script>
   </body>
</html>