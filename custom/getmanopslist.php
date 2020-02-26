<?php

include "config.php";

$id = $_GET["orderid"];
$day1 = date('d/m/Y',strtotime('-1 days'));
$day2 = date('d/m/Y');
$day3 = date('d/m/Y',strtotime('+1 days'));
$day4 = date('d/m/Y',strtotime('+2 days'));
// $today = date('Y-m-d');

//SQL Query
// $sql = "SELECT * FROM jos1n_orders WHERE date = '$day1' OR date = '$day2' OR date = '$day3' OR date = '$day4'";

$sql = "SELECT * FROM jos1n_orders WHERE (status = 'Booked' OR status = 'Service Complete') AND (date = '$day1' OR date = '$day2' OR date = '$day3' OR date = '$day4') WHERE id = $orderid ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$data = "<select>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id =  $row["id"];
        $name =  $row["name"];
        $date =  $row["date"];
        $data = $data . "<option value=\"" . $id . "\">" . $id . " - " . $name . " - " . $date . "</option>";
    }
    
    $data = $data . "</select>";

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


//SQL Query
// $sql = "SELECT * FROM jos1n_orders WHERE date = '$day1' OR date = '$day2' OR date = '$day3' OR date = '$day4'";

$sql = "SELECT jos1n_users.id, jos1n_users.name FROM jos1n_users, jos1n_user_usergroup_map WHERE jos1n_user_usergroup_map.user_id = jos1n_users.id AND jos1n_user_usergroup_map.group_id = '16'";

$result = mysqli_query($conn, $sql);

$data = $data . "<select>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id =  $row["id"];
        $name =  $row["name"];
        $data = $data . "<option value=\"" . $id . "\">" . $name . "</option>";
    }
    
    $data = $data . "</select><button class='btn' id='assignde' value='" . $id . "'>Assign DE</button>";

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