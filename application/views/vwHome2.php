<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="EstateX">
    <title>EstateX – Real Estate Theme Bootstrap HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo  ASSETS_URL; ?>img/favicon.png">

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

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo  ASSETS_URL; ?>css/colors/green.css" media="screen" />

  </head>

  <body>
    <!-- Header Section Start -->
    <div class="header">

      <!-- Start Top Bar -->
      <div class="top-bar">
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
                <a href="index.html"><img src="<?php echo  ASSETS_URL; ?>img/logo.png" alt=""></a>
              </div>
              <div class="name-title">
                Multi-purpose Real Estate <br> HTML5 Template
              </div>
            </div>
            <div class="col-md-7 col-sm-6">
              <div class="contact pull-right">
                <div class="call">
                  <h3><i class="icon-phone"></i> (213) 974-3211</h3>
                  <p>hello@estatex.com</p>
                </div>
                  <div class="box-language">
                    <form id="form-language">
                      <div class="btn-group toggle-wrap">
                      <span class="toggle">
                        <span>English</span>
                        <span class="hidden">Language</span>
                      </span>
                      <ul style="display: none;" class="toggle_cont pull-right">
                        <li>
                        <button class="language-select selected" type="button" name="en-gb">
                        <img src="<?php echo  ASSETS_URL; ?>img/language/en-gb.png" alt="English" title="English" height="11" width="16">
                        English </button>
                        </li>
                        <li>
                        <button class="language-select" type="button" name="de-DE">
                        <img src="<?php echo  ASSETS_URL; ?>img/language/de-DE.png" alt="Deutsch" title="Deutsch" height="11" width="16">
                        Deutsch </button>
                        </li>
                        <li>
                        <button class="language-select" type="button" name="ru-ru">
                        <img src="<?php echo  ASSETS_URL; ?>img/language/ru-ru.png" alt="Русский" title="Русский" height="11" width="16">
                        Русский </button>
                        </li>
                      </ul>
                    </div>
                    </form>
                  </div>
                  <div class="box-currency">
                    <form method="post" id="form-currency">
                      <div class="btn-group toggle-wrap">
                        <span class="toggle">
                          <span>USD</span>
                          <span class="hidden">Currency</span>
                        </span>
                        <ul class="toggle_cont pull-right">
                          <li>
                          <button class="currency-select selected" type="button" name="USD">
                          $ USD </button>
                          </li>
                          <li>
                          <button class="currency-select" type="button" name="EUR">
                          € EUR
                          </button>
                          </li>
                          <li>
                          <button class="currency-select" type="button" name="GBP">
                          £ GBP </button>
                          </li>
                        </ul>
                      </div>
                    </form>
                  </div>
                  <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Bottom Bar -->

      <!-- Start  Logo & Naviagtion  -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="row">
            <div class="navbar-header">
              <!-- Stat Toggle Nav Link For Mobiles -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
              <div class="logo-wrapper hidden">
                <a class="navbar-brand" href="index.html">
                  <img src="<?php echo  ASSETS_URL; ?>img/logo.png" alt="">
                </a>  
              </div>
            </div>
            <div class="navbar-collapse collapse">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav">
                <li>
                  <a class="active" href="index.html">
                  Home
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="index.html">
                        Home V1 + Rev Slider
                      </a>
                    </li>  
                    <li>
                      <a class="active" href="normal-slider.html">
                        Home V2 + Theme Slider
                      </a>
                    </li>   
                    <li>
                      <a href="large-map.html">
                        Home V3 + Large Map
                      </a>
                    </li>   
                  </ul>
                </li>
                <li>
                  <a href="listing.html">
                  Listing
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="#">Simple Listing</a>
                      <ul>
                        <li>
                          <a href="listing.html">
                          Simple Listing 1
                          </a>
                        </li>
                        <li>
                          <a href="listingmap.html">
                          Simple Listing 2
                          </a>                       
                        </li> 
                      </ul>
                    </li>
                    <li>
                      <a href="#">Grid Listing</a>
                      <ul>
                        <li>
                          <a href="gridlisting.html">
                          Grid Listing 1
                          </a>
                        </li>
                        <li>
                          <a href="listing-map.html">
                          Grid Listing 2
                          </a>
                        </li>
                      </ul>
                    </li>                                 
                  </ul>
                </li>
                <li>
                  <a href="property.html">
                  Property
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="property.html">
                      Default- Variation
                      </a>
                    </li>
                    <li>
                      <a href="single-property.html">
                        Single Property
                      </a>
                    </li>
                    <li>
                      <a href="full-gallery.html">
                        Full Width Gallery
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="news.html">
                  News
                  </a>
                </li>
                <li>
                  <a href="portfolio-4.html">
                  Gallery
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="portfolio-2.html">
                      2 Columns Gallery
                      </a>
                    </li>
                    <li>
                      <a href="portfolio-3.html">
                      3 Columns Gallery
                      </a>
                    </li>
                    <li>
                      <a href="portfolio-4.html">
                      4 Columns Gallery
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="about.html">
                  Pages
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="about.html">
                      About Us
                      </a>
                    </li>
                    <li>
                      <a href="agents.html">
                      Agents
                      </a>
                    </li>
                    <li>
                      <a href="rent.html">
                      For Rent
                      </a>
                    </li>
                    <li>
                      <a href="sale.html">
                      For Sale
                      </a>
                    </li>
                    <li>
                      <a href="miami-city.html">
                      Miami City
                      </a>
                    </li>
                    <li>
                      <a href="dashboard.html">
                      Dashboard
                      </a>
                    </li>
                    <li>
                      <a href="submission.html">
                      Submission Form
                      </a>
                    </li>
                     <li>
                      <a href="faq.html">
                      FAQs
                      </a>
                    </li>
                     <li>
                      <a href="testimonials.html">
                      Testimonials
                      </a>
                    </li>
                     <li>
                      <a href="typography.html">
                      Typography
                      </a>
                    </li>
                     <li>
                      <a href="columns.html">
                      Columns
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="single-family.html">
                  Types
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="single-family.html">
                      Single Family Home
                      </a>
                    </li>
                    <li>
                      <a href="apartment-building.html">
                      Apartment Building
                      </a>
                    </li>
                    <li>
                      <a href="apartemnt.html">
                      Apartment
                      </a>
                    </li>
                    <li>
                      <a href="office.html">
                      Office
                      </a>
                    </li>
                     <li>
                      <a href="shop.html">
                      Shop
                      </a>
                    </li>
                     <li>
                      <a href="viall.html">
                      Villa
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="contact.html">
                  Contact Us
                  </a>
                </li>
              </ul>
              <!-- End Navigation List -->
            </div>
          </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="active" href="index.html">
            Home
            </a>
            <ul class="dropdown">
              <li>
                <a href="index.html">
                  Home V1 + Rev Slider
                </a>
              </li>  
              <li>
                <a class="active" href="normal-slider.html">
                  Home V2 + Theme Slider
                </a>
              </li>   
              <li>
                <a href="large-map.html">
                  Home V3 + Large Map
                </a>
              </li>   
            </ul>
          </li>
          <li>
            <a href="listing.html">
            Listing
            </a>
            <ul class="dropdown">
              <li>
                <a href="listing.html">
                Simple Listing 1
                </a>
              </li>
              <li>
                <a href="listingmap.html">
                Simple Listing 2
                </a>
              </li>
              <li>
                <a href="gridlisting.html">
                Grid Listing 1
                </a>
              </li>
              <li>
                <a href="listing-map.html">
                Grid Listing 2
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="property.html">
            Property
            </a>
            <ul class="dropdown">
              <li>
                <a href="property.html">
                Default- Variation
                </a>
              </li>
              <li>
                <a href="single-property.html">
                  Single Property
                </a>
              </li>
              <li>
                <a href="full-gallery.html">
                  Full Width Gallery
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="news.html">
            News
            </a>
          </li>
          <li>
            <a href="portfolio-4.html">
            Gallery
            </a>
            <ul class="dropdown">
              <li>
                <a href="portfolio-2.html">
                2 Columns Gallery
                </a>
              </li>
              <li>
                <a href="portfolio-3.html">
                3 Columns Gallery
                </a>
              </li>
              <li>
                <a href="portfolio-4.html">
                4 Columns Gallery
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.html">
            Pages
            </a>
            <ul class="dropdown">
              <li>
                <a href="about.html">
                About Us
                </a>
              </li>
              <li>
                <a href="agents.html">
                Agents
                </a>
              </li>
              <li>
                <a href="rent.html">
                For Rent
                </a>
              </li>
              <li>
                <a href="sale.html">
                For Sale
                </a>
              </li>
              <li>
                <a href="miami-city.html">
                Miami City
                </a>
              </li>
              <li>
                <a href="dashboard.html">
                Dashboard
                </a>
              </li>
              <li>
                <a href="submission.html">
                Submission Form
                </a>
              </li>
              <li>
                <a href="faq.html">
                FAQs
                </a>
              </li>
               <li>
                <a href="testimonials.html">
                Testimonials
                </a>
              </li>
               <li>
                <a href="typography.html">
                Typography
                </a>
              </li>
               <li>
                <a href="columns.html">
                Columns
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="single-family.html">
            Types
            </a>
            <ul class="dropdown">
              <li>
                <a href="single-family.html">
                Single Family Home
                </a>
              </li>
              <li>
                <a href="apartment-building.html">
                Apartment Building
                </a>
              </li>
              <li>
                <a href="apartemnt.html">
                Apartment
                </a>
              </li>
              <li>
                <a href="office.html">
                Office
                </a>
              </li>
               <li>
                <a href="shop.html">
                Shop
                </a>
              </li>
               <li>
                <a href="viall.html">
                Villa
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">
            Contact Us
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>

    </div>
    <!-- Header Section End -->

    <!-- Main Slider Section -->
    <div id="carousel-area">
      <div id="carousel-slider" class="carousel slide" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-slider" data-slide-to="0" class="active">
          </li>
          <li data-target="#carousel-slider" data-slide-to="1">
          </li>
          <li data-target="#carousel-slider" data-slide-to="2">
          </li>
        </ol>
        <div class="carousel-inner">
          <!-- Carousel Items Strarts-->
          <div class="item active" style="background-image: url(<?php echo  ASSETS_URL; ?>img/slider/bg-1.jpg);">
            <div class="carousel-caption">
              <h2>
                Charming West Beautiful Villa
              </h2>
              <h3>
                <i class="icon-location-pin"></i> Capital District, New York, US
              </h3>
              <div class="price-sl">
                $ 125.000
              </div>
            </div>
          </div>
          <div class="item" style="background-image: url(<?php echo  ASSETS_URL; ?>img/slider/bg-2.jpg);">
            <div class="carousel-caption">
              <h2>
                House With Beautiful Scendery
              </h2>
              <h3>
                <i class="icon-location-pin"></i> Seattle, Washington, US
              </h3>
              <div class="price-sl">
                $ 255.000
              </div>
            </div>
          </div>

          <div class="item" style="background-image: url(<?php echo  ASSETS_URL; ?>img/slider/bg-3.jpg);">
            <div class="carousel-caption">
              <h2>
                Luxurious Huge Duplex
              </h2>
              <h3>
                <i class="icon-location-pin"></i> Los Angeles, California, US
              </h3>
              <div class="price-sl">
                $ 350.000
              </div>
            </div>
          </div>

        </div><!-- Carousel Item Ends -->
        <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
          <i class="icon-arrow-left">
          </i>
        </a>
        <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
          <i class="icon-arrow-right">
          </i>
        </a>
      </div>
    </div>
    <!-- Main Slider Section End-->

    <!-- Search Properties Start -->
    <section class="search-properties section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title">Search Properties</h2>
          </div>
          <!-- Start Search box -->
          <div class="search-bar">
            <div class="advanced-search">
              <form class="search-form" method="get">
                <div class="col-md-3 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="select">
                      <select class="dropdown-product selectpicker">
                        <option value="0">All Actions</option>
                        <option class="rentals">Rentals(15)</option>
                        <option value="sales">Sales(17)</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="styled-select location-select">
                      <select class="dropdown-product selectpicker">
                        <option value="0">All Types</option>
                        <option value="apartments">Apartments (2)</option>
                        <option value="condos">Condos (1)</option>
                        <option value="houses">Houses (2)</option>
                        <option value="industrial">Industrial (1)</option>
                        <option value="land">Land (2)</option>
                        <option value="offices">Offices (1)</option>
                        <option value="retail">Retail (2)</option>
                        <option value="villas">Villas (1)</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="styled-select location-select">
                      <select class="dropdown-product selectpicker">
                        <option>All Cities</option>
                        <option>New York</option>
                        <option>California</option>
                        <option>Washington</option>
                        <option>Birmingham</option>
                        <option>Chicago</option>
                        <option>Phoenix</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="styled-select location-select">
                      <select class="dropdown-product selectpicker">
                        <option>All Areas</option>
                        <option>Los Angeles</option>
                        <option>Chicago</option>
                        <option>Dallas</option>
                        <option>Houston</option>
                        <option>Miami</option>
                        <option>San Diego</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="styled-select location-select">
                      <select class="dropdown-product selectpicker">
                        <option>Bedrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="styled-select location-select">
                      <select class="dropdown-product selectpicker">
                        <option>Bathrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 search-col">
                  <div class="input-group-addon search-category-container">
                    <label class="styled-select location-select">
                      <select class="dropdown-product selectpicker">
                        <option>All Status</option>
                        <option>Invest</option>
                        <option>Sale</option>
                      </select>
                    </label>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="col-md-12">
            <a href="#" class="btn btn-common">Search</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Search Properties End -->

    <!-- Property Section Start -->
    <section class="property section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title">Latest in Sales</h2>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="property.html">
                      <img src="<?php echo  ASSETS_URL; ?>img/property/house-1.jpg" alt="">
                    </a>
                    <span class="label-featured">Featured</span>
                    <div class="label-inner">
                      <span class="label-status label">For Sale</span>
                    </div>
                    <div class="price">
                      <span class="item-price">$526.885</span>
                      <span class="item-sub-price">$3.500/sq ft</span>
                    </div>
                    <ul class="actions">
                      <li>
                        <span class="add-fav"><i class="icon-heart"></i></span>
                      </li>
                    </ul>
                  </figure>
                  <div class="item-body">
                    <h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
                    <div class="adderess"><i class="icon-location-pin"></i> Drive Street, Los Angeles, US</div>
                    <div class="info">
                     <p><span>Bedroom: 4</span><span>Bathroom: 2</span><span>Sq Ft: 2500</span></p>
                     <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-foot date hide-on-list">
                <div class="pull-left">
                  <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Will Ernest </a></p>
                </div>
                <div class="pull-right">
                  <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="property.html">
                      <img src="<?php echo  ASSETS_URL; ?>img/property/house-2.jpg" alt="">
                    </a>
                    <div class="label-inner">
                      <span class="label-status label">For Rent</span>
                    </div>
                    <div class="price">
                      <span class="item-price">$486.885</span>
                      <span class="item-sub-price">$3.500/sq ft</span>
                    </div>
                    <ul class="actions">
                      <li>
                        <span class="add-fav"><i class="icon-heart"></i></span>
                      </li>
                    </ul>
                  </figure>
                  <div class="item-body">
                    <h3 class="property-title"><a href="property.html">Amazing home for family</a></h3>
                    <div class="adderess"><i class="icon-location-pin"></i> Louis, Missouri, US</div>
                    <div class="info">
                     <p><span>Bedroom: 3</span><span>Bathroom: 2</span><span>Sq Ft: 750</span></p>
                     <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-foot date hide-on-list">
                <div class="pull-left">
                  <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Maria Barlow</a></p>
                </div>
                <div class="pull-right">
                  <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="property.html">
                      <img src="<?php echo  ASSETS_URL; ?>img/property/house-3.jpg" alt="">
                    </a>
                   <div class="label-inner">
                      <span class="label-status label">For Sale</span>
                    </div>
                    <div class="price">
                      <span class="item-price">$250.885</span>
                      <span class="item-sub-price">$2.500/sq ft</span>
                    </div>
                    <ul class="actions">
                      <li>
                        <span class="add-fav"><i class="icon-heart"></i></span>
                      </li>
                    </ul>
                  </figure>
                  <div class="item-body">
                    <h3 class="property-title"><a href="property.html">Gorgeous in green house</a></h3>
                    <div class="adderess"><i class="icon-location-pin"></i> Avenue C, New York, US</div>
                    <div class="info">
                     <p><span>Bedroom: 4</span><span>Bathroom: 3</span><span>Sq Ft: 750</span></p>
                     <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-foot date hide-on-list">
                <div class="pull-left">
                  <p class="prop-user-agent"><i class="icon-user"></i> <a href="agents.html">Janet Richmond</a></p>
                </div>
                <div class="pull-right">
                  <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="property.html">
                      <img src="<?php echo  ASSETS_URL; ?>img/property/house-4.jpg" alt="">
                    </a>
                    <div class="label-inner">
                      <span class="label-status label">For Sale</span>
                    </div>
                    <div class="price">
                      <span class="item-price">$676.885</span>
                      <span class="item-sub-price">$4.500/sq ft</span>
                    </div>
                    <ul class="actions">
                      <li>
                        <span class="add-fav"><i class="icon-heart"></i></span>
                      </li>
                    </ul>
                  </figure>
                  <div class="item-body">
                    <h3 class="property-title"><a href="property.html">Family home for sale</a></h3>
                    <div class="adderess"><i class="icon-location-pin"></i> Sacramento, Chicago, US</div>
                    <div class="info">
                     <p><span>Bedroom: 5</span><span>Bathroom: 4</span><span>Sq Ft: 900</span></p>
                     <p>Single Family Hom</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-foot date hide-on-list">
                <div class="pull-left">
                  <p class="prop-user-agent"><i class="icon-user"></i> <a href="agents.html">Samuel Palmer</a></p>
                </div>
                <div class="pull-right">
                  <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="property.html">
                      <img src="<?php echo  ASSETS_URL; ?>img/property/house-5.jpg" alt="">
                    </a>
                    <span class="label-featured">Featured</span>
                    <div class="label-inner">
                      <span class="label-status label">For Rent</span>
                    </div>
                    <div class="price">
                      <span class="item-price">$456.885</span>
                      <span class="item-sub-price">$3.000/sq ft</span>
                    </div>
                    <ul class="actions">
                      <li>
                        <span class="add-fav"><i class="icon-heart"></i></span>
                      </li>
                    </ul>
                  </figure>
                  <div class="item-body">
                    <h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
                    <div class="adderess"><i class="icon-location-pin"></i> 53 W 88th St, Dallas, US</div>
                    <div class="info">
                     <p><span>Bedroom: 3</span><span>Bathroom: 2</span><span>Sq Ft: 350</span></p>
                     <p>Apartment</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-foot date hide-on-list">
                <div class="pull-left">
                  <p class="prop-user-agent"><i class="icon-user"></i> <a href="agents.html">Will Ernest</a></p>
                </div>
                <div class="pull-right">
                  <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="property.html">
                      <img src="<?php echo  ASSETS_URL; ?>img/property/house-6.jpg" alt="">
                    </a>
                    <div class="label-inner">
                      <span class="label-status label">For Sale</span>
                    </div>
                    <div class="price">
                      <span class="item-price">$756.885</span>
                      <span class="item-sub-price">$6.500/sq ft</span>
                    </div>
                    <ul class="actions">
                      <li>
                        <span class="add-fav"><i class="icon-heart"></i></span>
                      </li>
                    </ul>
                  </figure>
                  <div class="item-body">
                    <h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
                    <div class="adderess"><i class="icon-location-pin"></i> 365 Webber Street, Washington</div>
                    <div class="info">
                     <p><span>Bedroom: 2</span><span>Bathroom: 1</span><span>Sq Ft: 250</span></p>
                     <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-foot date hide-on-list">
                <div class="pull-left">
                  <p class="prop-user-agent"><i class="icon-user"></i> <a href="agents.html">Maria Barlow</a></p>
                </div>
                <div class="pull-right">
                  <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="gridlisting.html" class="btn btn-common">Load More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Property Section End -->

      <!-- Property Highlights Start -->
      <section class="property-highlights">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <h2 class="title-hl">Property Highlights</h2>
              <p class="content-hl">Extensive upgrades and thorough maintenance have kept this home in prime condition. Hardwood floors and new carpets create a very comfortable living space.</p>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="features-box">
                    <div class="features-icon">
                      <i class="icon-map"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Quiet Neighbourhood
                      </h4>
                      <p>
                        Enjoy tranquil and relaxed atmosphere of the place
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="features-box">
                    <div class="features-icon">
                      <i class="icon-settings"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Great local community
                      </h4>
                      <p>
                        You will be delighted by the fantastic local community
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="features-box">
                    <div class="features-icon">
                     <i class="icon-hourglass"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Fabulous views
                      </h4>
                      <p>
                        Get yourself surrounded by the stunning view opening
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="features-box">
                    <div class="features-icon">
                      <i class="icon-layers"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Large play center in yard
                      </h4>
                      <p>
                        Your kids will be happy having all these things around
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-common">Learn More</a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="touch-slider owl-carousel">
                <div class="item">
                  <img src="<?php echo  ASSETS_URL; ?>img/featured/img1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="<?php echo  ASSETS_URL; ?>img/featured/img2.jpg" alt="">
                </div>
                <div class="item">
                  <img src="<?php echo  ASSETS_URL; ?>img/featured/img3.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Property Highlights Section -->

      <!-- Start Portfolio Section -->
      <section id="portfolio">
        <div class="container">
          <div class="row">
            <!-- Start Heading -->
            <div class="heading">
              <h2 class="section-title text-center">Our Gallery</h2>
            </div>
            <!-- End Heading -->
            <!-- Portfolio controls -->
            <div class="controls text-center">
              <a class="filter active" data-filter="all">All</a>
              <a class="filter" data-filter=".living">Living Room</a>
              <a class="filter" data-filter=".driveway">Driveway</a>
              <a class="filter" data-filter=".bedroom">Bedroom</a>
              <a class="filter" data-filter=".garage">Garage</a>
              <a class="filter" data-filter=".kitchen">Kitchen</a>
            </div>
            <!-- End Portfolio Controls -->
          </div>
        </div>
        <!-- Portfolio Recent Projects -->
        <div id="portfolio-list">
          <div class="col-md-3 col-sm-6 col-xs-12 mix living bedroom">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-1.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                  <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-1.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Beautiful House</a></h3>
                <p>Apartment, cottage, Retail</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix kitchen driveway">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-2.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                   <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-2.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">House bedroom</a></h3>
                <p>Apartment, Retail</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix living garage">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-3.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                  <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-3.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Grand Avenue</a></h3>
                <p>Cottage, Retail</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix driveway">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-4.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                    <a href="single-property.html"><i class="icon-link left"></i></a>
                    <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-4.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Anastasia Avenue</a></h3>
                <p>Industrial, Retail, Villa</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix kitchen bedroom">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-5.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                  <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-5.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Luxury House</a></h3>
                <p>Apartment, Retail</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix living garage">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-6.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                  <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-6.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Living Room</a></h3>
                <p>Apartment, Industrial, Land, Office</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix driveway garage">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-7.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                  <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-7.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Peaceful Home</a></h3>
                <p>Cottage, Industrial,Land</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 mix kitchen garage">
            <div class="portfolio-item">
              <img src="<?php echo  ASSETS_URL; ?>img/portfolio/img-8.jpg" alt="" />
              <div class="overlay">
                <div class="icon">
                  <a href="single-property.html"><i class="icon-link left"></i></a>
                  <a href="<?php echo  ASSETS_URL; ?>img/portfolio/img-8.jpg" class="lightbox"><i class="icon-eye right"></i></a>
                </div>
              </div>
              <div class="content">
                <h3><a href="#">Ancient Villa</a></h3>
                <p>Cottage, Industrial,Land, Office</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Portfolio  -->
      </section>
      <!-- End Portfolio Section -->

    <!-- Start features Section -->
    <div class="features section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6">
            <h2 class="section-title">Awesome Features</h2>
            <p class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta est, <br> itaque inventore, eum, hic ullam quos sint dolore doloremque rerum enim?
            </p>
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="features-box">
                  <div class="features-content">
                    <h4>
                      <i class="icon-magic-wand"></i> Full Furnished
                    </h4>
                    <p>
                      Lorem Is a dummy text do elud tempor dolor sit amet dum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="features-box">
                  <div class="features-content">
                    <h4>
                      <i class="icon-paper-plane"></i> Royal Touch Paint
                    </h4>
                    <p>
                      Lorem Is a dummy text do elud tempor dolor sit amet dum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="features-box">
                  <div class="features-content">
                    <h4>
                      <i class="icon-map"></i> Letest Interior Design
                    </h4>
                    <p>
                      Lorem Is a dummy text do elud tempor dolor sit amet dum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="features-box">
                  <div class="features-content">
                    <h4>
                     <i class="icon-settings"></i> Non Stop Security
                    </h4>
                    <p>
                      Lorem Is a dummy text do elud tempor dolor sit amet dum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="features-box">
                  <div class="features-content">
                    <h4>
                      <i class="icon-star"></i> Living Inside a Nature
                    </h4>
                    <p>
                      Lorem Is a dummy text do elud tempor dolor sit amet dum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="features-box">
                  <div class="features-content">
                    <h4>
                      <i class="icon-fire"></i> Luxurious Fittings
                    </h4>
                    <p>
                      Lorem Is a dummy text do elud tempor dolor sit amet dum
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="row">
              <div class="thum-ft">
                <img src="<?php echo  ASSETS_URL; ?>img/featured/img1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End features Section -->

    <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="desc">
                <div class="icon"><i class="icon-home"></i>
                  <h3 class="counter"> 999</h3>
                </div>
                <p>Complete Project</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="desc">
                <div class="icon">
                  <i class="icon-key"></i><h3 class="counter">720</h3>
                </div>
                <p>Property Sold</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="desc">
                <div class="icon">
                  <i class="icon-emotsmile"></i><h3 class="counter">450</h3>
                </div>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="desc">
                <div class="icon">
                  <i class="icon-cup"></i><h3 class="counter">120</h3>
                </div>
                <p>Awards Win</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    <!-- Latest Property Start -->
    <section class="latest-property" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 wow fadeIn" data-wow-delay="0.8s">
            <h3 class="section-title">Latest Listings</h3>
            <div id="latest-property" class="owl-carousel">
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <figure class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img src="<?php echo  ASSETS_URL; ?>img/latest/img1.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label">For Sale</span>
                        </div>
                        <div class="price">
                          <span class="item-price">$556.885</span>
                          <span class="item-sub-price">$3.500/sq ft</span>
                        </div>
                        <ul class="actions">
                          <li>
                            <span class="add-fav"><i class="icon-heart"></i></span>
                          </li>
                        </ul>
                      </figure>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Luxury Villa In Rego Park</a></h3>
                        <div class="adderess"><i class="icon-location-pin"></i> Drive Street, Los Angeles, US</div>
                        <div class="info">
                         <p><span>Bedroom: 3</span><span>Bathroom: 2</span><span>Sq Ft: 350</span></p>
                         <p>Single Family Home</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-foot date hide-on-list">
                    <div class="pull-left">
                      <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Will Ernest</a></p>
                    </div>
                    <div class="pull-right">
                      <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <figure class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img src="<?php echo  ASSETS_URL; ?>img/latest/img2.jpg" alt="">
                        </a>
                        <span class="label-featured">Featured</span>
                        <div class="label-inner">
                          <span class="label-status label">For Rent</span>
                        </div>
                        <div class="price">
                          <span class="item-price">$556.885</span>
                          <span class="item-sub-price">$3.500/sq ft</span>
                        </div>
                        <ul class="actions">
                          <li>
                            <span class="add-fav"><i class="icon-heart"></i></span>
                          </li>
                        </ul>
                      </figure>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
                        <div class="adderess"><i class="icon-location-pin"></i> Louis, Missouri, US</div>
                        <div class="info">
                         <p><span>Bedroom: 4</span><span>Bathroom: 2</span><span>Sq Ft: 750</span></p>
                         <p>Apartment</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-foot date hide-on-list">
                    <div class="pull-left">
                      <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Maria Barlow</a></p>
                    </div>
                    <div class="pull-right">
                      <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <figure class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img src="<?php echo  ASSETS_URL; ?>img/latest/img3.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label">For Sale</span>
                        </div>
                        <div class="price">
                          <span class="item-price">$556.885</span>
                          <span class="item-sub-price">$3.500/sq ft</span>
                        </div>
                        <ul class="actions">
                          <li>
                            <span class="add-fav"><i class="icon-heart"></i></span>
                          </li>
                        </ul>
                      </figure>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Villa On Washington Ave</a></h3>
                        <div class="adderess"><i class="icon-location-pin"></i>  365 Webber Street, Washington</div>
                        <div class="info">
                         <p><span>Bedroom: 3</span><span>Bathroom: 2</span><span>Sq Ft: 350</span></p>
                         <p>Single Family Home</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-foot date hide-on-list">
                    <div class="pull-left">
                      <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Janet Richmond</a></p>
                    </div>
                    <div class="pull-right">
                      <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <figure class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img src="<?php echo  ASSETS_URL; ?>img/latest/img4.jpg" alt="">
                        </a>
                        <span class="label-featured">Featured</span>
                        <div class="label-inner">
                          <span class="label-status label">For Rent</span>
                        </div>
                        <div class="price">
                          <span class="item-price">$556.885</span>
                          <span class="item-sub-price">$3.500/sq ft</span>
                        </div>
                        <ul class="actions">
                          <li>
                            <span class="add-fav"><i class="icon-heart"></i></span>
                          </li>
                        </ul>
                      </figure>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Boutique Space Greenville</a></h3>
                        <div class="adderess"><i class="icon-location-pin"></i>Sacramento, California, US</div>
                        <div class="info">
                         <p><span>Bedroom: 5</span><span>Bathroom: 3</span><span>Sq Ft: 900</span></p>
                         <p>Apartment</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-foot date hide-on-list">
                    <div class="pull-left">
                      <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Samuel Plamer</a></p>
                    </div>
                    <div class="pull-right">
                      <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <figure class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img src="<?php echo  ASSETS_URL; ?>img/latest/img5.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label">For Sale</span>
                          <span class="label label-default">Hot Offer</span>
                        </div>
                        <div class="price">
                          <span class="item-price">$556.885</span>
                          <span class="item-sub-price">$3.500/sq ft</span>
                        </div>
                        <ul class="actions">
                          <li>
                            <span class="add-fav"><i class="icon-heart"></i></span>
                          </li>
                        </ul>
                      </figure>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Restaurant & Bar Hudson</a></h3>
                        <div class="adderess"><i class="icon-location-pin"></i> 53 W 88th St, Dallas, US</div>
                        <div class="info">
                         <p><span>Bedroom: 2</span><span>Bathroom: 1</span><span>Sq Ft: 150</span></p>
                         <p>Single Family Home</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-foot date hide-on-list">
                    <div class="pull-left">
                      <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Will Ernest </a></p>
                    </div>
                    <div class="pull-right">
                      <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <figure class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img src="<?php echo  ASSETS_URL; ?>img/latest/img6.jpg" alt="">
                        </a>
                        <span class="label-featured">Featured</span>
                        <div class="label-inner">
                          <span class="label-status label">For Sale</span>
                        </div>
                        <div class="price">
                          <span class="item-price">$556.885</span>
                          <span class="item-sub-price">$3.500/sq ft</span>
                        </div>
                        <ul class="actions">
                          <li>
                            <span class="add-fav"><i class="icon-heart"></i></span>
                          </li>
                        </ul>
                      </figure>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
                        <div class="adderess"><i class="icon-location-pin"></i> Drive Street, Los Angeles, US</div>
                        <div class="info">
                         <p><span>Bedroom: 3</span><span>Bathroom: 4</span><span>Sq Ft: 550</span></p>
                         <p>Apartment</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-foot date hide-on-list">
                    <div class="pull-left">
                      <p class="prop-user-agent"><i class="icon-user"></i> <a href="#">Marria Barlow</a></p>
                    </div>
                    <div class="pull-right">
                      <p class="prop-date"><i class="icon-calendar"></i>2 months ago</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Property End -->

    <!-- Start Agent Member Section -->
    <section class="section">
      <div class="container">
        <!-- Start Big Heading -->
        <h2 class="section-title text-center">Meet Our Agent</h2>
        <!-- End Big Heading -->
        <!-- Some Text -->
        <p class="description text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta est, <br/>
        itaque inventore, eum, hic ullam quos sint dolore doloremque rerum enim?
        </p>
        <div class="row">
          <!-- Start Memebr 1 -->
          <div class="col-md-3 col-sm-6">
            <div class="agent-member">
              <div class="agent-thumbnail">
                <img src="<?php echo  ASSETS_URL; ?>img/agent/agent-01.png" alt="">
                <div class="overlay">
                  <div class="social-media">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="info">
                <h4>David Givens</h4>
                <p>Real Estate Agent</p>
                <a class="profile-link" href="agents.html">See Full Profile <i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Start Memebr 2 -->
          <div class="col-md-3 col-sm-6">
            <div class="agent-member">
              <div class="agent-thumbnail">
                <img src="<?php echo ASSETS_URL; ?>img/agent/agent-02.png" alt="">
                <div class="overlay">
                  <div class="social-media">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="info">
                <h4>Darrell S.Allen</h4>
                <p>Real Estate Agent</p>
                <a class="profile-link" href="agents.html">See Full Profile <i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Start Memebr 3 -->
          <div class="col-md-3 col-sm-6">
            <div class="agent-member">
              <div class="agent-thumbnail">
                <img src="<?php echo  ASSETS_URL; ?>img/agent/agent-03.png" alt="">
                <div class="overlay">
                  <div class="social-media">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="info">
                <h4>John Doe</h4>
                <p>Real Estate Agent</p>
                <a class="profile-link" href="agents.html">See Full Profile <i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Start Memebr 4 -->
          <div class="col-md-3 col-sm-6">
            <div class="agent-member">
              <div class="agent-thumbnail">
                <img src="<?php echo  ASSETS_URL; ?>img/agent/agent-04.png" alt="">
                <div class="overlay">
                  <div class="social-media">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="info">
                <h4>Justyna Michallek</h4>
                <p>Real Estate Broker</p>
                <a class="profile-link" href="agents.html">See Full Profile <i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 4 -->
        </div>
      </div>
    </section>
    <!-- Start Agent Member Section -->

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <h1 class="section-title">
          From The Blog
        </h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="blog-details.html">
                  <img src="<?php echo  ASSETS_URL; ?>img/blog/home-items/img1.jpg" alt="">
                </a>
                <a href="#" class="blog-date">
                  10 <br> OCT
                </a>
                <div class="blog-item-info">
                  <a href="#">
                    <i class="icon-user">
                    </i>
                    Smith
                  </a>
                  <a href="#">
                    <i class="icon-heart">
                    </i>
                    9
                  </a>
                  <a href="#">
                    <i class="icon-bubbles">
                    </i>
                    10
                  </a>
                </div>
              </div>
              <div class="blog-item-text">
                <a href="blog-details.html">
                  <h3>
                    Latest Architectural Design
                  </h3>
                </a>
                <p>
                  Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad I will give you a complete pain was parising
                </p>
                <a href="blog-details.html" class="btn btn-common btn-sm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="blog-details.html">
                  <img src="<?php echo  ASSETS_URL; ?>img/blog/home-items/img2.jpg" alt="">
                </a>
                <a href="#" class="blog-date">
                  15 <br> OCT
                </a>
                <div class="blog-item-info">
                  <a href="#">
                    <i class="icon-user">
                    </i>
                    Alfred
                  </a>
                  <a href="#">
                    <i class="icon-heart">
                    </i>
                    18
                  </a>
                  <a href="#">
                    <i class="icon-bubbles">
                    </i>
                    20
                  </a>
                </div>
              </div>
              <div class="blog-item-text">
                <a href="blog-details.html">
                  <h3>
                    Real Estate Feswtival - 2017
                  </h3>
                </a>
                <p>
                  Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad I will give you a complete pain was parising
                </p>
                <a href="blog-details.html" class="btn btn-common btn-sm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="blog-details.html">
                  <img src="<?php echo  ASSETS_URL; ?>img/blog/home-items/img3.jpg" alt="">
                </a>
                <a href="#" class="blog-date">
                  17 <br> OCT
                </a>
                <div class="blog-item-info">
                  <a href="#">
                    <i class="icon-user">
                    </i>
                    Zenefer
                  </a>
                  <a href="#">
                    <i class="icon-heart">
                    </i>
                    19
                  </a>
                  <a href="#">
                    <i class="icon-bubbles">
                    </i>
                    28
                  </a>
                </div>
              </div>
              <div class="blog-item-text">
                <a href="blog-details.html">
                  <h3>
                    Visual Design Concept of Real Estate
                  </h3>
                </a>
                <p>
                  Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad I will give you a complete pain was parising
                </p>
                <a href="blog-details.html" class="btn btn-common btn-sm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Clients Section -->
    <div class="clients section">
      <div class="container">
        <div class="row">
          <div id="clients-scroller">
            <div class="items">
              <img src="<?php echo  ASSETS_URL; ?>img/clients/img1.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo  ASSETS_URL; ?>img/clients/img2.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo  ASSETS_URL; ?>img/clients/img3.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo  ASSETS_URL; ?>img/clients/img4.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo  ASSETS_URL; ?>img/clients/img5.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo  ASSETS_URL; ?>img/clients/img6.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Client Section End -->

    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row">
            <!-- Start Contact Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget contact-widget">
                <h4>
                  <a href="index.html"><img src="<?php echo  ASSETS_URL; ?>img/logo.png" class="img-responsive" alt="Footer Logo" /></a>
                </h4>
                <p>
                  There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in
                </p>
              </div>
            </div>
            <!-- End Contact Widget -->

            <!-- Start Address Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget">
                <h4>
                  Contact Info
                </h4>
                <ul class="address">
                  <li>
                    <a href="#"><i class="icon-location-pin"></i> York Blvd, Los Angeles, US</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-phone"></i> (518) 2014-040 43</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-envelope"></i> hello@estatex.com</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-fax"></i> FAX:(123) 123-4567</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Address Widget -->

            <!-- Start latest Work Posts Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget">
                <h4>
                  Usefull Links
                </h4>
                <div class="footer-nav">
                  <ul>
                    <li><a href="#"><i class="icon-arrow-right"></i>Bayonne, New Jersey</a></li>
                    <li><a href="#"><i class="icon-arrow-right"></i>Greenville, New Jersey</a></li>
                    <li><a href="#"><i class="icon-arrow-right"></i>The Heights, New Jersey</a></li>
                    <li><a href="#"><i class="icon-arrow-right"></i>Bayonne, New Jersey</a></li>
                    <li><a href="#"><i class="icon-arrow-right"></i>Greenville, New Jersey</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End latest Work  Widget -->

            <!-- Start Text Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget">
                <h4>
                  Image Gallery
                </h4>
                <div class="flicker-gallery">
                  <a href="#"><img src="<?php echo  ASSETS_URL; ?>img/flicker/img1.png" alt=""></a>
                  <a href="#"><img src="<?php echo  ASSETS_URL; ?>img/flicker/img2.png" alt=""></a>
                  <a href="#"><img src="<?php echo  ASSETS_URL; ?>img/flicker/img3.png" alt=""></a>
                  <a href="#"><img src="<?php echo  ASSETS_URL; ?>img/flicker/img4.png" alt=""></a>
                  <a href="#"><img src="<?php echo  ASSETS_URL; ?>img/flicker/img5.png" alt=""></a>
                  <a href="#"><img src="<?php echo  ASSETS_URL; ?>img/flicker/img6.png" alt=""></a>
                </div>
              </div>
            </div>
            <!-- End Text Widget -->
          </div>
        </div>
      </footer>
      <!-- End Footer Section -->

      <!-- Start Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>&copy; All rights reserved 2017 - Designed & Developed by <a href="http://uideck.com">UIdeck</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Copyright -->

      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="icon-arrow-up"></i>
      </a>

      <!-- Start Loader -->
      <div id="loader">
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>

      <!-- All js here -->
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery-min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/bootstrap.min.js"></script>
 
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery.parallax.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/wow.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/main.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery.mixitup.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/nivo-lightbox.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/waypoints.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/form-validator.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/contact-form-script.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery.themepunch.revolution.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="<?php echo  ASSETS_URL; ?>js/jquery.slicknav.js"></script>
      <script src="<?php echo  ASSETS_URL; ?>js/bootstrap-select.min.js"></script>

  </body>
</html>
