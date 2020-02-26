<?php

session_start();

include "config.php";

if(isset($_POST['orderid'])){

$orderid = $_POST['orderid'];

$sql = "SELECT * FROM jos1n_orders WHERE id = $orderid";

$result = mysqli_query($conn, $sql);
  
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id =  $row["id"];
        $name =  $row["name"];
        $phone =  $row["phone"];
        $email =  $row["email"];
        $make =  $row["make"];
        $model =  $row["model"];
        $regno =  $row["regno"];
        $date =  $row["date"];
        $time =  $row["time"];
        $address =  $row["address"];
        $locality =  $row["locality"];
        $amount =  $row["price"];
        $coupon =  $row["coupon"];
        $paymentstatus =  $row["paymentstatus"];
        $status =  $row["status"];
        $transactionid =  $row["transactionid"];
        $type =  $row["type"];
        $rideable =  $row["rideable"];
        $teflon =  $row["teflon"];
        $note =  $row["note"];
        if($row["freecoupon"] != ""){
        	$freecoupon =  "<a href='" . $row["freecoupon"] . "' target='_blank'>View Coupon</a>";
        }
        else {
        	$freecoupon = "";
        }
        if($status == "Booked"){
        	$button = "<button class='btn' id='edit' value='" . $id . "'>Edit</button><br /><br /><button class='btn' id='pickup' value='" . $id . "'>Pickup</button><br /><br /><button class='btn' id='cancelbooking' value='" . $id . "'>Cancel Booking</button>";
        }
        elseif($status == "Picked Up"){
        	$button = "<button class='btn' id='servicing' value='" . $id . "'>Servicing</button>";
        }
        elseif($status == "Getting Serviced"){
        	$button = "<button class='btn' id='deliver' value='" . $id . "'>Delivered</button>";
        }
        else {
        	$button = "";
        }
        $data = $data . "<tr>" . "<td>" . $id . "</td>" . "<td>" . $name . "</td>" . "<td><a href='tel:" . $phone . "' target='_blank'>" . $phone . "</a></td>" . "<td>" . $email . "</td>" . "<td>" . $make . "</td>" . "<td>" . $model . "</td>" . "<td>" . $regno . "</td>" . "<td>" . $date . "</td>" . "<td>" . $time . "</td>" . "<td>" . $address . "</td>" . "<td>" . $locality . "</td>" . "<td>" . $type . "</td>" . "<td>" . $rideable . "</td>" . "<td>" . $teflon . "</td>" . "<td>" . $note . "</td>" . "<td>" . $coupon . "</td>" . "<td>" . $amount . "</td>" . "<td>" . $paymentstatus . "</td>" . "<td>" . $status . "</td>" . "<td>" . $button . "</td>";
    }
    
    $data = $data . "</tbody></table></div>";

}

}


  
?>