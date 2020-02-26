<?php 
error_reporting(0);
session_start();

include "dbconfig.php";

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
                            <li class="active"> <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
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
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 -->
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYER NR. 1 [ for overlay ] -->
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
										style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>
									
									<!-- LAYER NR. 2 [ for title ] -->
									<div class="tp-caption tp-resizeme" 
										id="slide-100-layer-2" 
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['150','110','110','70']" 
										data-fontsize="['55','55','55','36']"
										data-lineheight="['60','60','60','46']"
										data-width="['800','800','800','800']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> 
										<span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">MAKE YOUR CAR <br/> LAST LONGER</span> 
									</div>
									
									<!-- LAYER NR. 3 [ for paragraph] -->
									<div class="tp-caption tp-resizeme" 
										id="slide-100-layer-3" 
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['300','250','250','190']" 
										data-fontsize="['20','20','20','20']"
										data-lineheight="['30','30','30','30']"
										data-width="['800','800','700','420']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;"> 
											<span> There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled </span> 
									</div>
									
									<!-- LAYER NR. 4 [ for readmore botton ] -->
									<div class="tp-caption tp-resizeme" 	
										id="slide-100-layer-4"						
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['420','370','370','370']" 
										data-fontsize="['none','none','none','none']"
										data-lineheight="['none','none','none','none']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13;">
										<a href="javascript:void(0);" class="site-button button-skew"><span>Read More</span><i class="fa fa-angle-right"></i></a>
									</div>
                                </li>
                                <!-- SLIDE 2 -->
                                <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
									id="slide-200-layer-1" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
									data-width="full"
				s					data-height="full"
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
									
									style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 2 [ for title ] -->
									<div class="tp-caption tp-resizeme" 
										id="slide-200-layer-2" 
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['150','110','110','70']" 
										data-fontsize="['55','55','55','36']"
										data-lineheight="['60','60','60','46']"
										data-width="['800','800','800','800']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"

										data-type="text" 
										data-responsive_offset="on" 
										data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">MAKE YOUR CAR <br/> LAST LONGER</span> 
									</div>

                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption tp-resizeme" 
									id="slide-200-layer-3" 
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['300','250','250','190']" 
										data-fontsize="['20','20','20','20']"
										data-lineheight="['30','30','30','30']"
										data-width="['800','800','700','420']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;"> 
										<span>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type and scrambled </span> 
									</div>
									
                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme" 	
										id="slide-200-layer-4"						
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['420','370','370','370']" 
										data-fontsize="['none','none','none','none']"
										data-lineheight="['none','none','none','none']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13;"><a href="javascript:void(0);" class="site-button  button-skew"><span>Read More</span><i class="fa fa-angle-right"></i></a> 
									</div>
								</li>
                                <!-- SLIDE 3 -->
                                <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
									id="slide-300-layer-1" 
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
									
									style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption tp-resizeme" 
										id="slide-300-layer-2" 
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['150','110','110','70']" 
										data-fontsize="['55','55','55','36']"
										data-lineheight="['60','60','60','46']"
										data-width="['800','800','800','800']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"

										data-type="text" 
										data-responsive_offset="on" 
										data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">MAKE YOUR CAR <br/> LAST LONGER</span> 
									</div>

                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption tp-resizeme" 
										id="slide-300-layer-3" 
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['300','250','250','190']" 
										data-fontsize="['20','20','20','20']"
										data-lineheight="['30','30','30','30']"
										data-width="['800','800','700','420']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;"> 
										<span>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  when an unknown printer took a galley of type and scrambled </span> 
									</div>
									
                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme" 	
										id="slide-300-layer-4"						
										data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
										data-y="['top','top','top','top']" data-voffset="['420','370','370','370']" 
										data-fontsize="['none','none','none','none']"
										data-lineheight="['none','none','none','none']"
										data-width="['700','700','700','700']"
										data-height="['none','none','none','none']"
										data-whitespace="['normal','normal','normal','normal']"
										data-type="text" 
										data-responsive_offset="on"
										data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 13;"><a href="javascript:void(0);" class="site-button   button-skew"><span>Read More</span><i class="fa fa-angle-right"></i></a> 
									</div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
     

