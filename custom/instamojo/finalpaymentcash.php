<?php

session_start();

include "../config.php";

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

      
    //SQL Query
    $sql = "UPDATE jos1n_orders SET paymentstatus = 'Paid', paymentmode = 'Cash', transactionid = 'NA', additionaltransactionid = 'NA', additionalpaymentstatus = 'Paid', additionalpaymentmode = 'Cash' WHERE id = '$orderid'";
    
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
    
    header("Location: " . $_SERVER["HTTP_REFERER"]);

}

?>