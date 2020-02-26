<?php

session_start();

include "src/Instamojo.php";

include "../config.php";

$apikey = "d27d6ec0784cf453a5a30dec7702c36d";
$apitoken = "a39702f53013724c0b40681acdf7c4e4";

$api = new Instamojo\Instamojo($apikey, $apitoken);

if(isset($_POST['name'])){

$orderid = strtoupper(dechex(date('Ymdhis')));
$_SESSION["orderid"] = $orderid;
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$make = mysqli_real_escape_string($conn, $_POST['make']);
$model = mysqli_real_escape_string($conn, $_POST['model']);
$regno = mysqli_real_escape_string($conn, $_POST['regno']);
$purchase = mysqli_real_escape_string($conn, $_POST['purchase']);
$insurance = mysqli_real_escape_string($conn, $_POST['insurance']);
$date = date('Y-m-d');
$price = "49";

$status = "Pending";
$paymentstatus = "Pending";

if(isset($_POST['paynow'])){

$type = $type . ' - ' . $_POST['paynow'];

//SQL Query
$sql = "INSERT INTO jos1n_pass (`id`, `name`, `email`, `phone`, `make`, `model`, `regno`, `purchase`, `insurance`, `date`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$make', '$model', '$regno', '$purchase', '$insurance', '$date', '$paymentstatus', '$status')";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Protto ProVip Pass",
        "amount" => $price,
        "buyer_name" => $name,
        "email" => $email,
        "phone" => $phone,
        "redirect_url" => "https://protto.in/mumbai/custom/instamojo/responsepass.php"
        ));
    // print_r($response['longurl']);
    $longurl = $response['longurl'];
    header('Location: ' . $longurl);
}
catch (Exception $e) {
    header('Location: https://protto.in/mumbai/pass-booking-failed.html');
    // print('Error: ' . $e->getMessage());
}

}

if(isset($_POST['paylater'])){

$type = $type . ' - ' . $_POST['paylater'];

//SQL Query
$sql = "INSERT INTO jos1n_pass (`id`, `name`, `email`, `phone`, `make`, `model`, `regno`, `purchase`, `insurance`, `date`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$make', '$model', '$regno', '$purchase', '$insurance', '$date', 'Partner', 'Paid')";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

header('Location: https://protto.in/mumbai/pass-booking-status.html?passid=' . $orderid);

}

}
else {

header('Location: https://protto.in/mumbai/pass-booking-failed.html');

}

?>