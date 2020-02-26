<?php 
error_reporting(0);
session_start();

	
if($_POST['verifybtn']){


if($_POST['verify'] == $_SESSION['session_otp']){


 $servername = "localhost";
    $username = "root";					
    $password = "";
    $dbname = "test_protto";

    // Create connection
  $conn =  mysqli_connect($servername, $username, $password, $dbname);  


			$otp = $_SESSION['session_otp'] ;
			$name = $_SESSION['name']; 
			$email = $_SESSION['email'];
			$mobile_number =  $_SESSION['mobile'];
			$referal =  $_SESSION['referal'];




if($_SESSION['check_login_form'] =='register'){
 $cid = $_SESSION['cust_num'];
$sql = " SELECT * FROM `customer` where cid = $cid " ;
$result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);


$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];
$_SESSION['mobile'] = $row['mobile'];

}else{

$sql = "INSERT INTO `customer`(`cid`, `name`, `email`, `mobile`,`referal`, `otp`, `lastorder_date`, `status`, `cr_date`) VALUES ('','$name','$email','$mobile_number','$referal','$otp',NOW(),'1',NOW())";

// $result = mysqli_query($conn, $sql);
// $_SESSION['cust_num'] = $conn->insert_id;


if (mysqli_query($conn, $sql)) {
    // $last_id = mysqli_insert_id($conn);
  $_SESSION['cust_num'] = mysqli_insert_id($conn);
    // echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





$url = 'https://api.elasticemail.com/v2/email/send';
try{
 $post = array('from' => 'clinton@vitruvio.ca',
'fromName' => 'Vitruvio',
'apikey' => 'eea43ade-05ce-4a35-b776-9e2aef80baef',
'subject' => 'Vitruvio Account Pending Activation',
'to' => $_SESSION['email'],
'isTransactional' => true,
'merge_name' => $_SESSION['name'],
'merge_type' => 'Customer',
'template' => '14252');
$ch = curl_init();
curl_setopt_array($ch, array(
 CURLOPT_URL => $url,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $post,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HEADER => false,
CURLOPT_SSL_VERIFYPEER => false
 ));
 $result=curl_exec ($ch);
 curl_close ($ch);
 echo $result;
}
catch(Exception $ex){
echo $ex->getMessage();
}



}


if($_SESSION['guest']){
  header("Location: my-booking.php"); 
					exit();
}else{
	 header("Location: index.php"); 
					exit();
}

}else{

	     echo "<script> alert('otp is wrong');
$('#regform').trigger('reset');
                         </script>";

                          header("Location: register.php"); 
                    
                          exit(); 
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
                    <form class="p-a30" action="" method="post">
                        <h3 class="form-title m-t0">OTP  <?php echo $_SESSION['session_otp'];?></h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter Otp . </p>
                        <div class="form-group">
                            <input name="verify" id="verify" required="" class="form-control" placeholder="mobile Otp " type="text" />
                        </div>
                  
						<div class="form-group text-left">
                            <input type="submit" class="site-button m-r5 dz-xs-flex" id="verifybtn" name="verifybtn"> <BR>
                            <div class="m-t20">
								<label class="m-b0">
										
									<label for="check1">  Protto Protto Protto   Protto  Protto Protto Protto   Protto </label>
								</label>
								
							</div>
						</div>
					
                    </form>
                      
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
