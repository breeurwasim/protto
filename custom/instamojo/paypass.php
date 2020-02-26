<?php

session_start();

include "src/Instamojo.php";

include "../config.php";

$apikey = "d27d6ec0784cf453a5a30dec7702c36d";
$apitoken = "a39702f53013724c0b40681acdf7c4e4";

$api = new Instamojo\Instamojo($apikey, $apitoken);

if(isset($_POST['provip'])){

$orderid = date('Ymdhis');
$_SESSION["orderid"] = $orderid;
$provip = mysqli_real_escape_string($conn, $_POST['provip']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$locality = mysqli_real_escape_string($conn, $_POST['locality']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$type = mysqli_real_escape_string($conn, $_POST['servicetype']);

$sql = "SELECT * FROM jos1n_pass WHERE id = '$provip';";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name =  $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $make = $row["make"];
        $model = $row["model"];
        $regno = $row["regno"];
        $startdate = $row["date"];
        $expire = strtotime($startdate. ' + 449 days');
        $today = strtotime("today midnight");
        
        if($today >= $expire){
            $status = "Expired";
        } else {
            $status = "Active";
        }

    }
} else {
            $status = "Invalid ProVip Pass";
}

if($status == "Active"){
    
$status = "Pending";
$paymentstatus = "Pending";

if($type == "ProDry"){
        
    //SQL Query
    $sql = "SELECT jos1n_services.pass FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProDry'";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $price =  $row["pass"];
        }
    } else {
        // echo "";
    }
    
}
else {
    
        
        //SQL Query
        $sql = "SELECT jos1n_services.pass FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProWet'";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $price =  $row["pass"];
            }
        } else {
            // echo "";
        }
    
    
}


$type = $type . ' - ' . $_POST['paynow'];

//SQL Query
$sql = "INSERT INTO jos1n_orders (`id`, `name`, `email`, `phone`, `address`, `locality`, `make`, `model`, `regno`, `date`,`time`, `price`, `type`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$address', '$locality', '$make', '$model', '$regno', '$date', '$time', '$price', '$type', '$freecoupon', '$provip', '$paymentstatus', '$status')";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $type,
        "amount" => $price,
        "buyer_name" => $name,
        "email" => $email,
        "phone" => $phone,
        "redirect_url" => "https://protto.in/mumbai/custom/instamojo/response.php"
        ));
    // print_r($response['longurl']);
    $longurl = $response['longurl'];
    header('Location: ' . $longurl);
}
catch (Exception $e) {
    header('Location: https://protto.in/mumbai/booking-failed.html');
    // print('Error: ' . $e->getMessage());
}

}
else{
    header('Location: https://protto.in/mumbai/booking-failed.html');
}


}
else {

header('Location: https://protto.in/mumbai/booking-failed.html');

}

?>