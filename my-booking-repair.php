<?php
error_reporting(0);
session_start();
// session_destroy();

include "dbconfig.php";

 $cust_id =  $_SESSION['cust_num'];


 $sql_2 = "SELECT * FROM `customer` WHERE `cid` = '$cust_id'";


$result =  mysqli_query($conn, $sql_2);

if (mysqli_num_rows($result) > 0) {



 }else {

    session_destroy();
  

 }


if(!$_SESSION['name']){

      header("Location: login.php"); 
}
// echo "jjj";
// print_r($_POST);
// print_r($_SESSION);

// $servername = "localhost";
// $username = "root"; 
// $password = "";
// $dbname = "test_protto";    

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// if($_POST['register']){
    

//     $cid =  $_SESSION['cust_num'];
//     $reg = $_POST['registeration'];


//   $sql ="INSERT INTO `clean_service`(`id`, `regno`, `cid`) VALUES ('','$reg','$cid')";

//   $res =  mysqli_query($conn, $sql);

// }

// die;

// print_r($_SESSION);


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js"></script>
    <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">
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

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
        
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    
</head>

<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header mo-left header-style-1">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dlab-topbar-left"> </div>
                          <div class="dlab-topbar-right">
                         <?php if($_SESSION['name']){  ?>
                        <ul>
                        
                            <li> Welcome  <?php echo $_SESSION['name']; ?></li>
                          </ul>  
 
<?php }else{ ?> 
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                        </ul>

<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="index.html"><img src="images/logo.png" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- extra nav -->
              <!--       <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-search"></i></button>
                        </div>
                    </div> -->
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav nav-style">
                            <li class="active"> <a href="index.php">Home<i class="fa fa-chevron-down"></i></a>
                              <ul class="sub-menu">
                                   <!--  <li><a href="index.html">Home Car Service</a></li>
                                    <li><a href="index-2.html">Car Washing</a></li>
                                    <li><a href="index-3.html">Car Denting Penting</a></li>
                                    <li><a href="index-4.html">Auto Car Service</a></li>
                                    <li><a href="index-5.html">Car Maintenance</a></li>
                                    <li><a href="index-6.html">Swiper Home <span class="new-tag">New</span></a></li>
                                    <li><a href="index-7.html">Onepage 1 <span class="new-tag">New</span></a></li>
                                    <li><a href="index-8.html">Onepage 2 <span class="new-tag">New</span></a></li> -->
                                </ul>
                            </li>   
                            <li> <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="javascript:;">Header <i class="fa fa-angle-right"></i></a>
                                       <!--  <ul class="sub-menu">
                                            <li><a href="header-style-1.html">Header 1</a></li>
                                            <li><a href="header-style-2.html">Header 2</a></li>
                                            <li><a href="header-style-3.html">Header 3</a></li>
                                            <li><a href="header-style-4.html">Header 4</a></li>
                                            <li><a href="header-style-5.html">Header 5</a></li>
                                            <li><a href="header-style-6.html">Header 6</a></li>
                                            <li><a href="header-style-7.html">Header 7</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Footer <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                            <li><a href="footer-white.html">Footer White</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-mega-menu "> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">Pages</a>
                                      <!--   <ul>
                                            <li><a href="about-1.html">About us 1</a></li>
                                            <li><a href="about-2.html">About us 2</a></li>
                                            <li><a href="faq-1.html">FAQ 1</a></li>
                                            <li><a href="faq-2.html">FAQ 2</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                            <li><a href="testimonials.html">testimonials</a></li>
                                            <li><a href="career.html">Career</a></li>
                                            <li><a href="who-we-are.html">Who we are</a></li>
                                            <li><a href="project.html">Project</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                       <!--  <ul>
                                            <li><a href="all-service.html">All Service </a></li>
                                            <li><a href="engine-diagnostics.html">Engine Diagnostics</a>  </li>
                                            <li><a href="lube-oil-and-filters.html">Lube Oil And Filters</a>  </li>
                                            <li><a href="belts-and-hoses.html">Belts And Hoses</a>  </li>
                                            <li><a href="air-conditioning.html">Air Conditioning</a> </li>
                                            <li><a href="brake-repair.html">Brake Repair</a> </li>
                                            <li><a href="tire-and-wheel-services.html">Tire And Wheel Services</a> </li>
                                            <li><a href="service-car-cleaning.html">Car Cleaning</a></li>
                                            <li><a href="service-car-services.html">Car Services</a></li>
                                            <li><a href="service-car-wrapping.html">Car Wrapping</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                      <!--   <ul>
                                            <li><a href="service-dent-paint.html">Car Dent Paint</a></li>
                                            <li><a href="services-1.html">Services 1 </a></li>
                                            <li><a href="services-2.html">Services 2</a></li>
                                            <li><a href="services-3.html">Services 3</a></li>
                                            <li><a href="portfolio-1.html">Portfolio 1</a></li>
                                            <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                            <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="full-page-gallery-dark.html">Gallery Full Page Style 1</a></li>
                                            <li><a href="full-page-gallery-light.html">Gallery Full Page Style 2</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                     
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Shop<i class="fa fa-chevron-down"></i></a>
                        
                            </li>
                            <li> <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
                   
                            </li>
                            <li class="has-mega-menu "> <a href="javascript:;">Shortcodes<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">Shortcodes</a>
                                        <ul>
                                            <li><a href="shortcode-buttons.html">Buttons </a></li>
                                            <li><a href="shortcode-icon-box-styles.html">Icon box styles</a></li>
                                            <li><a href="shortcode-pricing-table.html">Pricing table</a></li>
                                            <li><a href="shortcode-toggles.html">Toggles</a></li>
                                            <li><a href="shortcode-team.html">Team </a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Shortcodes</a>
                                        <ul>
                                            <li><a href="shortcode-carousel-sliders.html">Carousel sliders</a></li>
                                            <li><a href="shortcode-image-box-content.html">Image box content</a></li>
                                            <li><a href="shortcode-tabs.html">Tabs</a></li>
                                            <li><a href="shortcode-counters.html">Counters</a></li>
                                            <li><a href="shortcode-magnific-popup.html">Magnific Gallery <span class="new-tag">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Shortcodes</a>
                                        <ul>
                                            <li><a href="shortcode-accordians.html">Accordians</a></li>
                                            <li><a href="shortcode-dividers.html">Dividers</a></li>
                                            <li><a href="shortcode-images-effects.html">Images effects</a></li>
                                            <li><a href="shortcode-testimonials.html">Testimonials </a></li>
                                            <li><a href="shortcode-light-box.html">Light Gallery <span class="new-tag">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Shortcodes</a>
                                        <ul>
                                            <li><a href="shortcode-alert-box.html">Alert box</a></li>
                                            <li><a href="shortcode-icon-box.html">Icon-box</a></li>
                                            <li><a href="shortcode-list-group.html">List group</a></li>
                                            <li><a href="shortcode-title-separators.html">title-separators</a></li>
                                            <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Contact us <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">Contact us 1</a></li>
                                    <li><a href="contact-2.html">Contact us 2</a></li>
                                    <li><a href="contact-3.html">Contact us 3</a></li>
                                    <li><a href="contact-4.html">Contact us 4</a></li>
                                </ul>
                            </li>
                                 <li  style="padding-top: 12px; padding-bottom: 32px;">
                                    <?php if($_SESSION['name']){  ?>
                                         <a href="logout.php"> <button class="site-button s-r15" type="button"> Logout</button></a>

                                  <?php   }else{ ?>

                                    <a href="login.php"> <button class="site-button s-r15" type="button">Login</button></a>
                              
                           <?php } ?>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>

   

<?php 
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "test_protto";    

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if($_SESSION['name']){
$name = $_SESSION['name'];
$mobile = $_SESSION['mobile'];

 $cust_id = $_SESSION['cust_num'];

}else{

 $name = $_SESSION['guest']['name'];
 $mobile = $_SESSION['guest']['mobile'];
 $make = $_SESSION['guest']['make'];
 $model = $_SESSION['guest']['model'];
 $cust_id = $_SESSION['cust_num'];
}

$sql_1 = "INSERT INTO `temp_lead`(`id`, `name`, `mobile`, `make`, `model`) VALUES ('','$name','$mobile','$make','$model')";

$result_insert =  mysqli_query($conn, $sql_1);
  $sql_2 = "SELECT * FROM `bike_customer` WHERE `cust_id` = '$cust_id'";


$result_bike =  mysqli_query($conn, $sql_2);
// $row_1 = mysqli_fetch_array($result_bike);   

$sql = "SELECT DISTINCT make FROM bikes WHERE 1";


$result =  mysqli_query($conn, $sql);

$makeitems = "<option selected disabled>Select your Brand</option>";

$modelitems = "<option selected disabled>Select your Model</option>";

// foreach($row as $r){

      while($r = mysqli_fetch_assoc($result)) {
    
$makeitems =  $makeitems . "<option value='" . $r['make'] ."'>" . $r['make'] ."</option>";

} ?>

<?php if (mysqli_num_rows($result) > 0) { ?>

<div style="padding-top: 10px;" class='abc'>

<?php  while($rb = mysqli_fetch_assoc($result_bike)) { ?> 

<input type="radio" name="bike" value="<?php echo $rb['make'].'//'.$rb['model'].'//'.$cust_id; ?>"> <?php echo $rb['make'].'-('.$rb['model'].')' ; ?><br>

<?php } ?>
<input type="radio" name="bike"  value="other"> Add bike <br/>
</div>
<?php } ?>


<!-- 

  <div class="section-full bg-   content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="dex-box text-primary border-2 counter-box m-b30">
                                <h1 class="text-uppercase m-a0 p-a15 "><i class="ti-home m-r20"></i>
                                 <center><strike class="">299</strike>
                                 <span class="">249</span>
                             </center>
                             </h1>
                                <h5 class="dlab-tilte  text-uppercase m-a0"> <a href="#registeration" ><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Select</span></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


<?php
echo "<form class='form-horizontal' method='post' action='custom/instamojo/pay.php' enctype='multipart/form-data' onsubmit='disablebtn()' id='booking_form'><fieldset>";

echo "<input id='lat' name='lat' type='hidden' /><input id='lng' name='lng' type='hidden' />";
echo "<input id='customer' name='customer_id' type='hidden' value='".$cust_id."' />";

echo "<input id='page_id' name='page_id' type='hidden' value='prorepair' />";
echo "<div style='padding-top:10px;' class='form-group modellist'><label class='col-md-4 control-label' for='make'>Brand</label><div class='col-md-5'>";

echo "<select id='make' name='make' class='form-control '>" . $makeitems . "</select>"; 

echo "</div></div>";

echo "<div class='form-group modellist_1' id='modellist'><label class='col-md-4 control-label' for='model'>Model</label><div class='col-md-5'>";

echo "<select id='model_1' name='model_1' class='form-control'>" . $modelitems . "</select>"; 

echo "</div>
</div>";

echo "<div class='form-group'>";  

// echo "<div class='col-md-12' id='plans'></br><span><h4><strong>Select your Plan to Proceed</strong></h4></span></br>";

echo "<div class='p-a30 bg-white m-b30'>
                    <div class='section-head'>
                        <h2 class='text-uppercase'>Select your Plan to Proceed</h2>
                    </div>
                    <div class='section-content'>
                        <div class='pricingtable-row m-b30'>
                            <div class='row'>
                                   <div class='col-sm-12 col-md-3 col-lg-3'>
                                   </div>
                                <div class='col-sm-12 col-md-6 col-lg-6'>
                                    <div class='pricingtable-wrapper'>
                                        <div class='pricingtable-inner pricingtable-highlight'>
                                            <div class='pricingtable-price'>
                                            <b><strike id='strike_one'>350 </strike></b>
                                             <span class='pricingtable-bx' id='prowetprice'></span> <span class='pricingtable-type'>Rs</span> </div>
                                            <div class='pricingtable-title'>
                                                <h2>Pro Repair</h2>
                                            </div>
                                            <ul class='pricingtable-features'>
                                                <li><i class='fa fa-check'></i> Full Responsive </li>
                                                <li><i class='fa fa-check'></i> Multi color theme</li>
                                                <li><i class='fa fa-check'></i> With Bootstrap</li>
                                                <li><i class='fa fa-check'></i> Easy to customize</li>
                                                <li><i class='fa fa-check'></i> Many Sortcodes</li>
                                            </ul>
                                            <div class='pricingtable-footer'> <a href='#couponsection' class='site-button' id='selectprowet1'>Add to Cart</a> </div>
                                        </div>
                                    </div>
                                </div>

                                   <div class='col-sm-12 col-md-3 col-lg-3'>
                                   </div>
                               
                            </div>
                        </div>
                    </div>
                </div>";



echo "</div>";

echo "<div id='couponsection'>";

echo "<div class='form-group'><label class='col-md-4 control-label' for='name'>Name</label><div class='col-md-5'><input id='name' name='name' type='text' placeholder='".$name."' value='".$name."' readonly class='form-control input-md' required=''></div></div>";

echo "<div class='form-group'>  
<label class='col-md-4 control-label' for='email'>Email</label> 
<div class='col-md-5'>
<input id='email' name='email' type='email' placeholder='Enter your email' value='".$_SESSION['email']."' class='form-control input-md' required=''>
</div>
</div>";

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='phone'>Phone</label> 
<div class='col-md-5'>
<input id='phone' value='".$mobile."' name='phone' type='text' placeholder=".$mobile."'  readonly class='form-control input-md' required=''>
</div>
</div>";

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='address'>Pick-up Address</label> 
<div class='col-md-5'>
<textarea class='form-control' id='address' name='address' placeholder='Enter your address' required='' ></textarea>
</div>
</div>";

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='locality'>Locality</label> 
<div class='col-md-5'>
<select id='locality' name='locality' class='form-control'>
<option value='Andheri East'>Andheri East</option>
<option value='Andheri West'>Andheri West</option>
<option value='Bandra East'>Bandra East</option>
<option value='Bandra West'>Bandra West</option>
<option value='Borivali East'>Borivali East</option>
<option value='Borivali West'>Borivali West</option>
<option value='Chandivali'>Chandivali</option>
<option value='Goregaon East'>Goregaon East</option>
<option value='Goregaon West'>Goregaon West</option>
<option value='Jogeshwari East'>Jogeshwari East</option>
<option value='Jogeshwari West'>Jogeshwari West</option>
<option value='Kandivali East'>Kandivali East</option>
<option value='Khar East'>Khar East</option>
<option value='Khar West'>Khar West</option>
<option value='Kandivali West'>Kandivali West</option>
<option value='Malad East'>Malad East</option>
<option value='Malad West'>Malad West</option>
<option value='Nahar'>Nahar</option>
<option value='Marol'>Marol</option>
<option value='Powai'>Powai</option>
<option value='Saki Vihar'>Saki Vihar</option>
<option value='Santacruz East'>Santacruz East</option>
<option value='Santacruz West'>Santacruz West</option>
<option value='Vile Parle East'>Vile Parle East</option>
<option value='Vile Parle West'>Vile Parle West</option>
</select>
</div>
</div>";

$hour = intval(date("H"));

if ($hour < 15) {

$tomorrow = date("Y-m-d", strtotime("+0 day"));
}

else {

$tomorrow = date("Y-m-d", strtotime("+1 day"));
}

$threedays = date("Y-m-d", strtotime("+15 day"));

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='date'>Booking Date</label> 
<div class='col-md-5'>
<!-- <input id='date' name='date' type='date' value='$tomorrow' min='$tomorrow' max='$threedays'  placeholder='Enter the pickup date' class='form-control input-md' required=''> -->


<input type='text' id='datepicker' placeholder='DD/MM/YYYY' class='form-control input-md' required='' > 

</div>
</div>";


echo "<div class='form-group'>
<label class='col-md-4 control-label' for='time'>Time</label> 
<div class='col-md-5'>
<select id='time' name='time' class='form-control'>
<option value='9am - 11am'>9 AM - 11 AM</option>
<option value='11am - 1pm'>11 AM - 1 PM</option>
<option value='1pm - 3pm'>1 PM - 3 PM</option>
<option value='3pm - 5pm'>3 PM - 5 PM</option>
</select>
</div>
</div>";

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='regno'>Registration No. (optional)</label> 
<div class='col-md-5'>
<input id='regno' name='regno' type='text' placeholder='MH02BR3545' class='form-control input-md' required='' >
</div>
</div>"; 

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='rideable'>Is your bike rideable?<br /><small><strong>Note:</strong> One-way Pick-up Truck <a href='/mumbai/pricing.html'>charges</a> maybe charged extra.</small></label> 
<div class='col-md-5'>


<label class='radio-inline' for='radios-0'>
<input id='radios-0' type='radio' name='rideable' value='Yes' checked='checked'> Yes
</label>
<label class='radio-inline' for='radios-1'>
<input id='radios-1' type='radio' name='rideable' value='No'>
No
</label>
</div>
</div>";

echo "<div class='form-group'>
<label class='col-md-4 control-label' for='note'>Special Request</label>
<div class='col-md-5'>
<textarea class='form-control' id='note' name='note' placeholder='Any special requests for us?' ></textarea>
</div>
</div>";



echo "<input type='hidden' id='pricevalue' name='price' value='' />";
echo "<input type='hidden' id='bike_make' name='bike_make' value='' />";
echo "<input type='hidden' id='bike_model' name='bike_model' value='' />";
echo "<input type='hidden' id='bike_count' name='bike_count' value='' />";

    

// echo "<div class='form-group'>
// <label class='col-md-4 control-label' for='coupon'>Coupon Code<br /><small>Use code <strong>PROTTO100</strong> to get ₹100 on your first booking</small></label> 
// <div class='col-md-5'>
// <input id='coupon' name='coupon' type='text' placeholder='PRO123' class='form-control input-md' style='width: 65%; display: inline-block;' ><button class='btn' type='button' id='applycoupon'>Apply</button>
// </div>
// </div>";

echo "<div id='prodry'>";

echo "<table cellpadding='10' width='100%' style='text-align: right; line-height: 36px; font-size: 18px;'><tr><td width='60%'></td><td width='20%'>Current Price</td><td width='20%' class='displaycprice'></td></tr><tr class='focouponrow' style='color: #50c878;'><td></td><td>Coupon Discount</td><td class='displayfocouponprice'></td></tr><tr class='teflonrow'><td></td><td>Teflon Coating</td><td>499</td></tr><tr style='font-weight: bold;'><td></td><td style='border-top: 1px solid;'>Final Price</td><td style='border-top: 1px solid;' class='finalprice'></td></tr></table>";

echo "<input id='servicetype' name='servicetype' type='hidden' value='prorepair' >";

echo "<br /><span id='payblock1' style='display: none; float: right;'><strong>We are processing your request. Please do not reload.</strong></span><input name='paynow' id='paynowbtn1' style='float: right; margin-left: 50px;' type='submit' class='btn' value='Pay Now' />";

echo "</div>";

echo "<div id='prowet'>";

/* echo "<div class='form-group'>
<label class='col-md-4 control-label' for='coupon'>Free Service Coupon (Optional)</label> 
<div class='col-md-5'>
<input id='freecoupon' name='freecoupon' type='file' class='form-control input-md' ><button class='btn' type='button' id='removecoupon'>Remove</button>
<span class='help-block'>If the Free Service Coupon is not valid you may be asked to make the full payment for ProWet Service.</span>
</div>
</div>"; */

echo "<table cellpadding='10' width='100%' style='text-align: right; line-height: 36px; font-size: 18px; margin-top:50px;'><tr><td width='60%'></td><td width='20%'>Current Price</td><td width='20%' class='displaycprice'></td></tr><tr class='fscouponrow' style='color: #50c878;'><td></td><td>Free Service Coupon</td><td class='displayfscouponprice'></td></tr><tr class='focouponrow' style='color: #50c878;'><td></td><td>Coupon Discount</td><td class='displayfocouponprice'></td></tr><tr class='teflonrow'><td></td><td>Teflon Coating</td><td>499</td></tr><tr style='font-weight: bold;'><td></td><td style='border-top: 1px solid;'>Final Price</td><td style='border-top: 1px solid;' class='finalprice'></td></tr></table>";

echo "<br /><span id='payblock2' style='display: none; float: right;'><strong>We are processing your request. Please do not reload.</strong></span><input id='paynowbtn2' name='paynow' style='float: right; margin-left: 50px;' type='submit' class='btn' value='Pay Now' />";

echo "</div>";

echo "</div>";

echo "</fieldset> </form>";

?>

<!-- 
<div id='registeration'>

    <label>registeration no  </label>
<span class="col">
    <form  action="" method="post" >
                                <input style="width:33%;" name="registeration" required="" placeholder="registeration no " class='form-control input-md' type="text">
                            </span>
                            <input type="submit" name="register" value="register" class="btn"  />
        </form>
 </ div>  -->  




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

<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script>

 var datepicker = new ej.calendars.DatePicker({format:'dd/MM/yyyy', width: "255px" });
        datepicker.appendTo('#datepicker');

$(document).ready(function(){

var make = "<?php echo $_SESSION['guest']['make'] ?>";
var model = "<?php echo $_SESSION['guest']['model'] ?>";

 $('#make').val(make);


$.post('custom/getmodels.php',
    {
        make: make
    },
    function(data, status){


        $('#model_1').html(data);
        var select = $('#model_1');
        $('#model_1').val(model);
        $(select).selectpicker('refresh');
        // $('#modellist').show();
    });



$.post('custom/getfinalprice.php',  
    {
        model: model
    },
    function(data, status){
       var obj = JSON.parse(data);
       // $('#placewetfree').prop('value',obj[0].prowetfreeprice);
       // $('#prodryprice').html(obj[0].prodryoffer);
       // prodryprice = obj[0].prodryoffer;
       // prodrypass = obj[0].prodrypass;
       // $('#prowetprice').html(obj[0].prowetoffer);
       // prowetprice = obj[0].prowetoffer;
       // prowetpass = obj[0].prowetpass;
       //  $('#plans').show();
       // $('#placewetfree').html(obj[0].prowetfreeoffer);
       // prowetfreeprice = obj[0].prowetfreeoffer;

  });



}); 

document.getElementById('phone').oninvalid = function(event) {
event.target.setCustomValidity('Mobile number should only contain 10 digits');
}

var $ = jQuery.noConflict();


getLocation();

function getLocation() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} else { 
// x.innerHTML = "Geolocation is not supported by this browser.";
}
}

