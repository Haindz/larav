
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Meghna One page parallax responsive HTML Template ">

	<meta name="author" content="Muhammad Morshed">

	<title>Meghna | Responsive Multipurpose Parallax HTML5</title>

	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!--
	    Start Preloader
	    ==================================== -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
	<!-- End Preloader
        ==================================== -->

<!--Welcome Slider==================================== -->
@include('partisi.home')

<!--Fixed Navigation==================================== -->
@include('partisi.header')
<!--End Fixed Navigation==================================== -->

<!--Start About Section==================================== -->
@include('partisi.about')   
<!-- End section -->

<!--Start Call To Action==================================== -->
@include('partisi.action')   
<!-- End section -->

<!-- Start Services Section==================================== -->
@include('partisi.services')  
<!-- End section -->
	
<!-- Start Team Skills=========================================== -->
@include('partisi.skills') 
<!-- End section -->

<!-- Start Portfolio Section=========================================== -->
@include('partisi.portofolio') 
<!-- End section -->

<!--Start Counter Section==================================== -->
@include('partisi.counter') 
<!-- end section -->

<!-- Start Our Team=========================================== -->
@include('partisi.team')   
<!-- End section -->
		
<!-- Start Pricing section=========================================== -->
@include('partisi.pricing')  
<!-- End section -->

<!-- Start Testimonial=========================================== -->
@include('partisi.testimoni')    
<!-- End Section -->

<!-- Start Blog Section =========================================== -->
@include('partisi.blog') 
<!-- end section -->

<!-- Srart Contact Us=========================================== -->		
@include('partisi.contact') 
<!-- end section -->
	
<!-- end Contact Area========================================== -->
@include('partisi.footer')
<!-- end footer -->
	    
		
		
		
		
		
		
		


		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="plugins/filterzr/jquery.filterizr.min.js"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
		<!-- Sticky Nav -->
		<script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="js/script.js"></script>
		
    </body>
</html>