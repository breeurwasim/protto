<?php

include "config.php";

$id = "";
$name = "";
$phone = "";
$make = "";
$model = "";
$date = "";
$time = "";
$address = "";
$locality = "";
$type = "";
$freecoupon = "";
$note = "";
$day1 = date('Y-m-d',strtotime('-1 days'));
$day2 = date('Y-m-d');
$day3 = date('Y-m-d',strtotime('+1 days'));
$day4 = date('Y-m-d',strtotime('+2 days'));
// $today = date('Y-m-d');

//SQL Query
// $sql = "SELECT * FROM jos1n_orders WHERE date = '$day1' OR date = '$day2' OR date = '$day3' OR date = '$day4'";

$sql = "SELECT * FROM jos1n_orders WHERE 1 ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$data = "<button class='btn' id='refresh'>Refresh</button><div class='table-responsive'><table id='myTable' class='table-hover table-bordered' border='1'>";
$data = $data . "<thead><tr><td>Order No.</td><td>Name</td><td>Phone</td><td>Email</td><td>Make</td><td>Model</td><td>Reg. No.</td><td>Date</td><td>Time</td><td>Address</td><td>Locality</td><td>Type</td><td>Rideable</td><td>Teflon</td><td>Note</td><td>Coupon</td><td>Amount</td><td>Payment Status</td><td>Status</td><td>Action</td></tr><thead><tbody>";

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

} else {
    $data = "<p>No tasks pending at the moment. Please try in sometime.</p><button class='btn' id='refresh'>Refresh</button>";
}


/*
$return_arr[] = array("id" => $id,
                    "name" => $name,
                    "make" => $make,
                    "model" => $model,
                    "address" => $address);

*/

mysqli_close($conn);

// echo json_encode($return_arr);

echo $data;

?>