function showPosition(position) {
$('#lat').prop('value', position.coords.latitude);
$('#lng').prop('value',position.coords.longitude);
}

$('#plans').hide();

$('#couponsection').hide();

$('#prowet').hide();

$('#prodry').hide();

// var prowetprice = '';
var prowetprice = '';

var prowetpass = '';

var prowetfreeprice = '';

var prodryprice = '';

var prodrypass = '';

var finalprice = '';

var freeservice = 0;

var couponprice = 0;

var passprice = 0;

var teflonprice = 0;

var totalprice = '';

$('.fscouponrow').hide();

$('.focouponrow').hide();

$('.teflonrow').hide();




    $('#prowetprice').html(249);
       prowetfreeprice = 249;
       prowetprice = 249;



// $('#modellist').hide();

$('#make').on('change', function() {

var make = this.value;

$.post('custom/getmodels.php',
    {
        make: make
    },
    function(data, status){

        $('#model_1').html(data);
        var select = $('#model_1');
        $(select).selectpicker('refresh');

        // $('#modellist').show();
    });

});

$('#model_1').on('change', function() {

var model = this.value;


$.post('custom/getfinalprice.php',
    {
        model: model
    },
    function(data, status){
       var obj = JSON.parse(data);
       // $('#placewetfree').prop('value',obj[0].prowetfreeprice);
       // $('#prodryprice').html(obj[0].prodryoffer);
       // prodryprice = obj[0].prodryoffer;
       // prodrypass = obj[0].prodrypass;
       // $('#prowetprice').html(obj[0].prowetoffer);
       // prowetprice = obj[0].prowetoffer;
       // prowetpass = obj[0].prowetpass;
       //  $('#plans').show();
       // $('#placewetfree').html(obj[0].prowetfreeoffer);
       // prowetfreeprice = obj[0].prowetfreeoffer;
  });

});

