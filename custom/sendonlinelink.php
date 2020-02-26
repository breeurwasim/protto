<?php

session_start();

include "config.php";

if(isset($_GET['orderid'])){

$orderid = $_GET['orderid'];
$_SESSION["orderid"] = $orderid;
$totalprice = 0;

$sql = "SELECT * FROM jos1n_orders WHERE id = $orderid";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $amount =  $row["price"];
        $name =  $row["name"];
        $email =  $row["email"];
        $phone =  $row["phone"];
        $paymentstatus =  $row["paymentstatus"];
        $additionalpaymentstatus =  $row["additionalpaymentstatus"];
        $additional =  $row["additional"];
        if($paymentstatus == "Pending"){
        	$totalprice = $totalprice + intval($amount);
        }
        if($additionalpaymentstatus == "Pending" OR $additionalpaymentstatus == "" ){
        	$totalprice = $totalprice + intval($additional);
        }
    }

}

$curl = curl_init();

$message = "Pay your pending amount for booking ID " . $orderid . " on http://split.to/xPCXBVx?orderid=" . $orderid;

curl_setopt_array($curl, array(
CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => "{ \"sender\": \"PROTTO\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"" . $message . "\", \"to\": [ \"" . $phone . "\" ] } ] }",
CURLOPT_SSL_VERIFYHOST => 0,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => array(
"authkey: 217086AER2IJyxBm45b07b4d9",
"content-type: application/json"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
  
header("Location: " . $_SERVER["HTTP_REFERER"]);

}

?>