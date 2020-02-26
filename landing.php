<?php 
session_start();

// print_r($_POST);
// print_r($_SESSION);


error_reporting(0);

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
//SQL Query
$sql = "SELECT DISTINCT make FROM bikes WHERE 1";


    $result =  mysqli_query($conn, $sql);


if($_POST['submit_service']){

 if($_SESSION['cust_num'] != ''){

$_SESSION['guest'] = array (
                             "make" => $_POST['make'],
                            "model"=> $_POST['model_12'],
                            "name" => $_SESSION['name'],
                            "mobile"=> $_SESSION['mobile'],
                            
                            );
 header("Location: my-booking.php"); 
                exit();

}else if($_POST['make'] =='' || $_POST['model_12'] == '' ){



}else {

$_SESSION['guest'] = array(
                            "make" => $_POST['make'],
                            "model"=> $_POST['model_12'],
                            "name" => $_POST['name'],
                            "mobile"=> $_POST['mobile'],
                            );

 header("Location: my-booking.php"); 
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

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
        
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">
    
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
                 <!--    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-login"></i></button>
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
                             <!--   <ul class="sub-menu">
                                    <li><a href="index.html">Home Car Service</a></li>
                                    <li><a href="index-2.html">Car Washing</a></li>
                                    <li><a href="index-3.html">Car Denting Penting</a></li>
                                    <li><a href="index-4.html">Auto Car Service</a></li>
                                    <li><a href="index-5.html">Car Maintenance</a></li>
                                    <li><a href="index-6.html">Swiper Home <span class="new-tag">New</span></a></li>
                                    <li><a href="index-7.html">Onepage 1 <span class="new-tag">New</span></a></li>
                                    <li><a href="index-8.html">Onepage 2 <span class="new-tag">New</span></a></li>
                                </ul> -->
                            </li>
                            <li> <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="javascript:;">Header <i class="fa fa-angle-right"></i></a>
                                     <!--    <ul class="sub-menu">
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
                                      <!--   <ul class="sub-menu">
                                            <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                            <li><a href="footer-white.html">Footer White</a></li>
                                        </ul> -->
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
                                  <!--       <ul>
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
                                    <!--     <ul>
                                            <li><a href="gallery-grid-2.html">Gallery Grid 2</a></li>
                                            <li><a href="gallery-grid-3.html">Gallery Grid 3</a></li>
                                            <li><a href="gallery-grid-4.html">Gallery Grid 4</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                            <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                            <li><a href="login-1.html">Login 1</a></li>
                                            <li><a href="login-2.html">Login 2</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Shop<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="javascript:;">Product <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-grid-4.html">Product 1</a></li>
                                            <li><a href="shop-product.html">Product 2</a></li>
                                            <li><a href="shop-product-2.html">Product 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-product-details.html">Product details</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-cart-empty.html">Cart Empty</a></li>
                                    <li><a href="shop-wishlist.html">Wishlist</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
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
    <!-- header END -->
	<!-- Content -->
    <div class="page-content bg-white">
		<!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1" data-alias="" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
			<div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
				<ul>  <!-- SLIDE  -->
					<li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide9.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/main-slider/slide9.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						 <div class="tp-caption tp-shape tp-shapewrapper "
							id="slide-100-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
							data-width="full"
							data-height="full"
							data-whitespace="nowrap"
							data-type="shape"
							data-basealign="slide"
							data-responsive_offset="off"
							data-responsive="off"
							data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
						<div class="tp-caption tp-shape d-lg-block d-none tp-shapewrapper bg-primary tp-resizeme"
							id="slide-100-layer-1"
							data-x="380"
							data-y="295"
							data-width="100"
							data-height="5"
							data-whitespace="nowrap"
							data-type="shape"
							data-responsive_offset="on"
							data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]" style="z-index: 6;border-color:rgba(0, 0, 0, 0.50); border-width:0px;"> </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none text-white"
							id="slide-100-layer-2"
							data-x="380"
							data-y="180"
							data-width="['auto']"
							data-height="['auto']"
							data-type="text"
							data-responsive_offset="on"
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 700; letter-spacing: 0px; font-family:'Poppins',sans-serif;">MAKE YOUR CAR</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none text-primary"
							id="slide-100-layer-3"
							data-x="380"
							data-y="260"
							data-width="['auto']"
							data-height="['auto']"
							data-type="text"
							data-responsive_offset="on"
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[110,110,110,110]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 700; letter-spacing: 0px; font-family:'Poppins',sans-serif;">  LAST LONGER</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme d-lg-block d-none"
							id="slide-100-layer-4"
							data-x="380"
							data-y="360"
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-type="text"
							data-responsive_offset="on"
							data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:'Poppins',sans-serif;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
						</div>
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none"
							id="slide-100-layer-5"
							data-x="380"
							data-y="485"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button"
							data-actions=''
							data-responsive_offset="on"
							data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 6; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:'Poppins',sans-serif;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button">Get A Qutoe</a>
						</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none"
							id="slide-100-layer-6"
							data-x="530"
							data-y="485"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button"
							data-actions=''
							data-responsive_offset="on"
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:'Poppins',sans-serif;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button-secondry">Talk To US</a>
						</div>
					</li>
					<li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide10.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/main-slider/slide10.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						 <div class="tp-caption tp-shape tp-shapewrapper "
							id="slide-200-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
							data-width="full"
							data-height="full"
							data-whitespace="nowrap"
							data-type="shape"
							data-basealign="slide"
							data-responsive_offset="off"
							data-responsive="off"
							data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
						<div class="tp-caption tp-shape d-lg-block d-none tp-shapewrapper bg-primary tp-resizeme"
							id="slide-200-layer-1"
							data-x="380"
							data-y="295"
							data-width="100"
							data-height="5"
							data-whitespace="nowrap"
							data-type="shape"
							data-responsive_offset="on"
							data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]" style="z-index: 6;border-color:rgba(0, 0, 0, 0.50); border-width:0px;"> </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none text-white"
							id="slide-200-layer-2"
							data-x="380"
							data-y="180"
							data-width="['auto']"
							data-height="['auto']"
							data-type="text"
							data-responsive_offset="on"
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 700; letter-spacing: 0px; font-family:'Poppins',sans-serif;">MAKE YOUR CAR</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none text-primary"
							id="slide-200-layer-3"
							data-x="380"
							data-y="260"
							data-width="['auto']"
							data-height="['auto']"
							data-type="text"
							data-responsive_offset="on"
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[110,110,110,110]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 700; letter-spacing: 0px; font-family:'Poppins',sans-serif;">  LAST LONGER</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme d-lg-block d-none"
							id="slide-200-layer-4"
							data-x="380"
							data-y="360"
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-type="text"
							data-responsive_offset="on"
							data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:'Poppins',sans-serif;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
						</div>
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none"
							id="slide-200-layer-5"
							data-x="380"
							data-y="485"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button"
							data-actions=''
							data-responsive_offset="on"
							data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 6; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:'Poppins',sans-serif;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button">Get A Qutoe</a>
						</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none"
							id="slide-200-layer-6"
							data-x="530"
							data-y="485"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button"
							data-actions=''
							data-responsive_offset="on"
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:'Poppins',sans-serif;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button-secondry">Talk To US</a>
						</div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
			</div>
		</div>
        <!-- Main Slider -->
		<!-- About Section -->
		<div class="section-full">
			<div class="container">
				<form class="row car-search-box m-lr0 p-lr15 p-b30 p-t15 bg-primary" action=""  method="post">


                     <?php if($_SESSION['name']){  ?>
                          <label>Login customer line of code .</label>
                        <input style="padding: 7%; border-radius: 5%" name="customer_id" type="hidden" class="form-control" value='<?php echo $_SESSION['cust_num']; ?>'>

                     <?php }else{ ?>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                    <label>Select Bike</label>
                    <div>
                    <div class="form-group">
                    <select  id="make" name="make">
                    <option selected="true" disabled="disabled" value="0" >  Select Bike Brand   </option>
                    <?php while($r = mysqli_fetch_assoc($result)) { ?> 
                    <option value="<?php  echo  $r['make']; ?>"> <?php  echo  $r['make']; ?>  </option>
                    <?php      }   ?> 
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                    <label>Select model</label>
                    <div>

                    <div class="form-group">
                    <select id='model_12' name='model_12'> 

                        <?php echo $modelitems; ?> 
                  
                    </select>
                    </div>							
                    </div>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label>Name</label>
                        <div class="form-group">
                            <input  style="padding: 7%; border-radius: 5%" name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label>Mobile No</label><div class="form-group">
                            <input style="padding: 7%; border-radius: 5%" name="mobile" type="text" class="form-control" placeholder="Mobile"></div>
                         </div>

                   <?php   } ?>

					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<input name="submit_service" class="site-button" type="submit" value="Submit"/>

						</div>
						</div>
					</div>

					</div>

				</form>
			</div>
		</div>
	    <!-- About Section End -->
		<!-- Our Services -->
		<div class="section-full content-inner car-services" style="background-image:url(images/background/bg11.jpg); background-repeat:no-repeat; background-position:bottom;">
			<div class="container">
				<div class="p-a30 bg-white m-b30 p-b0">
						<div class="section-head inner-head">
								<h2 class="text-uppercase">icon box style 1 aligh center</h2>
						</div>
						<div class="section-content m-b50">
								<div class="row">
									<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
											<div class="icon-bx-wraper bx-style-1 p-a30 center">
													<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
													<div class="icon-content">
															<h5 class="dlab-tilte text-uppercase">Content title</h5>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
													</div>
											</div>
									</div>
										<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
												<div class="icon-bx-wraper bx-style-1 p-a30 center">
														<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
														<div class="icon-content">
																<h5 class="dlab-tilte text-uppercase">Content title</h5>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
														</div>
												</div>
										</div>
										<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
												<div class="icon-bx-wraper bx-style-1 p-a30 center">
														<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
														<div class="icon-content">
																<h5 class="dlab-tilte text-uppercase">Content title</h5>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
														</div>
												</div>
										</div>

										</div>

								<div class="row">
									<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
											<div class="icon-bx-wraper bx-style-1 p-a30 center">
													<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
													<div class="icon-content">
															<h5 class="dlab-tilte text-uppercase">Content title</h5>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
													</div>
											</div>
									</div>
										<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
												<div class="icon-bx-wraper bx-style-1 p-a30 center">
														<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
														<div class="icon-content">
																<h5 class="dlab-tilte text-uppercase">Content title</h5>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
														</div>
												</div>
										</div>
										<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
												<div class="icon-bx-wraper bx-style-1 p-a30 center">
														<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
														<div class="icon-content">
																<h5 class="dlab-tilte text-uppercase">Content title</h5>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
														</div>
												</div>
										</div>

										</div>
						</div>
				</div>


					<!-- Our Services END1-->
						<!-- Services -->
						<div class="content-area">
		            <!-- content start -->
		            <div class="container">
					                 	<div class="p-a30 bg-white m-b30 p-b0">
					                    <div class="section-head">
					                        <h2 class="text-uppercase">Icon box circle center aligh</h2>
					                    </div>
					                    <div class="section-content">
					                        <div class="row">
					                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
					                                <div class="icon-bx-wraper center">
					                                    <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
					                                    <div class="icon-content">
					                                        <h5 class="dlab-tilte text-uppercase">Content title</h5>
					                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
					                                    </div>
					                                </div>
					                            </div>
					                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
					                                <div class="icon-bx-wraper center">
					                                    <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
					                                    <div class="icon-content">
					                                        <h5 class="dlab-tilte text-uppercase">Content title</h5>
					                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
					                                    </div>
					                                </div>
					                            </div>
					                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
					                                <div class="icon-bx-wraper center">
					                                    <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
					                                    <div class="icon-content">
					                                        <h5 class="dlab-tilte text-uppercase">Content title</h5>
					                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div></div>
											</div>
        <!-- Testimoniyal -->
		<div class="section-full bg-img-fix content-inner overlay-white-dark" style="background-image:url(images/background/bg5.jpg); margin-top:-1px">
            <div class="container">
				<div class="section-head text-center ">
                    <h2 class="text-uppercase">Our <span class="text-primary">Testimonial</span></h2>
					<p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
				<div class="section-content">
					<div class="testimonial-five owl-carousel owl-dots-none owl-theme owl-dots-white-full owl-loaded owl-drag owl-btn-3 owl-btn-center-lr">
						<div class="item">
							<div class="testimonial-6">
								<div class="testimonial-text bg-white quote-left quote-right">
									<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make </p>
								</div>
								<div class="testimonial-detail clearfix bg-primary text-white">
									<h4 class="testimonial-name m-tb0">David Matin</h4>
									<span class="testimonial-position">Student</span>
									<div class="testimonial-pic radius"><img src="images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-6">
								<div class="testimonial-text bg-white quote-left quote-right">
									<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make </p>
								</div>
								<div class="testimonial-detail clearfix bg-primary text-white">
									<h4 class="testimonial-name m-tb0">David Matin</h4>
									<span class="testimonial-position">Student</span>
									<div class="testimonial-pic radius"><img src="images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimoniyal End -->
        <!-- Client logo -->
        <div class="section-full dlab-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer ">
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="images/logo.png" alt=""></div>
                            <p><strong>Auto Care</strong> ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat . wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.ipsum dolor sit amet, consectetuer.</p>
                            <ul class="dlab-social-icon dez-border">
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">Recent Post</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic3.jpg" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title  text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Our services</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><a href="engine-diagnostics.html">Engine Diagnostics</a></li>
                                <li><a href="lube-oil-and-filters.html">Lube, Oil and Filters</a></li>
                                <li><a href="belts-and-hoses.html">Belts and Hoses</a></li>
                                <li><a href="air-conditioning.html">Air Conditioning</a></li>
                                <li><a href="brake-repair.html">Brake Repair</a></li>
                                <li><a href="tire-and-wheel-services.html">Tire And Wheel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Contact us</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)</li>
                                <li><i class="ti-printer"></i><strong>FAX</strong>(123) 123-4567</li>
                                <li><i class="ti-email"></i><strong>email</strong>info@demo.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left">
						<span>© Copyright 2020</span>
					</div>
					<div class="col-lg-4 col-md-4 text-center">
						<span> Design With <i class="ti-heart text-primary heart"></i> By DexignLab </span>
					</div>
					<div class="col-lg-4 col-md-4 text-right">
						<a href="about-1.html"> About Us</a>
						<a href="faq-1.html"> FAQs</a>
						<a href="contact.html"> Contact Us</a>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style4" ></button>
