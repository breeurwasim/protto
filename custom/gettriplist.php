<?php

include "config.php";

$id = "";
$name = "";
$phone = "";
$make = "";
$model = "";
$address = "";
$locality = "";
$type = "";
$freecoupon = "";
$sname = "";
$slocality = "";
$dcode = "";
$status = "";
$today = date('Y-m-d');

//SQL Query
$sql = "SELECT * FROM jos1n_orders WHERE date = '$today'";

$result = mysqli_query($conn, $sql);

$data = "<button class='btn' id='refresh'>Refresh</button><div class='table-responsive'><table class='table-hover table-bordered' border='1'>";
$data = $data . "<thead><tr><td>Order No.</td><td>Name</td><td>Phone</td><td>Email</td><td>Make</td><td>Model</td><td>Reg. No.</td><td>Address</td><td>Locality</td><td>Type</td><td>Free Coupon</td><td>PCode</td><td>DCode</td><td>Station</td><td>Locality</td><td>Status</td><td>Action</td></tr><thead><tbody>";

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
        $address =  $row["address"];
        $locality =  $row["locality"];
        $type =  $row["type"];
        if($row["freecoupon"] != ""){
        	$freecoupon =  "<a href='" . $row["freecoupon"] . "' target='_blank'>View Coupon</a>";
        }
        else {
        	$freecoupon = "";
        }
        $pcode =  $row["pcode"];
        $dcode =  $row["dcode"];
        $sname =  $row["sname"];
        $slocality =  $row["slocality"];
        $paymentstatus =  $row["paymentstatus"];
        $status =  $row["status"];
        $button = "";
        if($status == "Getting Serviced") { 
            $button = "<button class='btn' id='scheduledrop' value='" . $id . "'>Schedule Drop</button>";
        }
        $data = $data . "<tr>" . "<td>" . $id . "</td>" . "<td>" . $name . "</td>" . "<td>" . $phone . "</td>" . "<td>" . $email . "</td>" . "<td>" . $make . "</td>" . "<td>" . $model . "</td>" . "<td>" . $regno . "</td>" . "<td>" . $address . "</td>" . "<td>" . $locality . "</td>" . "<td>" . $type . "</td>" . "<td>" . $freecoupon . "</td>" . "<td>" . $pcode . "</td>" . "<td>" . $dcode . "</td>" . "<td>" . $sname . "</td>" . "<td>" . $slocality . "</td>" . "<td>" . $paymentstatus . "</td>" . "<td>" . $status . "</td>" . "<td>" . $button . "</td>";
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