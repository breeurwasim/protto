<?php

include "config.php";

$orderid = $_POST["orderid"];

if($orderid != ""){
    $sql3 = "UPDATE jos1n_orders SET status = 'Cancelled' WHERE id = '$orderid'";
    $result3 = mysqli_query($conn, $sql3);
}

mysqli_close($conn);

?>