<?php

include "config.php";

$make = $_POST["make"];

//SQL Query
$sql = "SELECT model FROM bikes WHERE make = '$make'";

$modelitems = "<option selected disabled>Select a Model</option>";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $modelitems =  $modelitems . "<option value='" . $row["model"] . "'>" . $row["model"] ."</option>";

    }
} else {
    // echo "";
}

mysqli_close($conn);

echo $modelitems;

?>