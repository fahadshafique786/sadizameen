    
    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row">
            <!-- Start Contact Widget -->
            <div class="col-md-4 col-sm-6 col-xs-12">
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
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="footer-widget">
                <h4>
                  Contact Info
                </h4>
                <ul class="address">
                  <li>
                    <a href="#"><i class="icon-location-pin"></i> DHA 3 , LAHORE, PAKISTAN</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-phone"></i> (518) 2014-040 43</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-envelope"></i> info@sadizameen.com</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-fax"></i> FAX:(123) 123-4567</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Address Widget -->

            <!-- Start latest Work Posts Widget -->
            <div class="col-md-4 col-sm-6 col-xs-12">
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
                <p>&copy; All rights reserved 2020 - Designed & Developed by <a href="#">Mind2c</a></p>
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
      
      <!-- Google Maps API -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>
      <!-- Google Maps JS Only for Contact Pages -->
      <script type="text/javascript">
        var map;
        var defult = new google.maps.LatLng(50.8452321, 4.3577968,17.29);
        var mapCoordinates = new google.maps.LatLng(50.8452321, 4.3577968,17.29);   
        var markers = [];
        var image = new google.maps.MarkerImage(
          '<?php echo  ASSETS_URL; ?>img/map-marker.png',
          new google.maps.Size(84, 70),
          new google.maps.Point(0, 0),
          new google.maps.Point(60,60)
        );    
        function addMarker() {
          markers.push(new google.maps.Marker({
            position: defult,
            raiseOnDrag: false,
            icon: image,
            map: map,
            draggable: false
          }));      
        }    
        function initialize() {
          var mapOptions = {
            backgroundColor: "#ffffff",
            zoom: 15,
            disableDefaultUI: true,
            center: mapCoordinates,
            zoomControl: false,
            scaleControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
              "featureType": "landscape.natural",
              "elementType": "geometry.fill",
              "stylers": [{
                "color": "#ffffff"
              }
                         ]
            }
                     , {
                       "featureType": "landscape.man_made",
                       "stylers": [{
                         "color": "#ffffff"
                       }
                                   , {
                                     "visibility": "off"
                                   }
                                  ]
                     }
                     , {
                       "featureType": "water",
                       "stylers": [{
                         "color": "#80C8E5"
                       }
                                   , {
                                     "saturation": 0
                                   }
                                  ]
                     }
                     , {
                       "featureType": "road.arterial",
                       "elementType": "geometry",
                       "stylers": [{
                         "color": "#999999"
                       }
                                  ]
                     }
                     , {
                       "elementType": "labels.text.stroke",
                       "stylers": [{
                         "visibility": "off"
                       }
                                  ]
                     }
                     , {
                       "elementType": "labels.text",
                       "stylers": [{
                         "color": "#333333"
                       }
                                  ]
                     }
                     
                     , {
                       "featureType": "road.local",
                       "stylers": [{
                         "color": "#dedede"
                       }
                                  ]
                     }
                     , {
                       "featureType": "road.local",
                       "elementType": "labels.text",
                       "stylers": [{
                         "color": "#666666"
                       }
                                  ]
                     }
                     , {
                       "featureType": "transit.station.bus",
                       "stylers": [{
                         "saturation": -57
                       }
                                  ]
                     }
                     , {
                       "featureType": "road.highway",
                       "elementType": "labels.icon",
                       "stylers": [{
                         "visibility": "off"
                       }
                                  ]
                     }
                     , {
                       "featureType": "poi",
                       "stylers": [{
                         "visibility": "off"
                       }
                                  ]
                     }
                     
                    ]
            
          }
              ;
          map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
          addMarker();
          
        }
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>   
    
  </body>
</html>