</div>



<!-- myscript -->
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
<script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->

<script src="plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<!-- REVOLUTION JS FILES -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/rev.slider.js"></script>
<script>
jQuery(document).ready(function() {
    'use strict';
    dz_rev_slider_4();
}); /*ready*/
</script>

<script>

// document.getElementById('phone').oninvalid = function(event) {
// event.target.setCustomValidity('Mobile number should only contain 10 digits');
// }

var $ = jQuery.noConflict();

// var date_input=$('input[name="date"]'); //our date input has the name "date"
// date_input.datepicker({
// format: 'dd/mm/yyyy',
// daysOfWeekDisabled: [3],
// autoclose: true,
// setDate: new Date('<?php echo $tomorrow; ?>'),
// startDate: new Date('<?php echo $tomorrow; ?>'),
// endDate: new Date('<?php echo $threedays; ?>'),
// });

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

$('#modellist').hide();


$('#make').on('change', function() {



var make = this.value;

$.post('custom/getmodels.php',
    {
        make: make
    },
    function(data, status){

        $('#model_12').html(data);
        var select = $('#model_12');

        $(select).selectpicker('refresh');
        // $('#modellist').show();
    });

});

$('#model').on('change', function() {

var model = this.value;


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

$('#applycoupon').on('click', function() { 

var coupon = $('#coupon').val();

var email = $('#email').val();

var phone = $('#phone').val();

if(coupon == '' || email == '' || phone == ''){

alert('Please enter email, mobile and coupon code');

} else {

$.post('custom/checkcouponstatus.php',
    {
        coupon: coupon,
        email: email,
        phone: phone
    },
    function(data, status){
        alert(data);
       if(data == 'Coupon code accepted'){
             couponprice = 100;
             $('.focouponrow').show();
             $('#applycoupon').hide();
             $('#coupon').prop('readonly', true);
             $('.displayfocouponprice').html(couponprice+teflonprice );
             $('.finalprice').html(finalprice-couponprice+teflonprice );
   }
else if(data == 'Promo code accepted'){
couponprice = 50;
$('.focouponrow').show();
$('#applycoupon').hide();
$('#coupon').prop('readonly', true);
$('.displayfocouponprice').html(couponprice+teflonprice );
$('.finalprice').html(finalprice-couponprice+teflonprice );
}
       else {
             couponprice = 0;
             $('.focouponrow').hide();
             $('.finalprice').html(finalprice-couponprice+teflonprice );
     }
  });

}

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

</script>









</body>
</html>
