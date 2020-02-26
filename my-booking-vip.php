<?php
error_reporting(0);
session_start();

if(!$_SESSION['name']){

      header("Location: login.php"); 
}
// echo "jjj";
// print_r($_POST);
// print_r($_SESSION);

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



 $cust_id =  $_SESSION['cust_num'];


 $sql_2 = "SELECT * FROM `customer` WHERE `cid` = '$cust_id'";


$result =  mysqli_query($conn, $sql_2);

if (mysqli_num_rows($result) > 0) {



 }else {

    session_destroy();
  

 }


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

<style>

    .donate-now {
  list-style-type: none;
  margin: 25px 0 0 0;
  padding: 0;
}

.donate-now li {
  float: left;
  margin: 0 5px 0 0;
  width: 100px;
  height: 40px;
  position: relative;
}

.donate-now label,
.donate-now input {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.donate-now input[type="radio"] {
  opacity: 0.01;
  z-index: 100;
}

.donate-now input[type="radio"]:checked+label,
.Checked+label {
  background: yellow;
}

.donate-now label {
  padding: 5px;
  border: 1px solid #CCC;
  cursor: pointer;
  z-index: 90;
}

.donate-now label:hover {
  background: #DDD;
}
</style>

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
                                  
                                </ul>
                            </li>   
                            <li> <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="javascript:;">Header <i class="fa fa-angle-right"></i></a>
                                     
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
                                 
                                      
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                    
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                     
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

<!-- <div  style="padding-top: 10px;">

<?php  while($rb = mysqli_fetch_assoc($result_bike)) {   ?> 

<input type="radio" name="bike"  value="<?php echo $rb['make'].'//'.$rb['model'].'//'.$cust_id; ?>"> <?php echo $rb['make'].'-('.$rb['model'].')' ; ?><br/>


<?php } 


 ?>
 <input type="radio" name="bike"  value="other">  Add bikes <br/>
</div> -->
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


echo "<div style='padding-top:10px;' class='form-group'><label class='col-md-4 control-label' for='make'>Brand</label><div class='col-md-5'>";

echo "<select id='make' name='make' class='form-control'>" . $makeitems . "</select>"; 

echo "</div></div>";

echo "<div class='form-group' id='modellist'><label class='col-md-4 control-label' for='model'>Model</label><div class='col-md-5'>";

echo "<select id='model_1' name='model_1' class='form-control'>" . $modelitems . "</select>"; 

echo "</div>
</div>";




 echo "<div id='couponsection1'>


 <label class='col-md-4 control-label'>everyday running in km </label></br>
  <input class='col-md-5' type='text' name='km_runs' id='kmruns' value=><br>

<div style='padding-top:10px;' class='form-group'><label class='col-md-4 control-label' for='plan'>plans per year </label>

<div class='col-md-5'>
 ";


//  echo "
// <select name='plan' class='form-group' id='plan'>
//   <option value='3'>3/year</option>
//   <option value='4'>4/year</option>
//   <option value='5'>5/year</option>
//   <option value='6'>6/year</option>
// </select>

// </div>

// ";

echo "<ul class='donate-now'>
  <li>
    <input type='radio' id='a25' name='plan'  value='3'/>
    <label for='a25'> 3/year</label>
  </li>
  <li>
    <input type='radio' id='a50' name='plan' value='4' />
    <label for='a50'>4/year</label>
  </li>
  <li>
    <input type='radio' id='a75' name='plan' value='5' />
    <label for='a75'>5/year</label>
  </li>
  <li>
    <input type='radio' id='a100' name='plan' value='6' />
    <label for='a100'>6/year</label>
  </li>

</ul>";


 echo "</div><br> </br>";

echo "<input style='display:none;' type='radio' name='service_type' id='service_type' value=''><span id='service_type3'></span> <br>
  <input style='display:none;' type='radio' name='service_type' id='service_type2' value=''><span id='service_type4'></span> <br>
</div>
  ";



echo "<div id='couponsection'>";

echo "<div class='form-group'>";  

// echo "<div class='col-md-12' id='plans'></br><span><h4><strong>Select your Plan to Proceed</strong></h4></span></br>";

?>


<div class='form-group' id="1prodry">
<div class='p-a30 bg-white m-b30'>
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
                                        
                                            <div class='pricingtable-title'>
                                                <h2>Pro Wet</h2>
                                            </div>
                                            <ul class='pricingtable-features'>
                                                <li><i class='fa fa-check'></i> Full Responsive </li>
                                                <li><i class='fa fa-check'></i> Multi color theme</li>
                                                <li><i class='fa fa-check'></i> With Bootstrap</li>
                                                <li><i class='fa fa-check'></i> Easy to customize</li>
                                                <li><i class='fa fa-check'></i> Many Sortcodes</li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>

                                   <div class='col-sm-12 col-md-3 col-lg-3'>
                                   </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
</div>

<div class='form-group'  id="2prodry">
<div class='p-a30 bg-white m-b30'>
                    <div class='section-head'>
                        <h2 class='text-uppercase'>Select your Plan to Proceed</h2>
                    </div>
                    <div class='section-content'>
                        <div class='pricingtable-row m-b30'>
                            <div class='row'>
                                <div class='col-sm-12 col-md-6 col-lg-6'>
                                    <div class='pricingtable-wrapper'>
                                        <div class='pricingtable-inner '>
                                     
                                            <div class='pricingtable-title'>
                                                <h2>Pro Dry</h2>
                                            </div>
                                            <ul class='pricingtable-features '>
                                                <li><i class='fa fa-check'></i> Full Responsive </li>
                                                <li><i class='fa fa-check'></i> Multi color theme</li>
                                                <li><i class='fa fa-check'></i> With Bootstrap</li>
                                                <li><i class='fa fa-check'></i> Easy to customize</li>
                                                <li><i class='fa fa-check'></i> Many Sortcodes</li>
                                            </ul>
                      
                                        </div>
                                    </div>
                                </div>
                                <div class='col-sm-12 col-md-6 col-lg-6'>
                                    <div class='pricingtable-wrapper'>
                                        <div class='pricingtable-inner pricingtable-highlight'>
                               
                                            <div class='pricingtable-title'>
                                                <h2>Pro Wet</h2>
                                            </div>
                                            <ul class='pricingtable-features'>
                                                <li><i class='fa fa-check'></i> Full Responsive </li>
                                                <li><i class='fa fa-check'></i> Multi color theme</li>
                                                <li><i class='fa fa-check'></i> With Bootstrap</li>
                                                <li><i class='fa fa-check'></i> Easy to customize</li>
                                                <li><i class='fa fa-check'></i> Many Sortcodes</li>
                                            </ul>
                                       <!--      <div class='pricingtable-footer'> <a href='#couponsection' class='site-button' id='selectprowet1'>Add to Cart</a> </div> -->
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

</div>



<?php 
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
<label class='col-md-4 control-label' for='regno'>Registration No. (optional)</label> 
<div class='col-md-5'>
<input id='regno' name='regno' type='text' placeholder='MH02BR3545' class='form-control input-md' required='' >
</div>
</div>"; 




echo "<input type='hidden' id='bike_make' name='bike_make' value='' />";
echo "<input type='hidden' id='bike_model' name='bike_model' value='' />";
echo "<input type='hidden' id='service' name='service' value='' />";

echo "<input type='hidden' id='pricevalue' name='price' value='' />";

// echo "<div class='form-group'>
// <label class='col-md-4 control-label' for='coupon'>Coupon Code<br /><small>Use code <strong>PROTTO100</strong> to get ₹100 on your first booking</small></label> 
// <div class='col-md-5'>
// <input id='coupon' name='coupon' type='text' placeholder='PRO123' class='form-control input-md' style='width: 65%; display: inline-block;' ><button class='btn' type='button' id='applycoupon'>Apply</button>
// </div>
// </div>";

echo "<div id='prodry'>";

echo "<table cellpadding='10' width='100%' style='text-align: right; line-height: 36px; font-size: 18px;'><tr><td width='60%'></td><td width='20%'>Current Price</td><td width='20%' class='displaycprice'></td></tr><tr class='focouponrow' style='color: #50c878;'><td></td><td>Coupon Discount</td><td class='displayfocouponprice'></td></tr><tr class='teflonrow'><td></td><td>Teflon Coating</td><td>499</td></tr><tr style='font-weight: bold;'><td></td><td style='border-top: 1px solid;'>Final Price</td><td style='border-top: 1px solid;' class='finalprice'></td></tr></table>";

echo "<input id='servicetype' name='servicetype' type='hidden' value='provip' >";

echo "<br /><span id='payblock1' style='display: none; float: right;'><strong>We are processing your request. Please do not reload.</strong></span><input name='provip' id='paynowbtn1' style='float: right; margin-left: 50px;' type='submit' class='btn' value='provip' />";

echo "</div>";


echo "</div>";

echo "</fieldset>

</form>";

?>

    

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
       $('#prodryprice').html(obj[0].prodryoffer);
       prodryprice = obj[0].prodryoffer;
       prodrypass = obj[0].prodrypass;
       $('#prowetprice').html(obj[0].prowetoffer);
       prowetprice = obj[0].prowetoffer;
       prowetpass = obj[0].prowetpass;
        $('#plans').show();
       $('#placewetfree').html(obj[0].prowetfreeoffer);
       prowetfreeprice = obj[0].prowetfreeoffer;
  });



}); 

    $('#2prodry').hide();
