<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="EstateX">
    <title>Map EstateX – Real Estate Theme Bootstrap HTML5 Template</title>

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

    <!-- Google Maps -->
    <style>
      #google-map,
      body,
      html {
        padding: 0;
        height: 600px;
      }
    </style>       
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
                      <a href="normal-slider.html">
                        Home V2 + Theme Slider
                      </a>
                    </li>   
                    <li>
                      <a class="active" href="large-map.html">
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
              <a href="normal-slider.html">
                Home V2 + Theme Slider
              </a>
            </li>   
            <li>
              <a class="active" href="large-map.html">
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
              Simple Listing
              </a>
            </li>
            <li>
              <a href="listingmap.html">
              Simple Listing With Google Map
              </a>
            </li>
            <li>
              <a href="gridlisting.html">
              Grid Listing
              </a>
            </li>
            <li>
              <a href="listing-map.html">
              Grid Listing with Google Map
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
    
    <!-- Large Map -->
    <div id="google-map"></div>