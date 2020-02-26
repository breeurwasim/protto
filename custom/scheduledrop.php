<?php

include "config.php";

$id = "";
$name = "";
$phone = "";
$make = "";
$model = "";
$address = "";
$locality = "";
$sname = "";
$slocality = "";
$dcode = "";
$status = "";

$orderid = $_POST["orderid"];
$today = date('d-m-Y');

if($orderid != ""){
    $sql3 = "UPDATE jos1n_orders SET status = 'Servicing Complete' WHERE id = '$orderid'";
    $result3 = mysqli_query($conn, $sql3);
}

mysqli_close($conn);

?>