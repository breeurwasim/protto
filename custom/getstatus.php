<?php

include "config.php";

$trackingid = $_POST["trackingid"];

//SQL Query

$sql = "SELECT * FROM jos1n_orders WHERE id = '$trackingid';";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
    	echo '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12">';

        echo '<h3>Booking Status</h3>';
        
        echo '<h4 style="color: #e33a0c;"><strong>' . $row["status"] . '</strong></h4><br />';
        
        echo '</div></div>';
      
    	echo '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12">';
      
        echo '<div class="bs-example"><div class="progress">';
      
      	switch ($row["status"]) {
            case "Pending":
        		echo '<div class="progress-bar" style="width: 10%; background-color: #e33a0c;">10%</div>';
                break;
            case "Booked":
        		echo '<div class="progress-bar" style="width: 25%; background-color: #e33a0c;">25%</div>';
                break;
            case "Picked Up":
        		echo '<div class="progress-bar" style="width: 35%; background-color: #e33a0c;">35%</div>';
                break;
            case "Getting Serviced":
        		echo '<div class="progress-bar" style="width: 75%; background-color: #e33a0c;">75%</div>';
                break;
            case "Delivered":
        		echo '<div class="progress-bar" style="width: 100%; background-color: #e33a0c;">100%</div>';
                break;
            case "Cancelled":
        		echo '<div class="progress-bar" style="width: 100%; background-color: #e33a0c;">100%</div>';
                break;
            default:
        		echo '<div class="progress-bar" style="width: 100%; background-color: #e33a0c;">100%</div>';
        }
      
        echo '</div></div>';
        
        echo '</div></div>';
        
    	echo '<div class="row"><div class="col-xs-6 col-sm-6 col-md-6">';
    	
    	echo '<strong>Booking Details:</strong><br />';
        
        echo 'Booking ID: ' . $row["id"] . '<br />';
        
        echo 'Pickup Date: ' . $row["date"] . '<br />';
        
        echo 'Pickup Time: ' . $row["time"] . '<br />';  
          	
    	echo '</div><div class="col-xs-6 col-sm-6 col-md-6">';
    	
    	echo '<strong>Shipping Address: </strong><br />';
        
        echo  $row["address"] . '<br />';
    	
        echo '</div></div>';
        
        echo '<hr />';
        
    	echo '<div class="row"><div class="col-xs-6 col-sm-6 col-md-6">';
    	
    	echo '<strong>Booking Summary:</strong><br />';
        
        echo '<img src="images/' . str_replace(' - Pay Later','',$row['type']) . '.png" width="200" />';
        
        echo '<strong>for ' . $row["make"] . ' ' . $row["model"] . ' ( ' . $row["regno"] . ' ) </strong><br />'; 
          	
    	echo '</div><div class="col-xs-6 col-sm-6 col-md-6">';
    	
    	echo '<br /><strong><i class="fa fa-inr"></i> ' . $row["price"] . '</strong>';
    	echo '<br /><strong>Payment Status: ' . $row["paymentstatus"] . '</strong>';
    	
        echo '</div></div>';

    }
} else {
    echo "Order Id is invalid";
}

mysqli_close($conn);


?>