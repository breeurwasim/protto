<?php
error_reporting(0); 
session_start();

  $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test_protto";

    // Create connection
  $conn =  mysqli_connect($servername, $username, $password, $dbname); 



if($_SESSION['name']){
     header("Location: index.php"); 
                    exit();
}

if($_POST['sendotp']){
   $mobile_number = $_POST['mobile'];

                if($mobile_number){ 
                     
                $sql = "SELECT count(*) as present ,cid as cust_id FROM customer WHERE mobile = '$mobile_number'";
        
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
// print_R($row);
// die;


                    $_SESSION['cust_num'] = $row['cust_id'];

                     // echo "hee";

  

                    if($row['present'] == '0'){


                          $message = 'please register first to login.';

                          echo "<SCRIPT type='text/javascript'> 
                          alert('$message');
                          window.location.replace('login.php');
                          </SCRIPT>";

                 
                      exit();
                      // require_once ("register.php");
                    }else{

                    }
                         
                }else { 

                  }
                  
        
                $sender = 'PHPPOT';
                 $otp = rand(1111, 9999);
               
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password is " . $otp;
           
                try{
                         $_SESSION['check_login_form'] = 'register';
                      header("Location: verification-form.php"); 
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }
  


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
	<meta property="og:title" content="Auto Care - Car Services Template" />
	<meta property="og:description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
	<meta property="og:image" content="http://autocare.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Auto Care - Car Services Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

		
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">

</head>
<body id="bg" class="full-boxed">
<div id="loading-area"></div>
<div class="page-wrapers">
    <!-- Content -->
    <div class="page-content dlab-login bg-secondry">
		<div class="top-head text-center logo-header">
			<a href="index.php">
				<img src="images/logo.png" alt=""/>
			</a>
		</div>
        <div class="login-form">
			<div class="tab-content nav">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a30 "  action="" method="post">
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your Mobile number. </p>
                        <div class="form-group">
                            <input name="mobile" id="mobile" required="" class="form-control" placeholder="Mobile" type="text" onkeypress="return validInput(event);"/>
                        </div>
                   <input type="hidden" class="" name="login_form_val" value="login_form_val" >
						<div class="form-group text-left">
                            <input type="submit" class="site-button m-r5 dz-xs-flex" name="sendotp" > <BR>
                            <div class="m-t20">
								<label class="m-b0">
									
									<label for="check1">  Protto Protto Protto   Protto  Protto Protto Protto   Protto </label>
								</label>
								
							</div>
						</div>
					
                    </form>
                        <div class="bg-primary p-a15 bottom">
    						<a  href="register.php" id="caa" class="text-white">Create an account</a>
    					</div>
                    </div>
              
                
        
            </div>
        </div>
		<div class="bottom-footer text-center text-white">
			<p>2020 © DexignLab - HTML Template. </p>
		</div>
	</div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<!-- <script src="js/dz.ajax.js"></script> -->
<!-- CONTACT JS  -->
<script src="verification.js"></script><!-- CONTACT JS  -->


</body>
</html>