$('#selectprowet').on('click', function() {

$('.finalprice').html(prowetprice);

$('#couponsection').show();

$('#prowet').show();

$('#prodry').hide();

$('#name').focus();

if(freeservice == 0){

finalprice = prowetprice;

} else {

finalprice = prowetfreeprice;

}

$('.displaycprice').html(prowetprice);

$('.finalprice').html(finalprice-couponprice);

// $('.finalprice').html(finalprice + ' - ' + couponprice + ' = ' + (finalprice-couponprice));

$('#pricevalue').prop('value',finalprice);

// $('#servicetype').prop('value','ProWet');

});

$('#selectprowet1').on('click', function() {

   
$('.finalprice').html(prowetprice);

$('#couponsection').show();

$('#prowet').show();

$('#prodry').hide();

$('#name').focus();

if(freeservice == 0){

finalprice = prowetprice;

} else {

finalprice = prowetfreeprice;

}

$('.displaycprice').html(prowetprice);

$('.finalprice').html(finalprice-couponprice);

// $('.finalprice').html(finalprice + ' - ' + couponprice + ' = ' + (finalprice-couponprice));

$('#pricevalue').prop('value',finalprice);

// $('#servicetype').prop('value','ProWet');

});

$('#selectprodry').on('click', function() { 

$('.finalprice').html(prodryprice);

$('#couponsection').show();

$('#prodry').show();

$('#prowet').hide();

$('#name').focus();

finalprice = prodryprice;

$('.displaycprice').html(finalprice);

$('.finalprice').html(finalprice-couponprice);

$('#pricevalue').prop('value',finalprice);

// $('#servicetype').prop('value','ProDry');

});

