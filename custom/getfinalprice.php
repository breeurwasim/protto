<?php
error_reporting(0);
include "config.php";

$model = $_POST["model"];

$prowetprice = "NA";

$prodryandprowetprice = "NA";

//SQL Query
$sql = "SELECT services.offer, services.price, services.pass FROM services INNER JOIN bikes ON services.segment = bikes.segment WHERE bikes.model = '$model' AND services.type = 'ProDry'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        
        $prodryprice =  $row["price"];
        $prodryoffer =  $row["offer"];
        $prodrypass =  $row["pass"];

    }
} else {
    // echo "";
}


//SQL Query
$sql = "SELECT services.offer, services.price, services.pass FROM services INNER JOIN bikes ON services.segment = bikes.segment WHERE bikes.model = '$model' AND services.type = 'ProWet'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $prowetprice =  $row["price"];
        $prowetoffer =  $row["offer"];
        $prowetpass =  $row["pass"];

    }
} else {
    // echo "";
}


//SQL Query
$sql = "SELECT services.offer, services.price, services.pass FROM services INNER JOIN bikes ON services.segment = bikes.segment WHERE bikes.model = '$model' AND services.type = 'ProWetFree'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $prowetfreeprice =  $row["price"];
         $prowetfreeoffer =  $row["offer"];
        $prowetfreepass =  $row["pass"];

    }
} else {
    // echo "";
}

$return_arr[] = array("prodryprice" => $prodryprice,
                    "prodryoffer" => $prodryoffer,
                    "prodrypass" => $prodrypass,
                    "prowetprice" => $prowetprice,
                    "prowetoffer" => $prowetoffer,
                    "prowetpass" => $prowetpass,
                    "prowetfreeprice" => $prowetfreeprice,
                    "prowetfreeoffer" => $prowetfreeoffer,
                    "prowetfreepass" => $prowetfreepass);

mysqli_close($conn);

echo json_encode($return_arr);

?>