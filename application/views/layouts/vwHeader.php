<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="EstateX">
    <title>SadiZameen</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo  ASSETS_URL; ?>img/logo.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>css/bootstrap.min.css" type="text/css">    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>fonts/font-awesome.min.css" type="text/css">   
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>fonts/line-icons/line-icons.css" type="text/css">  
    <!-- Main Styles -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>css/main.css" type="text/css">
 
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>extras/owl.theme.css" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>extras/settings.css" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>extras/nivo-lightbox.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>css/responsive.css" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>css/slicknav.css" type="text/css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="<?php echo  ASSETS_URL; ?>css/bootstrap-select.min.css">   

    <!-- Google Maps -->
    <style>
      #google-map,
      body,
      html {
        padding: 0;
        height: 600px;
      }
    </style>   


	<style>
	.header_btns {
		background: transparent !important;
		color: #333 !important;
		box-shadow: none !important;
		border: 1px solid #333 !important;
		font-weight: bold;
	}

	.full_width_bg.home .top-bar-bottom {
		padding-bottom: 0px;
		padding-top: 0;
	}


	.navbar-default .navbar-nav > li{
		padding-top: 8px;
		padding-bottom: 8px;
	}

	.header_btns:hover {
		background: #fcc623 !important;
		color: #fff !important;
	}
	
	.top-bar-bottom .header-logo {
		float: left;
		padding: 0 0 0;
		margin-top: 14px;
	}
	
	.header-logo > a
	{
		display:block;
	}

	.header-logo img
	{
		width:25% !Important;
	}

	nav.navbar.navbar-custom 
	{
		background: transparent;
		border: none;
		display: inline-block;
		vertical-align: text-top;
	}

	.full_width_bg.home
	{
		background: url(assets/img/banner212.jpg);
		background-position: center;
	}
	
	.header .top-bar-bottom{
		background:transparent;
	}
	
	.navbar-custom .navbar-nav>li>a{
		    padding-top: 25px;
	}
	
	.full_width_bg.home:before {
		content: ' ';
		background: rgba(0,0,0,0.4);
		width: 100%;
		position: absolute;
		height: 100%;
	}	
	
	.full_width_bg.home .navbar-custom .navbar-nav>li>a {
 		color: #FFF;
 	}
		
	.navbar-custom .navbar-nav>li>a {
		padding-top: 25px;
		font-size: 18px;
		letter-spacing: 1px;
		font-weight: bold;
	}	

	.navbar-custom .navbar-nav>li>a:hover ,
	.navbar-custom .navbar-nav>li>a:focus {
		background: transparent !important;
		color: #fcc623 !Important;
	}


	.top-bar-bottom .header-logo {
		margin-top: 6px;
	}

	
	</style>
    
  </head>

  <body>  
    <!-- Header Section Start -->
    <div class="full_width_bg <?php echo (isset($pg)) ? $pg : ""; ?>">    
		<div class="header">    

		  <!-- Start Top Bar -->
		  <div class="top-bar hide dp-none hidden ">
			<div class="container">
			  <div class="row">
				<div class="col-md-7 col-sm-6">
				  <!-- Start Contact Info -->
				  <ul class="contact-details">
					<li>
					  <a href="#">
					  <i class="icon-location-pin">
					  </i>
					  York Blvd, Los Angeles, US
					  </a>
					</li>
				  </ul>
				  <!-- End Contact Info -->
				</div>
				<div class="col-md-5 col-sm-6">
				  <!-- Start Social Links -->
				  <ul class="social-list">
					<li>
					  <a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
					  <a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
					  <a href="#"><i class="fa fa-google-plus"></i></a>
					</li>
					<li>
					  <a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
				  </ul>
				  <!-- End Social Links -->

				  <!-- Login Account Start -->
				  <div class="account-setting">
					<a href="signup.html">
					  <i class="icon-pencil"></i>
					  <span>Register</span>
					</a>/
					<a href="login.html">
					  <i class="icon-lock"></i>
					  <span>Login</span>
					</a>
				  </div>
				  <!-- Login Account End -->
				</div>
			  </div>
			</div>
		  </div>
		  <!-- End Top Bar -->

		  <!-- Start bottom Bar -->
		  <div class="top-bar-bottom">
			<div class="container">
			  <div class="row">
				<div class="col-md-5 col-sm-6">
				  <div class="header-logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo  ASSETS_URL; ?>img/logo.png" alt=""  style="width:168px;"></a>
				  </div>

				</div>
				
				<!--- HIDE DIV ---->

				<div class="col-md-7 col-sm-6">
				  <nav class="navbar navbar-custom">
					<div class="container">
					  <div class="row">
						<div class="navbar-header">
						  <!-- Stat Toggle Nav Link For Mobiles -->
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars"></i>
						  </button>
						  <div class="logo-wrapper hidden">
							<a class="navbar-brand" href="">
							  <img src="<?php echo  ASSETS_URL; ?>img/logo.png" alt="">
							</a>  
						  </div>
						</div>
						<div class="navbar-collapse collapse">
						  <!-- Start Navigation List -->
						  <ul class="nav navbar-nav">
							<li>
							  <a class="active" href="<?php echo base_url();?>">
							  Home
							  </a>
							</li>
							<li>
							  <a href="#">
							  About Us
							  </a>
							</li>
							<li>
							  <a href="#">
							  Prorperty
							  </a>
							</li>
							<li>
							  <a href="contact">
							  Contact Us
							  </a>
							</li>
						  </ul>
						  <!-- End Navigation List -->
						</div>
					  </div>
					</div>
					<!-- End Header Logo & Naviagtion -->
				  </nav>

						
			</div>
				
			
				<!--- HIDE DIV ---->
		
				  <nav class="navbar navbar-custom">
					<!-- Mobile Menu Start -->
					<ul class="mobile-menu">
					  <li>
						<a class="active" href="<?php echo base_url();?>">
						Home
					  </a>
					  <li>
						<a class="active" href="<?php echo base_url();?>contact">
						Contact
					  </a>
					</li>
					</ul>
					<!-- Mobile Menu End -->

				  </nav>
				
				
			  </div>
			</div>
		  </div>
		  <!-- End Bottom Bar -->      
		</div>
		<!-- Header Section End -->
       
	<style>
		.d-block
		{
			display:block;
		}
 
	</style>
	