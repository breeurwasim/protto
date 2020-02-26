<?php


session_start();
error_reporting(0);

include "src/Instamojo.php";

include "../config.php";

$abc = str_replace("-",'',$_POST['regno']);
$xyz = str_replace(" ","",$abc);
    


$apikey = "d27d6ec0784cf453a5a30dec7702c36d";
$apitoken = "a39702f53013724c0b40681acdf7c4e4";

$api = new Instamojo\Instamojo($apikey, $apitoken);

if(isset($_POST['name'])){

$orderid = date('Ymdhis');
// $_SESSION["orderid"] = $orderid;

if($_POST['bike_make']){
      $make = mysqli_real_escape_string($conn, $_POST['bike_make']);
$model = mysqli_real_escape_string($conn, $_POST['bike_model']); 

}else{
    $make = mysqli_real_escape_string($conn, $_POST['make']);
$model = mysqli_real_escape_string($conn, $_POST['model_1']); 

  
}

$cust_id = mysqli_real_escape_string($conn, $_SESSION['cust_num']);
// $regno = mysqli_real_escape_string($conn, $_POST['regno']);
$customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$locality = mysqli_real_escape_string($conn, $_POST['locality']);
$lat = mysqli_real_escape_string($conn, $_POST['lat']);
$lng = mysqli_real_escape_string($conn, $_POST['lng']);
// $make = mysqli_real_escape_string($conn, $_POST['make']);
// $model = mysqli_real_escape_string($conn, $_POST['model_1']);   
$regno1 = mysqli_real_escape_string($conn, $_POST['regno']);

$regno =  preg_replace('/[^A-Z,0-9]/', "", strtoupper($regno1));


// $date = mysqli_real_escape_string($conn, $_POST['date']);
$date = mysqli_real_escape_string($conn, $_POST['datepicker']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$coupon = mysqli_real_escape_string($conn, $_POST['coupon']);
$type = mysqli_real_escape_string($conn, $_POST['servicetype']);
$rideable = mysqli_real_escape_string($conn, $_POST['rideable']);
$teflon = mysqli_real_escape_string($conn, $_POST['teflon']);
$note = mysqli_real_escape_string($conn, $_POST['note']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$freecoupon = '';




$status = "Pending";
$paymentstatus = "Pending";

if (empty($_FILES['freecoupon']['name'])) {
// No file was selected for upload, your (re)action goes here
} else {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["freecoupon"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir . $orderid . "." . $imageFileType;
move_uploaded_file($_FILES["freecoupon"]["tmp_name"], $target_file);
$freecoupon = "http://protto.in/mumbai/custom/instamojo/" . $target_dir . $target_file;

}


// if($type == "ProDry"){
        
//     //SQL Query
//     $sql = "SELECT services.offer FROM services INNER JOIN bikes ON services.segment = bikes.segment WHERE bikes.model = '$model' AND services.type = 'ProDry'";
    
//     $result = mysqli_query($conn, $sql);
    
//     if (mysqli_num_rows($result) > 0) {
//         // output data of each row
//         while($row = mysqli_fetch_assoc($result)) {
//             $price =  $row["offer"];
//         }
//     } else {
//         // echo "";
//     }
    
// }
// else {
    
//     if($freecoupon == ''){
        
//         //SQL Query
//         $sql = "SELECT services.offer FROM services INNER JOIN bikes ON services.segment = bikes.segment WHERE bikes.model = '$model' AND services.type = 'ProWet'";
        
//         $result = mysqli_query($conn, $sql);
        
//         if (mysqli_num_rows($result) > 0) {
//             // output data of each row
//             while($row = mysqli_fetch_assoc($result)) {
//                 $price =  $row["offer"];
//             }
//         } else {
//             // echo "";
//         }
    
//     }
//     else {
        
//         //SQL Query
//         $sql = "SELECT services.offer FROM services INNER JOIN bikes ON services.segment = bikes.segment WHERE bikes.model = '$model' AND services.type = 'ProWetFree'";
        
//         $result = mysqli_query($conn, $sql);
        
//         if (mysqli_num_rows($result) > 0) {
//             // output data of each row
//             while($row = mysqli_fetch_assoc($result)) {
//                 $price =  $row["offer"];
//             }
//         } else {
           
//         }
//     }
    
// }




if($coupon == "PROTTO100" || $coupon == "SERVICE100"){

//SQL Query

$sql = "SELECT * FROM otcoupons WHERE emobile = '$email' OR emobile = '$phone'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
} else {



    $price = $price - 100;
    //echo $price . "<br />";
    
    //SQL Query
     $sql1 = "INSERT INTO otcoupons (`emobile`) VALUES ('$email')";
    
    $result1 = mysqli_query($conn, $sql1);
    
    //SQL Query
    $sql1 = "INSERT INTO otcoupons (`emobile`) VALUES ('$phone')";
    
    $result1 = mysqli_query($conn, $sql1);
    

   
}

}

if($coupon == "NI7LFQ"){

    $price = $price - 50;
    //echo $price . "<br />";

}

if($teflon == "Yes"){

    $price = $price + 499;

}



if($_POST['paynow']){
    // unset($_SESSION['orderid']);

// $type = $type . ' - ' . $_POST['paynow'];
$type = $type;

if($cust_id == null){
  
}else{

$query = "INSERT INTO bike_customer(`bike_id`, `cust_id`, `bike_reg`, `make`, `model`, `variant`, `puc_date`, `insurance_date`, `last_service_date`, `status`, `cr_date`) VALUES ('','$cust_id','$regno','$make','$model','','','',now(),1,now())";

$result_1 = mysqli_query($conn, $query);
}



//SQL Query
$sql = "INSERT INTO orders (`order_id`, `name`, `email`, `phone`, `address`, `locality`, `lat`, `lng`, `make`, `model`, `regno`, `date`,`time`, `price`, `type`, `teflon`, `note`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$address', '$locality', '$lat', '$lng', '$make', '$model', '$regno', '$date', '$time', '$price', '$type', '$teflon', '$note', '$freecoupon', '$coupon', '$paymentstatus', '$status')";

$result = mysqli_query($conn, $sql);


if($_POST['month_subscribtion']){

     $today = date("d/m/Y");


    if($_POST['month_subscribtion'] == 6){

    $end_date =  date('d/m/Y', strtotime('+6 months'));

}else if($_POST['month_subscribtion'] == 12){
   $end_date =  date('d/m/Y', strtotime('+12 months'));
}else if($_POST['month_subscribtion'] == 36){
 $end_date =  date('d/m/Y', strtotime('+36 months'));
}else if($_POST['month_subscribtion'] == 60){
    $end_date =  date('d/m/Y', strtotime('+60 months')); 
}
        

     $sql4 = "SELECT * FROM pro_clean where user_id = '$cust_id'";
  
        $result2 = mysqli_query($conn, $sql4);


        if (mysqli_num_rows($result2) > 0) {

         $sql2 = "UPDATE pro_clean SET credit_avail = credit_avail + '".$_POST['month_subscribtion']."' , credit_remain =credit_remain + '".$_POST['month_subscribtion']."', start_date ='$today',end_date=$end_date WHERE 1";
           
   
           $result = mysqli_query($conn, $sql2);
                  

        } else {
 $sql2 = " INSERT INTO pro_clean( user_id,credit_avail, credit_remain,  bike_model, bike_registeration, order_id,  start_date, end_date, up_date) VALUES ('$cust_id','".$_POST['month_subscribtion']."','".$_POST['month_subscribtion']."','$model','$regno','$orderid','$today','$end_date',now())";

          
$result = mysqli_query($conn, $sql2);

        }


}


if(trim($_POST['page_id']) == 'procleans'){

$sql1 = "INSERT INTO proclean_check( order_id, user_id, service_date, cr_date) VALUES ('$orderid','$cust_id','$date',now())";

$result = mysqli_query($conn, $sql1);

}else if(trim($_POST['page_id']) == 'prorepair'){   



 $sql1 = "INSERT INTO `pro_repair`( `user_id`, `bike_id`, `order_id`, `type`, `extra_detail`, `make`, `model`, `status`, `cr_date`) VALUES ('$cust_id','$regno','$orderid','','','$make', '$model','1',now())";

$result = mysqli_query($conn, $sql1);

}

mysqli_close($conn);

try {
    // unset($_SESSION['orderid']);
    $response = $api->paymentRequestCreate(array(
        "purpose" => $type,
        "amount" => $price,
        "buyer_name" => $name,
        "email" => $email,
        "phone" => $phone,
        // "redirect_url" => "https://protto.in/mumbai/custom/instamojo/response.php"
        "redirect_url" => "../../index.php"
        ));
    // print_r($response['longurl']);
    $longurl = $response['longurl'];
    header('Location: ' . $longurl);
}
catch (Exception $e) {
     header("Location: ../../index.php"); 
    // header('Location: https://protto.in/mumbai/booking-failed.html');
    // print('Error: ' . $e->getMessage());
}

}else if($_POST['provip']){

// print_r($_POST);
// die;
// if($_POST['service_type'] == 3){

// $prodry_wet = 
// $prowet = 

// }  




if($cust_id == null){
  
}else{

$query = "INSERT INTO bike_customer(`bike_id`, `cust_id`, `bike_reg`, `make`, `model`, `variant`, `puc_date`, `insurance_date`, `last_service_date`, `status`, `cr_date`) VALUES ('','$cust_id','$regno','$make','$model','','','',now(),1,now())";

$result_1 = mysqli_query($conn, $query);
}


if($_POST['plan'] == 3){

if(strlen($_POST['service_type']) > 4){
   $prodry_wet = 1; 
   $prowet = 2; 
}else{
        $prodry_wet = 0;
        $prowet = 3;
}

    $end_date =  date('d/m/Y', strtotime('+36 months'));

}else if($_POST['plan'] == 4){

if(strlen($_POST['service_type']) > 4){
   $prodry_wet = 2; 
   $prowet = 2; 
}else{
        $prodry_wet = 0;
        $prowet = 4;
}

   $end_date =  date('d/m/Y', strtotime('+48 months'));


}else if($_POST['plan'] == 5){

if(strlen($_POST['service_type']) > 4){
   $prodry_wet = 2; 
   $prowet = 3; 
}else{
        $prodry_wet = 0;
        $prowet = 5;
}

 $end_date =  date('d/m/Y', strtotime('+60 months'));
}else if($_POST['plan'] == 6){

    if(strlen($_POST['service_type']) > 4){
   $prodry_wet = 3; 
   $prowet = 3; 
}else{
        $prodry_wet = 0;
        $prowet = 6;
}
    $end_date =  date('d/m/Y', strtotime('+72 months')); 
}


$sql = "INSERT INTO `provip_member`( `user_id`, `bike_id`, `status`, `start_date`, `end_date`) VALUES ('$cust_id','$regno','1',now(),'$end_date')";

$result = mysqli_query($conn, $sql); 


$sql1 = "INSERT INTO `pro_vip`( `provip_number`, `bike_rto`, `km_perday`, `prodry_wet`, `prowet`, `user_id`,  `type`, `start_date`, `end_date`, `status`, `cr_date`) VALUES ('$orderid','$regno','".$_POST['km_runs']."','$prodry_wet','$prowet','$cust_id','".$_POST['servicetype']."',now(),'$end_date','1',now())";


$result2 = mysqli_query($conn, $sql1); 

header("Location: ../../provip_checkout.php"); 


}else if($_POST['Book_Now']){


$status = "Booked";
$paymentstatus = "paid";
// $type = $type . ' - ' . $_POST['Book_Now'];
$type = $type ;
        
if($cust_id == null){
  
}else{

$query = "INSERT INTO bike_customer(`bike_id`, `cust_id`, `bike_reg`, `make`, `model`, `variant`, `puc_date`, `insurance_date`, `last_service_date`, `status`, `cr_date`) VALUES ('','$cust_id','$regno','$make','$model','','','',now(),1,now())";

$result_1 = mysqli_query($conn, $query);
}
//SQL Query
$sql = "INSERT INTO orders (`order_id`, `name`, `email`, `phone`, `address`, `locality`, `lat`, `lng`, `make`, `model`, `regno`, `date`,`time`, `price`, `type`, `teflon`, `note`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$address', '$locality', '$lat', '$lng', '$make', '$model', '$regno', '$date', '$time', '$price', '$type', '$teflon', '$note', '$freecoupon', '$coupon', '$paymentstatus', '$status')";

$result = mysqli_query($conn, $sql);    

 $sql2 = "UPDATE pro_clean SET credit_avail = credit_avail - 1 , credit_remain = credit_remain - 1 WHERE 1";
           
   
$result1 = mysqli_query($conn, $sql2);

           header("Location: ../../index.php"); 
           


}else{


$status = "Booked";
$paymentstatus = "Pending";
// $type = $type . ' - ' . $_POST['paylater'];
$type = $type;


if($cust_id == null){
  
}else{

$query = "INSERT INTO bike_customer(`bike_id`, `cust_id`, `bike_reg`, `make`, `model`, `variant`, `puc_date`, `insurance_date`, `last_service_date`, `status`, `cr_date`) VALUES ('','$cust_id','$regno','$make','$model','','','',now(),1,now())";

$result_1 = mysqli_query($conn, $query);
}

//SQL Query
$sql = "INSERT INTO orders (`order_id`, `name`, `email`, `phone`, `address`, `locality`, `lat`, `lng`, `make`, `model`, `regno`, `date`,`time`, `price`, `type`, `teflon`, `note`, `freecoupon`, `coupon`, `paymentstatus`, `status`) VALUES ('$orderid', '$name', '$email', '$phone', '$address', '$locality', '$lat', '$lng', '$make', '$model', '$regno', '$date', '$time', '$price', '$type', '$teflon', '$note', '$freecoupon', '$coupon', '$paymentstatus', '$status')";

$result = mysqli_query($conn, $sql);    



if($_POST['month_subscribtion']){

     $today = date("d/m/Y");


    if($_POST['month_subscribtion'] == 6){

    $end_date =  date('d/m/Y', strtotime('+6 months'));

}else if($_POST['month_subscribtion'] == 12){
   $end_date =  date('d/m/Y', strtotime('+12 months'));
}else if($_POST['month_subscribtion'] == 36){
 $end_date =  date('d/m/Y', strtotime('+36 months'));
}else if($_POST['month_subscribtion'] == 60){
    $end_date =  date('d/m/Y', strtotime('+60 months')); 
}
        

     $sql4 = "SELECT * FROM pro_clean where user_id = '$cust_id'";
  
        $result2 = mysqli_query($conn, $sql4);


        if (mysqli_num_rows($result2) > 0) {

         $sql2 = "UPDATE pro_clean SET credit_avail = credit_avail + '".$_POST['month_subscribtion']."' , credit_remain =credit_remain + '".$_POST['month_subscribtion']."', start_date ='$today',end_date=$end_date WHERE 1";
           
   
           $result = mysqli_query($conn, $sql2);
                  

        } else {
 $sql2 = " INSERT INTO pro_clean( user_id,credit_avail, credit_remain,  bike_model, bike_registeration, order_id,  start_date, end_date, up_date) VALUES ('$cust_id','".$_POST['month_subscribtion']."','".$_POST['month_subscribtion']."','$model','$regno','$orderid','$today','$end_date',now())";

          
$result = mysqli_query($conn, $sql2);

        }


}



if($_POST['page_id'] == 'procleans'){


$sql1 = "INSERT INTO proclean_check(order_id,user_id, service_date, cr_date) VALUES ('$orderid','$cust_id','$date',now())";

$result = mysqli_query($conn, $sql1);


}



mysqli_close($conn);




   header("Location: ../../index.php"); 

// header("Location: https://protto.in/mumbai/booking-status.html?orderid=" . $orderid);
// header("Location: https://protto.in/mumbai/booking-status.html?orderid=" . $orderid);

}

}
else {

    
// unset($_SESSION['orderid']);
// header('Location: https://protto.in/mumbai/booking-failed.html');
   header("Location: ../../index.php"); 

}



?>