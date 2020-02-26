<?php
error_reporting(0);
session_start();
include "config.php";

if($_SESSION['name']){

$coupon = $_POST["coupon"];
$email = $_POST["email"];
$phone = $_POST["phone"];

if($coupon == "PROTTO100" || $coupon == "SERVICE100" || $coupon == "PRT7RD4"){

//SQL Query

$sql = "SELECT * FROM otcoupons WHERE emobile = '$email' OR emobile = '$phone'";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "Coupon used already";
} else {
    echo "Coupon code accepted";
}

}

else if($coupon == "NI7LFQ"){
    echo "Promo code accepted";
}

else {
    echo "Coupon code invalid";

}

mysqli_close($conn);
}else{

$_SESSION['email'] = $_POST["email"];
echo "login.php";


}

?>