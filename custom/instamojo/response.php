<?php

session_start();

include "../config.php";

$payment_request_id = $_REQUEST['payment_request_id'];
$payment_id = $_REQUEST['payment_id'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payments/' .  $payment_id . '/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:d27d6ec0784cf453a5a30dec7702c36d",
                  "X-Auth-Token:a39702f53013724c0b40681acdf7c4e4"));

$response = curl_exec($ch);
curl_close($ch); 

$resArr = json_decode($response, true);

$orderid = $_SESSION["orderid"];

if($resArr[payment][status] == "Credit"){
      
    //SQL Query
    $sql = "UPDATE jos1n_orders SET transactionid = '$payment_request_id', paymentstatus = 'Paid', status = 'Booked' WHERE id = '$orderid'";
    
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
    
    header("Location: https://protto.in/mumbai/booking-status.html?orderid=" . $orderid);
    
}
else {
    
    //SQL Query
    $sql = "UPDATE jos1n_orders SET transactionid = '$payment_request_id', status = 'Failed', paymentstatus = 'Failed' WHERE id = '$orderid'";
    
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);    
    
    header("Location: https://protto.in/mumbai/booking-failed.html");


}

?>