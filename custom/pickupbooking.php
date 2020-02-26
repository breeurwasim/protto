<?php

include "config.php";

$orderid = $_POST["orderid"];

if($orderid != ""){
    $sql3 = "UPDATE jos1n_orders SET status = 'Picked Up' WHERE id = '$orderid'";
    $result3 = mysqli_query($conn, $sql3);
    
//SQL Query

$sql = "SELECT * FROM jos1n_orders WHERE id = '$orderid';";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	    
	$curl = curl_init();
	
	$message = "Your bike with booking ID " . $orderid . " has been successfully picked up. To track, visit https://protto.in/tracking.html";
	
	curl_setopt_array($curl, array(
	CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{ \"sender\": \"PROTTO\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"" . $message . "\", \"to\": [ \"" . $row["phone"] . "\" ] } ] }",
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
	}

    }
    
}

mysqli_close($conn);

?>