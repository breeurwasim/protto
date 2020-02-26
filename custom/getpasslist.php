<?php

include "config.php";

$id = "";
$name = "";
$phone = "";
$make = "";
$model = "";
$regno = "";

//SQL Query
// $sql = "SELECT * FROM jos1n_orders WHERE date = '$day1' OR date = '$day2' OR date = '$day3' OR date = '$day4'";
$sql = "SELECT * FROM jos1n_pass WHERE 1";

$result = mysqli_query($conn, $sql);

$data = "<button class='btn' id='refresh'>Refresh</button><div class='table-responsive'><table class='table-hover table-bordered' border='1'>";
$data = $data . "<thead><tr><td>Pass No.</td><td>Name</td><td>Phone</td><td>Email</td><td>Make</td><td>Model</td><td>Reg. No.</td><td>Purchase Date</td><td>Insurance</td><td>Start Date</td><td>Expiry Date</td><td>Payment Status</td><td>Status</td></tr><thead><tbody>";

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
        $purchase =  $row["purchase"];
        $insurance =  $row["insurance"];
        $date =  $row["date"];
        $paymentstatus =  $row["paymentstatus"];
        $status =  $row["status"];
        $transactionid =  $row["transactionid"];
        $expire = strtotime($date. ' + 449 days');
        $today = strtotime("today midnight");
        
        if($status == "Active"){
        
        if($today >= $expire){
            $status = "Expired";
        } else {
            $status = "Active";
        }
        
        }
        
        $data = $data . "<tr>" . "<td>" . $id . "</td>" . "<td>" . $name . "</td>" . "<td>" . $phone . "</td>" . "<td>" . $email . "</td>" . "<td>" . $make . "</td>" . "<td>" . $model . "</td>" . "<td>" . $regno . "</td>" . "<td>" . $purchase . "</td>" . "<td>" . $insurance . "</td>" . "<td>" . $date . "</td>" . "<td>" . $expire . "</td>" . "<td>" . $paymentstatus . "</td>" . "<td>" . $status . "</td>";
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