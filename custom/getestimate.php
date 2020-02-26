<?php

include "config.php";

$model = $_POST["model"];
$price = "NA";

//SQL Query
$sql = "SELECT jos1n_services.offer FROM jos1n_services INNER JOIN jos1n_bikes ON jos1n_services.segment = jos1n_bikes.segment WHERE jos1n_bikes.model = '$model' AND jos1n_services.type = 'ProDry'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $price =  $row["offer"];

    }
} else {
    // echo "";
}

mysqli_close($conn);

echo "<br />Bike Service Starting From <span style='font-weight: 900; color: #F35C21;'><i class='fa fa-inr'></i>" . $price . "</span>";

?>