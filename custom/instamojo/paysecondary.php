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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$locality = $_POST['locality'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$make = $_POST['make'];
$model = $_POST['model'];
$regno = $_POST['regno'];
$date = $_POST['date'];
$time = $_POST['time'];
$coupon = $_POST['coupon'];
$type = $_POST['servicetype'];
$rideable = $_POST['rideable'];
$teflon = $_POST['teflon'];
$freecoupon = '';

$status = "Pending";
$paymentstatus = "Pending";

if (empty($_FILES['freecoupon']['name'])) {
// No file was selected for upload, your (re)action goes here
} else {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["freecoupon"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir . $orderid . "." . $imageFileType;
move_uploaded_file($_FILES["freecoupon"]["tmp_name"], $target_file);
$freecoupon = "http://protto.in/mumbai/custom/instamojo/" . $target_dir . $target_file;

}

if($type == "ProDry"){
        
    //SQL Query
    $sql = "SELECT jos1n_services.offer FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProDry'";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $price =  $row["offer"];
        }
    } else {
        // echo "";
    }
    
}
else {
    
    if($freecoupon == ''){
        
        //SQL Query
        $sql = "SELECT jos1n_services.offer FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProWet'";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $price =  $row["offer"];
            }
        } else {
            // echo "";
        }
    
    }
    else {
        
        //SQL Query
        $sql = "SELECT jos1n_services.offer FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProWetFree'";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $price =  $row["offer"];
            }
        } else {
            // echo "";
        }
    
        
    }
    
}

if($coupon == "PROTTO100" || $coupon == "SERVICE100"){

//SQL Query

$sql = "SELECT * FROM jos1n_otcoupons WHERE emobile = '$email' OR emobile = '$phone'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
} else {
    $price = $price - 100;
    //echo $price . "<br />";
    
    //SQL Query
    $sql1 = "INSERT INTO jos1n_otcoupons (`emobile`) VALUES ('$email')";
    
    $result1 = mysqli_query($conn, $sql1);
    
    //SQL Query
    $sql1 = "INSERT INTO jos1n_otcoupons (`emobile`) VALUES ('$phone')";
    
    $result1 = mysqli_query($conn, $sql1);
    
}

}

if($coupon == "NI7LFQ"){

    $price = $price - 50;
    //echo $price . "<br />";

}

if($teflon == "Yes"){

    $price = $price + 499;

}

if($_POST['paynow']){

$type = $type . ' - ' . $_POST['paynow'];

//SQL Query
$sql = "INSERT INTO jos1n_orders (`id`, `name`, `email`, `phone`, `address`, `locality`, `lat`, `lng`, `make`, `model`, `regno`, `date`,`time`, `price`, `rideable`, `type`, `teflon`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$address', '$locality', '$lat', '$lng', '$make', '$model', '$regno', '$date', '$time', '$price', '$rideable', '$type', '$teflon', '$freecoupon', '$coupon', '$paymentstatus', '$status')";

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

$status = "Booked";
$paymentstatus = "Pending";
$type = $type . ' - ' . $_POST['paylater'];

//SQL Query
$sql = "INSERT INTO jos1n_orders (`id`, `name`, `email`, `phone`, `address`, `locality`, `lat`, `lng`, `make`, `model`, `regno`, `date`,`time`, `price`, `type`, `teflon`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$address', '$locality', '$lat', '$lng', '$make', '$model', '$regno', '$date', '$time', '$price', '$type', '$teflon', '$freecoupon', '$coupon', '$paymentstatus', '$status')";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: https://protto.in/mumbai/booking-status.html?orderid=" . $orderid);

}

}
else {

header('Location: https://protto.in/mumbai/booking-failed.html');

}

?>