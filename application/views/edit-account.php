<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Hourly Discounts</title>
  <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url(); ?>css/postcoupon.css" rel='stylesheet' type='text/css' />

  <link href="<?php echo base_url(); ?>css/common.css" rel='stylesheet' type='text/css' />
  <link  rel="icon" href="<?php echo base_url(); ?>images/hd-logo.png" type="image/png" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
</head>
<body>
  <header>
    <?php echo $navbar; ?>
  </header>
  <div class="container">
    <section class="login-page">
      <div class="form">
        <div id="signup">
          <div class="quote-banner"><h2>COMPLETE ACCOUNT</h2></div>
          <form action="<?php echo base_url(); ?>/index.php/welcome/reqpending" method="post" enctype="multipart/form-data">
            <div class="field-wrap">
              <center><img alt="coupon-logo" id="prev" class="coupon-logo" src="<?php echo base_url(); ?>images/people.png"></center>
              <center><div class="btn-style-2" id="imgbtn" onclick="showpanel()">Change Pic</div></center>
              <input type="file" accept="image/*" required name="profile" id="logo" onchange="preview(this)" />
            </div>
            <div class="top-row">
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="First Name" name="fname"/>
              </div>
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="Last Name" name="lname"/>
              </div>
            </div>
            <div class="field-wrap">
              <input type="text" required autocomplete="off" placeholder="Company Name" name="cname"/>
            </div>
            <div class="field-wrap">
              <input type="email" required autocomplete="off" placeholder="Email Address" name="cemail"/>
            </div>

            <div class="field-wrap">
              <input type="text" pattern="[0-9]*" required autocomplete="off" placeholder="Phone No" name="pno"/>
            </div>

            <div class="field-wrap" id="address">
              <input id="pac-input" class="controls" type="text" placeholder="Search Box">
              <div id="map-canvas">
                <!--<div class="sub-menu" id="address-submenu">
                <ul>
                <li><a href='#'><span>item 1</span></a></li>
                <li><a href='#'><span>item 2</span></a></li>
                <li><a href='#'><span>item 3</span></a></li>
                <li><a href='#'><span>item 4</span></a></li>
              </ul>
            </div>-->
          </div>
          <div class="field-wrap">
            <input id="lng" name="lng" required type="text">
            <input id="lat" name="lat" required type="text">
            <input type="text" required autocomplete="off" placeholder="Address" id="addr" name="addr"/>
          </div>
          <!--
          <div class="field-wrap">
          <input type="password" required autocomplete="off" placeholder="Set a password"/>
        </div>
        <div class="field-wrap">
        <input type="password" required autocomplete="off" placeholder="Confirm password"/>
      </div>-->
      <button type="submit" class="button button-block">Get Started</button>
    </form>
  </div>
</div> <!-- /form -->
</section>
<footer class="footer-distributed">
  <div class="footer-left">
    <h3>Hourly<span>Discount</span></h3>
    <p class="footer-links">
      <a href="#">Home</a>
      -
      <a href="#">Blog</a>
      -
      <a href="#">Pricing</a>
      -
      <a href="#">About</a>
      -
      <a href="#">Faq</a>
      -
      <a href="#">Contact</a>
    </p>
    <p class="footer-company-name">HourlyDiscount &copy; 2015</p>
  </div>
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Lorem ipsum dolor sit amet</span> Mumbai, India</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>+1 555 123456</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">support@company.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About the company</span>
      Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>
    <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>
  </div>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/common.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
var map1;
function initialize() {
  var markers = [];
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(-20, -20),
    new google.maps.LatLng(20, 20));
    map.fitBounds(defaultBounds);
    // Create the search box and link it to the UI element.
    var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      var searchBox = new google.maps.places.SearchBox(
        /** @type {HTMLInputElement} */(input));
        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox, 'places_changed', function() {
          var places = searchBox.getPlaces();
          if (places.length == 0) {
            return;
          }
          for (var i = 0, marker; marker = markers[i]; i++) {
            marker.setMap(null);
          }
          // For each place, get the icon, place name, and location.
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          for (var i = 0, place; place = places[i]; i++) {
            var image = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
            // Create a marker for each place.
            bounds.extend(place.geometry.location);
          }
          map.fitBounds(bounds);
        });
        // my code
        google.maps.event.addListener(markers, "click", function (event) {
          var latitude = event.latLng.lat();
          var longitude = event.latLng.lng();
          console.log( latitude + ', ' + longitude );
        });
        // [END region_getplaces]
        // Bias the SearchBox results towards places that are within the bounds of the
        // current map's viewport.
        google.maps.event.addListener(map, 'bounds_changed', function() {
          var bounds = map.getBounds();
          searchBox.setBounds(bounds);
        });
        google.maps.event.addListener(map, 'click', function(event) {
          //placeMarker(event.latLng);
          for (var i = 0, marker; marker = markers[i]; i++) {
            marker.setMap(null);
          }
          var latitude = event.latLng.lat();
          var longitude = event.latLng.lng();
          document.getElementById("lat").value=latitude;
          document.getElementById("lng").value=longitude;
          var latLng = new google.maps.LatLng(latitude,longitude);
          // Create a marker for each place.
          var marker = new google.maps.Marker({
            map: map,
            position: latLng
          });
          markers.push(marker);
          var latlng = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng());
          var geocoder = geocoder = new google.maps.Geocoder();
          geocoder.geocode({ 'latLng': latlng }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              if (results[1]) {
                document.getElementById("addr").value = results[1].formatted_address;
              }
            }
          });
          markers.push(marker);
        });
      }
      function showpanel(){
        document.getElementById("logo").click();
      }
      function preview(object){
        var file = object.files[0];
        var imageType = /image.*/;
        var img=document.getElementById("prev");
        if(!file.type.match(imageType)){
          object.value=null;
          img.src=defaultSrc;
          return;//error file not an Image
        }
        img.file = file;
        var reader = new FileReader();
        reader.onload = (function(aImg) {
          return function(e) {
            aImg.src = e.target.result;
          };
        })(img);
        reader.readAsDataURL(file);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      var defaultSrc = document.getElementById("prev").src;
      </script>
    </body>
    </html>
