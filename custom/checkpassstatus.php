<?php

include "config.php";

$provip = $_POST["provip"];
$name = "";
$email = "";
$phone = "";
$make = "";
$model = "";
$regno = "";
$startdate = "";
$prodrypass = "";
$prowetpass = "";
$status = "";

//SQL Query

$sql = "SELECT * FROM jos1n_pass WHERE id = '$provip';";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name =  $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $make = $row["make"];
        $model = $row["model"];
        $regno = $row["regno"];
        $startdate = $row["date"];
        $status = $row["status"];
        $expire = strtotime($startdate. ' + 449 days');
        $today = strtotime("today midnight");
        
        if($status == "Paid") {
        
        if($today >= $expire){
            $status = "Expired";
        } else {
            $status = "Active";
        }
        
        }
        else {
             $status = "Invalid ProVip Pass";
        }

    }
} else {
            $status = "Invalid ProVip Pass";
}

//SQL Query
$sql = "SELECT jos1n_services.pass FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProDry'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $prodrypass =  $row["pass"];

    }
} else {
    // echo "";
}

//SQL Query
$sql = "SELECT jos1n_services.pass FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProWet'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $prowetpass =  $row["pass"];

    }
} else {
    // echo "";
}

mysqli_close($conn);

$return_arr[] = array("name" => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "make" => $make,
                    "model" => $model,
                    "regno" => $regno,
                    "date" => $startdate,
                    "prodrypass" => $prodrypass,
                    "prowetpass" => $prowetpass,
                    "status" => $status);

echo json_encode($return_arr);

?>