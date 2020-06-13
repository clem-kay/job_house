<?php
require_once('config/dbconfig2.php');
require_once('config/stripe_config.php');

session_start();

$id = $_SESSION['id'];

if(isset($_GET['job_id'])){
    $job_id = $_GET['job_id'];
    //qery for bid amount

    $sub_query = mysqli_query($con,"SELECT * FROM transaction");
    if($sub_query){
        $row1 =mysqli_fetch_array($sub_query);
        $jid = $row1['jobid'];
        if($jid === $job_id){
            $message = 'paid';
         echo 'echo <div class="alert alert-danger">Job has already been paid</div>';

        } else{
         
    $query = mysqli_query($con,"SELECT * FROM job_posted WHERE id = '$job_id'");
    if($query){
         $row = mysqli_fetch_array($query);
         $pay_amount = $row['budget'];
         $pay_amount = $pay_amount + ($pay_amount * 0.25);
        
         $stripe_pay_amount = $pay_amount*100;
         
    $save_transaction = mysqli_query($con,"INSERT INTO transaction(client_id,jobid,amount)VALUES('$id','$job_id','$pay_amount')");
      if($save_transaction){
        
      }

    }else{
        //no query
    }

\Stripe\Stripe::setVerifySslCerts(false);
$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];

$customer = \Stripe\Customer::create(array(
    'email' => $email,
    'source'  => $token
));

$charge = \Stripe\Charge::create(array(
    'customer' => $customer->id,
    'amount'   => $stripe_pay_amount,
    'currency' => 'usd'
));

$amount_charged = $charge->amount;
$amount_charged = $amount_charged/100;

$message = 'success';

echo '<div class="alert alert-success">Payment Sucessful</div>';

    } 
}

}