<?php

include "config.php";

$dteamid = $_POST["dteamid"];
$orderid = $_POST["orderid"];
$id = "";
$name = "";
$phone = "";
$make = "";
$model = "";
$address = "";
$locality = "";
$sname = "";
$slocality = "";
$today = date('Y-m-d');

if($orderid != ""){
    $sql3 = "UPDATE jos1n_orders SET status = 'Drop Complete' WHERE id = '$orderid'";
    $result3 = mysqli_query($conn, $sql3);
    $sql4 = "SELECT * FROM jos1n_orders WHERE id = '$orderid'";

    $result4 = mysqli_query($conn, $sql4);
    
    if (mysqli_num_rows($result4) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result4)) {
            $url = 'https://api.elasticemail.com/v2/email/send';
            
            $post = array('apikey' => '7cd4b7a8-baa3-45ec-955f-a8a0346be3b6',
            'to' => $row["email"],
            'template' => 'Bike Delivered',
            'merge_username' => $row["name"],
            'isTransactional' => true);
            
            $ch = curl_init();
            
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => false
            ));
            
            $result=curl_exec ($ch);
            curl_close ($ch);
            
            	$curl = curl_init();
            	
            	$message = "Thank you for your booking. Your bike has been delivered.";

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


//SQL Query
$sql = "SELECT * FROM jos1n_orders WHERE status = 'Servicing Complete' AND dcode = '' AND date = '$today' LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id =  $row["id"];
        $name =  $row["name"];
        $phone =  $row["phone"];
        $make =  $row["make"];
        $model =  $row["model"];
        $address =  $row["address"];
        $locality =  $row["locality"];
        $sname = $row["sname"];
        $slocality= $row["slocality"];
    }
    
    $sql2 = "UPDATE jos1n_orders SET dcode = '$dteamid', status = 'Out For Drop' WHERE id = '$id'";
    $result2 = mysqli_query($conn, $sql2);
    
    $data = "Order #" . $id . "<br />Name: " . $name . "<br />Phone: <a href='tel:" . $phone . "'>" . $phone . "</a><br />Address: " . $address . "<br />Locality: " . $locality . "<br />Make: " . $make . "<br />Model: " . $model . "<br />Service Station: " . $sname . "<br />Locality: " . $slocality . "<br /><button class='btn' id='finishtask' value='" . $id . "'>Complete</button>";

} else {
    $data = "<p>No new task at the moment. Please try in sometime.</p><button class='btn' id='gettask'>Get Task</button>";
}


/*
$return_arr[] = array("id" => $id,
                    "name" => $name,
                    "make" => $make,
                    "model" => $model,
                    "address" => $address);

*/
mysqli_close($conn);

// echo json_encode($return_arr);

echo $data;

?>