<!-- 24 jan  -->
<div class="section-full content-inner car-services" style="background-image:url(images/background/bg11.jpg); background-repeat:no-repeat; background-position:bottom;">
            <div class="container">
                <div class="row m-b40">
                    <div class="col-lg-6 col-md-6 col-sm-12 section-head align-self-center">
                         <h2 class="text-uppercase">Welcome To <span class="text-primary">Car Service</span></h2>
                        <h5 class="font-weight-400">Everything you need to build an amazing dealership website. </h5>
                        <p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use..</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                        <img src="images/car.png" alt=""/>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-6 col-lg-3 m-b30">
                       <a style="all: none;" href="landing.php" > <div class="icon-bx-wraper p-a20">
                            <div class="icon-md text-primary m-b15"> <span class="icon-cell"><i class="ti-settings"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">All brands</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div></a>
                    </div> 
                    <div class="col-md-6 col-lg-3 m-b30">
                       <a style="all: none;" href="procleanse.php" >  <div class="icon-bx-wraper p-a20">
                            <div class="icon-md text-primary m-b15"> <span class="icon-cell"><i class="ti-headphone-alt"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">Pro Cleanse</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-6 col-lg-3 m-b30">
                      <a style="all: none;" href="prorepair.php" >  <div class="icon-bx-wraper p-a20">
                            <div class="icon-md text-primary m-b15"> <span class="icon-cell"><i class="ti-bar-chart-alt"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">Pro Repair</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-6 col-lg-3 m-b30">
                           <a style="all: none;" href="provip.php" >  <div class="icon-bx-wraper p-a20">
                            <div class="icon-md text-primary m-b15"> <span class="icon-cell"><i class="ti-bar-chart-alt"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">Pro Vip</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Projects END -->
        <!-- OUR SERVICES -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase"> OUR SERVICES</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-secondry style-skew"></div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center m-b40">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-reload text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">AIR CONDITIONING</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center m-b40">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-car text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">BRAKE REPAIR</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center m-b40">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-thumb-up text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">LUBE, OIL AND FILTERS</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center m-b40">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-cup text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">BELTS AND HOSES</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center m-b40">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-settings text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">ENGINE DIAGNOSTICS</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center m-b10">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-pie-chart text-primary"></i></span> </div>
                            <div class="icon-content">


                                <h5 class="dlab-tilte text-uppercase">TIRE AND WHEEL SERVICES</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR SERVICES END-->
        <!-- Company staus -->
        <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="ti-home m-r20"></i> <span class="counter">1035</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Active Experts</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-group m-r20"></i> <span class="counter">1226</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Happy Client</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-slideshare m-r20"></i> <span class="counter">1552</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Workers Hand</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b10">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-home m-r20"></i> <span class="counter">1156</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Completed Project</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus END -->
        <!-- Team member -->
        <!--  -->
        <!-- Latest blog END -->
        <!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url(images/background/bg2.jpg);">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">What peolpe are saying</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-white  style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-four owl-carousel owl-none owl-theme owl-dots-white-full">
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog END -->
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
    <footer class="site-footer">
        <!-- newsletter part -->
        <div class="bg-primary dlab-newsletter">
            <div class="container equal-wraper">
				<form class="dzSubscribe" action="script/mailchamp.php" method="post">
					<div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                <div class="icon-lg text-white radius">
									<i class="ti-email"></i>
								</div>
                                <div class="icon-content"> <strong class="text-black text-uppercase font-18">Subscribe</strong>
                                    <h2 class="dlab-tilte text-uppercase">Our Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="dzSubscribeMsg"></div>
							<div class="input-group equal-col p-t40  p-b10">
                                <input name="dzEmail" required placeholder="Email address" required="required" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
                            <div class="equal-col p-t40 p-b10 skew-subscribe">
                                <button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1"> <span>Subscribe</span><i class="fa fa-angle-right"></i> </button>
                            </div>
                        </div>
					</div>
				</form>
            </div>
        </div>
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
        <div class="footer-bottom footer-line">
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
    <button class="scroltop fa fa-arrow-up style5" ></button>
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

<script src="plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS -->
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
	dz_rev_slider_1();
});	/*ready*/
</script>



<!-- 


<div id="myModal" class="modal fade in" style="display: block;">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons"></i>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <h4>Ooops!</h4> 
                <p>Something went wrong. File was not uploaded.</p>
                <button class="btn btn-success" data-dismiss="modal">Try Again</button>
            </div>
        </div>
    </div>
</div>
 -->




</body>
</html>
