<?php

session_start();

include "config.php";

if(isset($_POST['name'])){

$orderid = $_POST['orderid'];
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
$type = $_POST['type'];
$rideable = $_POST['rideable'];
$teflon = $_POST['teflon'];
$note = $_POST['note'];
$de = $_POST['de'];
$ss = $_POST['ss'];
$additional = $_POST['additional'];
  
if($de == ""){
  if($ss == ""){
    
//SQL Query
$sql = "UPDATE jos1n_orders SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `locality` = '$locality', `make` = '$make', `model` = '$model', `regno` = '$regno', `date` = '$date',`time` = '$time', `type` = '$type', `teflon` = '$teflon', `note` = '$note', `additional` = '$additional' WHERE id = $orderid";

  }
  else{
    
//SQL Query
$sql = "UPDATE jos1n_orders SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `locality` = '$locality', `make` = '$make', `model` = '$model', `regno` = '$regno', `date` = '$date',`time` = '$time', `type` = '$type', `teflon` = '$teflon', `note` = '$note', `sname` = '$ss', `additional` = '$additional' WHERE id = $orderid";


  }
}
  elseif($ss == ""){
    if($de == ""){
      
//SQL Query
$sql = "UPDATE jos1n_orders SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `locality` = '$locality', `make` = '$make', `model` = '$model', `regno` = '$regno', `date` = '$date',`time` = '$time', `type` = '$type', `teflon` = '$teflon', `note` = '$note', `additional` = '$additional' WHERE id = $orderid";

    }
    else{
      
//SQL Query
$sql = "UPDATE jos1n_orders SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `locality` = '$locality', `make` = '$make', `model` = '$model', `regno` = '$regno', `date` = '$date',`time` = '$time', `type` = '$type', `teflon` = '$teflon', `note` = '$note', `de` = '$de', `additional` = '$additional' WHERE id = $orderid";


    }
  }
  else {
    
//SQL Query
$sql = "UPDATE jos1n_orders SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `locality` = '$locality', `make` = '$make', `model` = '$model', `regno` = '$regno', `date` = '$date',`time` = '$time', `type` = '$type', `teflon` = '$teflon', `note` = '$note', `sname` = '$ss', `de` = '$de', `additional` = '$additional' WHERE id = $orderid";


  }


$result = mysqli_query($conn, $sql);

mysqli_close($conn);

header('Location: https://www.protto.in/mumbai/editorder.html?orderid=' . $orderid);

}
?>