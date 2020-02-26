<?php
error_reporting(0);
include "config.php";


 $mo = $_POST["model_1"];

// print_R($_POST["model_1"]);



$make_model = explode('//',$mo);

// $make = $make_model[0];
// $model = $make_model[1];
// $cust_id = $make_model[2];

$make = $_POST["model_1"][0];
$model = $_POST["model_1"][1];
$cust_id = $_POST["model_1"][2];

$prowetoffer = "NA";
$prowetprice = "NA";
$prowetfreeoffer = "NA";
$prowetfreeprice = "NA";    
$prodryoffer = "NA";
$prodryprice = "NA";
$bike_reg = "NA";


if(isset($cust_id)){

    $sql = "SELECT * FROM `bike_customer` where cust_id ='$cust_id'  and model = '$model'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

         $bike_reg =  $row["bike_reg"];
       

    }
} else {
    // echo "";
}

}

echo $model;
echo "herere";

// die;
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
                    "bike_reg" => $bike_reg,
                    "prowetfreepass" => $prowetfreepass);

mysqli_close($conn);



echo json_encode($return_arr);

?>