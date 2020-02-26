<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');

class Controller
{
    function __construct() {
        $this->processMobileVerification();
    }

function dbconnect(){
        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_protto";

    // Create connection
    return mysqli_connect($servername, $username, $password, $dbname);
    
}

    function processMobileVerification()
    {

        switch ($_POST["action"]) {
            case "send_otp":
                
                $mobile_number = $_POST['mobile_number'];

                if($mobile_number){ 

                    $conn = $this->dbconnect();    
                    $sql = "SELECT count(*) as present ,id as cust_id FROM customer WHERE mobile_number = '$mobile_number'";
                 
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['cust_num'] = $_POST['mobile_number'];

                    if($row['present'] == 0){

                        echo "<script> alert('please register first to login') </script>";
                      require_once ("loginregister.php");
                      exit();
                      // require_once ("register.php");
                    }else{

                    }
                         
                }else {   }
                        
                $apiKey = urlencode('YOUR_API_KEY');
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array(
                    $mobile_number
                );
                $sender = 'PHPPOT';
                // $otp = rand(1111, 9999);
                $otp = 0000;
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password is " . $otp;
                // echo $otp;
                // die;
                try{
                    // $response = $Textlocal->sendSms($numbers, $message, $sender);
                    require_once ("verification-form.php");
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }

            
                break;
                    

            case "verify_otp":

                $otp = $_POST['otp'];
                $mobile_number = $_SESSION['cust_num'];

                if (trim($otp) == 0000) {



                    $conn = $this->dbconnect();    
                    $sql = "SELECT count(*) as present ,id as cust_id FROM customer WHERE mobile_number = '$mobile_number'";
                 
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);



                    // print_r($row);
                    // die;

                    $_SESSION['cust_id'] = $row['cust_id'];


                    unset($_SESSION['session_otp']);    
                     // $_SESSION['session_otp'] =1;
                    $_SESSION['session_login'] = on;
                    // $_SESSION['cust_id'] = $row['cust_id'];



                    echo "<script> alert('Hello '); </script>";
                     require_once ("index.php");
                } else {
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                }
                break;


                case "send_otpregister":
                  $mobile_number = $_POST['mobile_number'];
             
         


                if($mobile_number){


                    $conn = $this->dbconnect();    
                    $sql = "SELECT count(*) as present FROM customer WHERE mobile = '$mobile_number'";
                 
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                 
                    if($row['present'] != 0){

                        echo "<script> alert('you are already register please try login with otp') </script>";
                      require_once ("register.php");
                      // require_once ("loginregister.php");
                          exit();   
                    }else{

                       
                    }
                         
                }else {  


                 }



                  $name = $_POST['name'];
                 $email = $_POST['email'];
                 $referal = $_POST['referal'];
           //         die;     
                $apiKey = urlencode('YOUR_API_KEY');
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array(
                    $mobile_number
                );
                $sender = 'PHPPOT';
                $otp = rand(1111, 9999);
                // $otp = 0000;
                $_SESSION['session_otp'] = $otp;
           echo      $message = '<script>"Your One Time Password is  ".$otp  </script>';
                
                try{

                
                      $conn = $this->dbconnect();    
                      $sql = "INSERT INTO `customer`(`id`, `name`, `email`, `mobile_number`, `verification_code`, `verified`, `referalcode`, `status`, `cr_date`) VALUES ('','$name','$email','$mobile_number','0000','','$referal','1',NOW())";
               
                    $result = mysqli_query($conn, $sql);

                      $_SESSION['cust_num'] = $_POST['mobile_number'];

                
                    // $response = $Textlocal->sendSms($numbers, $message, $sender);
                    require_once ("verification-form.php");
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }

            
                break;

        }
    }
}
$controller = new Controller();
?>