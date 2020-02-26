<?php 
error_reporting(0);
session_start();
include "config.php";

$orderid = date('Ymdhis');



if($_POST['service'] =='prowet '){

 $sql1 = "UPDATE `pro_vip` SET `prodry_wet`=prodry_wet - 1 WHERE user_id = '".$_POST['customer']."' And  bike_rto = '".$_POST['registeration']."' ";


$result1 = mysqli_query($conn, $sql1); 


}else{
 $sql1 = "UPDATE `pro_vip` SET `prowet`=prowet - 1 WHERE  user_id = '".$_POST['customer']."' And  bike_rto = '".$_POST['registeration']."'  ";

$result1 = mysqli_query($conn, $sql1); 



}



$sql = "INSERT INTO orders (`order_id`, `name`, `email`, `phone`, `address`, `locality`, `lat`, `lng`, `make`, `model`, `regno`, `date`,`time`, `price`, `type`, `teflon`, `note`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['locality']."', '$lat', '$lng', '$make', '$model', '".$_POST['registeration']."', '".$_POST['datepicker']."', '".$_POST['time']."', 'provip', '".$_POST['service']."', '$teflon', '".$_POST['note']."', '', '', 'paid', '1')";




if (mysqli_query($conn, $sql)) {
	echo '1';
} else {
    echo "0";
}





?>