$('#1prodry').hide();

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
$('#couponsection1').hide();

$('#prowet').hide();

$('#prodry').hide();

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

// $('#modellist').hide();

$('#make').on('change', function() {

var make = this.value;

$('#bike_make').val(this.value);

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

$('#bike_model').val(this.value);

 $('#couponsection1').show();
// $.post('custom/getfinalprice.php',
//     {
//         model: model
//     },
//     function(data, status){
//        var obj = JSON.parse(data);
//        $('#placewetfree').prop('value',obj[0].prowetfreeprice);
//        $('#prodryprice').html(obj[0].prodryoffer);
//        prodryprice = obj[0].prodryoffer;
//        prodrypass = obj[0].prodrypass;
//        $('#prowetprice').html(obj[0].prowetoffer);
//        prowetprice = obj[0].prowetoffer;
//        prowetpass = obj[0].prowetpass;
//         $('#plans').show();
//        $('#placewetfree').html(obj[0].prowetfreeoffer);
//        prowetfreeprice = obj[0].prowetfreeoffer;
//         $('#couponsection1').show();

//   });

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

$('#servicetype').prop('value','ProWet');

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

$('#servicetype').prop('value','ProWet');

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

$('#servicetype').prop('value','ProDry');

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

$('#servicetype').prop('value','ProDry');

});




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

