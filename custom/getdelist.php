<?php

include "config.php";

$de = $_POST["de"];
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

$sql = "SELECT * FROM jos1n_orders WHERE (status = 'Booked' OR status = 'Service Complete') AND de = '$de' ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$data = "<button class='btn' id='refresh'>Refresh</button><div class='table-responsive'><table id='myTable' class='table-hover table-bordered' border='1'>";
$data = $data . "<thead><tr><td>Order No.</td><td>Name</td><td>Phone</td><td>Email</td><td>Make</td><td>Model</td><td>Date</td><td>Locality</td><td>Action</td></tr><thead><tbody>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id =  $row["id"];
        $name =  $row["name"];
        $phone =  $row["phone"];
        $email =  $row["email"];
        $make =  $row["make"];
        $model =  $row["model"];
        $date =  $row["date"];
        $locality =  $row["locality"];
        $button = "<a class='btn' href='view-order.html?orderid=" . $id . "'>View More</a>";
        $data = $data . "<tr>" . "<td>" . $id . "</td>" . "<td>" . $name . "</td>" . "<td><a href='tel:" . $phone . "' target='_blank'>" . $phone . "</a></td>" . "<td>" . $email . "</td>" . "<td>" . $make . "</td>" . "<td>" . $model . "</td>" . "<td>" . $date . "</td>" . "<td>" . $locality . "</td>" . "<td>" . $button . "</td>";
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