$('#selectprodry1').on('click', function() { 

$('.finalprice').html(prodryprice);

$('#couponsection').show();

$('#prodry').show();

$('#prowet').hide();

$('#name').focus();

finalprice = prodryprice;

$('.displaycprice').html(finalprice);

$('.finalprice').html(finalprice-couponprice);

$('#pricevalue').prop('value',finalprice);

// $('#servicetype').prop('value','ProDry');
});


// $('#applycoupon').on('click', function() { 

// var coupon = $('#coupon').val();

// var email = $('#email').val();

// var phone = $('#phone').val();

// if(coupon == '' || email == '' || phone == ''){

// alert('Please enter email, mobile and coupon code');

// } else {

// $.post('custom/checkcouponstatus.php',
//     {
//         coupon: coupon,
//         email: email,
//         phone: phone
//     },
//     function(data, status){

//        if(data == 'Coupon code accepted'){
//              couponprice = 100;
//              $('.focouponrow').show();
//              $('#applycoupon').hide();
//              $('#coupon').prop('readonly', true);
//              $('.displayfocouponprice').html(couponprice+teflonprice );
//              $('.finalprice').html(finalprice-couponprice+teflonprice );
//    }
// else if(data == 'Promo code accepted'){
// couponprice = 50;
// $('.focouponrow').show();
// $('#applycoupon').hide();
// $('#coupon').prop('readonly', true);
// $('.displayfocouponprice').html(couponprice+teflonprice );
// $('.finalprice').html(finalprice-couponprice+teflonprice );
// }else if(data == 'login.php'){
//      var answer = confirm(' you have to login first to apply coupon want to do this?');
//         if (!answer) {
//             e.preventDefault();
//         }

