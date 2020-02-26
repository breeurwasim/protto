<?php

session_start();

include "src/Instamojo.php";

include "../config.php";

$apikey = "d27d6ec0784cf453a5a30dec7702c36d";
$apitoken = "a39702f53013724c0b40681acdf7c4e4";

$api = new Instamojo\Instamojo($apikey, $apitoken);

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


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Final Settlement",
        "amount" => $totalprice,
        "buyer_name" => $name,
        "email" => $email,
        "phone" => $phone,
        "redirect_url" => "https://protto.in/mumbai/custom/instamojo/finalpaymentresponse.php"
        ));
    // print_r($response['longurl']);
    $longurl = $response['longurl'];
    header('Location: ' . $longurl);
}
catch (Exception $e) {
    header('Location: https://protto.in/mumbai/final-payment-failed.html');
    // print('Error: ' . $e->getMessage());
}

}

?>