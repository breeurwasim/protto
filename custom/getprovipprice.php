<?php
error_reporting(0);
include "config.php";

$model = $_POST["model"];
$type123 = strlen($_POST["service_type1"]);




if($type123 < 4 ){
$type = 'PW';
}else if($type123 >=3){
$type = 'PD&PW';
}else{

}



$service = $_POST["service"];

$provipprice = "NA";


$sql = "SELECT  provip_service.price FROM provip_service INNER JOIN bikes ON provip_service.segment = bikes.segment WHERE bikes.model = '$model' AND provip_service.type = '$type' AND provip_service.service = '$service' ";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        
        $provipprice =  $row["price"];
  

    }
} else {
    // echo "";
}



$return_arr[] = array("provipprice" => $provipprice,
                   );

mysqli_close($conn);

echo json_encode($return_arr);

?>