<?php

session_start();

include "../config.php";

require('razorconfig.php');
require('Razorpay.php');

// Create the Razorpay Order
use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);

$razorpay_payment_id = $_REQUEST['razorpay_payment_id'];
$orderid = $_REQUEST['orderid'];
$error_code = $_REQUEST['error_code'];

echo $razorpay_payment_id;

if($error_code == ""){
    
    //SQL Query
    $sql = "UPDATE jos1n_orders SET transactionid = '$razorpay_payment_id', status = 'Paid' WHERE id = '$orderid'";

}
else {
    
    //SQL Query
    $sql = "UPDATE jos1n_orders SET transactionid = '$razorpay_payment_id', status = 'Failed' WHERE id = '$orderid'";
    
}

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: https://protto.in/booking-status.html?orderid=" . $orderid);


?>