// $('#plan').change()


    $('input:radio[name="plan"]').change(function(){


$('#service').val(this.value);

$('#service_type').show();

$('#service_type2').show();

if(this.value == 3){
        var first = "2pw/1pd";
        var first1 = '2prowet/1prodry';
        var second = "3pw";
        var second1 = '3prowet';
}else if(this.value == 4){

        var first = "2pw/2pd";
        var first1 = '2prowet/2prodry';
        var second = "4pw";
        var second1 = '4prowet';
}else if(this.value == 5){

        var first = "3pw/2pd";
        var first1 = '3prowet/2prodry';
        var second = "5pw";
        var second1 = '5prowet';
}else if(this.value == 6){
        var first = "3pw/3pd";
        var first1 = '3prowet/3prodry';
        var second = "6pw";
        var second1 = '6prowet';

}

$('#service_type').val(first);
$('#service_type3').text(first1);
$('#service_type2').val(second);
$('#service_type4').text(second1);
    
});




$('input:radio[name="service_type"]').change(function(){


var che_strin = this.value.length;
var service_type1 = this.value;
var service = $('#service').val();
var model = $('#model_1').val();



if(che_strin > 4){

    $("#2prodry").show();
     $("#1prodry").hide();

}else{
 $("#2prodry").hide();
  $("#1prodry").show();
}

// id="2prodry"
    $("#couponsection").show();
    $("#prodry").show();



        $.ajax({
        type: "POST",
        url: 'custom/getprovipprice.php',
         data : { 'service_type1' : service_type1, 'service' : service, 'model' : model},
        success: function(data) {
               var obj = JSON.parse(data);
            $('#price').html(obj[0].provipprice);
            $('.finalprice').html(obj[0].provipprice);
            $('.displaycprice').html(obj[0].provipprice);
            $('#pricevalue').val(obj[0].provipprice);
            // window.console.log('Successful');
        }
    });



    

});





$('#kmruns').keyup(function (){

var daykm = $('#kmruns').val();


if(daykm <= 19 ){

    $('input[name="plan"]').attr('checked', false);

$("#a25").attr("checked","checked");
$("#a25").trigger("click");
// $('input[name="plan"]').prop("checked", true).trigger("click");



}else if(daykm  <=  39){

  $('input[name="plan"]').attr('checked', false);
    $("#a50").attr("checked","checked");
    $("#a50").trigger("click");
// $('input[name="plan"]').prop("checked", true).trigger("click");

}else if(daykm  <= 49){
   $('input[name="plan"]').attr('checked', false);
    $("#a75").attr("checked","checked");

    $("#a75").trigger("click");
    // $('input[name="plan"]').prop("checked", true).trigger("click");

}else if(daykm >= 50){
  $('input[name="plan"]').attr('checked', false);
    $("#a100").attr("checked","checked");

    $("#a100").trigger("click");
    // $('input[name="plan"]').prop("checked", true).trigger("click");
}

})


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