//     window.location.replace("login.php?log=a");


// }
//        else {
//              couponprice = 0;
//              $('.focouponrow').hide();
//              $('.finalprice').html(finalprice-couponprice+teflonprice );
//      }
//   });

// }

// });

$('#applypass').on('click', function() { 

var pass = $('#pass').val();

var email = $('#email').val();

var phone = $('#phone').val();

var regno = $('#regno').val();

if(pass == '' || email == '' || phone == '' || regno == ''){

alert('Please enter email, mobile, registration number and pass number');

} else {

$.post('custom/checkpassstatus.php',
    {
        coupon: coupon,
        email: email,
        phone: phone,
        regno: regno
    },
    function(data, status){
        alert(data);
       if(data == 'ProVIP Pass accepted'){
             passprice = 100;
             $('#applypass').hide();
             $('#pass').prop('readonly', true);
             if($('#servicetype').val() == 'ProDry'){
                    $('.finalprice').html(prodrypass-couponprice+teflonprice );
             } else {
                    $('.finalprice').html(prowetpass-couponprice+teflonprice );
             }
     }
       else {
             $('.finalprice').html(finalprice-couponprice+teflonprice );
       }
  });

}

});

$('input:radio[name="teflon"]').change(function(){
if($(this).val() == 'Yes'){
$('.teflonrow').show();
teflonprice = 499;
             if($('#servicetype').val() == 'ProDry'){
                    $('.finalprice').html(prodryprice-couponprice+teflonprice );
             } else {
                    $('.finalprice').html(prowetprice-couponprice+teflonprice );
             }
} else {
$('.teflonrow').hide();
teflonprice = 0;
             if($('#servicetype').val() == 'ProDry'){
                    $('.finalprice').html(prodryprice-couponprice+teflonprice );
             } else {
                    $('.finalprice').html(prowetprice-couponprice+teflonprice );
             }
}
});

$('#freecoupon').change(function () {
             $('.fscouponrow').show();
             $('.displayfscouponprice').html(prowetprice-prowetfreeprice);
             $('.finalprice').html(prowetfreeprice-couponprice+teflonprice);
             freeservice = 1;
});

$('#removecoupon').on('click', function(){
           $('#freecoupon').val(null);
             $('.fscouponrow').hide();
             $('.finalprice').html(prowetprice-couponprice);
             freeservice = 0;
});

function disablebtn(){

$('#paynowbtn1').hide();

$('#paynowbtn2').hide();

$('#paylaterbtn1').hide();

$('#paylaterbtn2').hide();

$('#payblock1').show();

$('#payblock2').show();

}


 $('input[type=radio][name=bike]').change(function() {

var str_1 = this.value;



if(str_1=='other'){
    location.reload();
}

 var res = str_1.split("//");


$('#bike_make').val(res[0]);
$('#bike_model').val(res[1]);

// $("div.modellist_1 select").val(res[1]);

$('.modellist').hide();
$('.modellist_1').hide();

$.post('custom/getregisteration.php',
    {
        model_1: str_1
    },
    function(data, status){


       var obj = JSON.parse(data);
    
       // $('#placewetfree').prop('value',obj[0].prowetfreeprice);
       // $('#prodryprice').html(obj[0].prodryoffer);
       // prodryprice = obj[0].prodryoffer;
       // prodrypass = obj[0].prodrypass;
       // $('#prowetprice').html(obj[0].prowetoffer);
       // prowetprice = obj[0].prowetoffer;
       // prowetpass = obj[0].prowetpass;
       //  $('#plans').show();
       // $('#placewetfree').html(obj[0].prowetfreeoffer);
       $('#regno').val(obj[0].bike_reg);
       $('#regno').attr('readonly', true);

       
  });



});



</script>


<style>

    input[type="radio"]{
    -webkit-appearance: radio;
    opacity: 1;
}

.tbcenter{

text-align: center;

}

.fa-check{

font-size: 3em;

color: green;

}
.fa-times{
font-size: 3em;
color: red;
}

</style> 




