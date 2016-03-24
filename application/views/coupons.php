<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Hourly Discounts</title>
  <link href="css/style.css" rel='stylesheet' type='text/css' />


  <link href="css/coupons-page.css" rel='stylesheet' type='text/css' />
  <link href="css/common.css" rel='stylesheet' type='text/css' />
  <link  rel="icon" href="images/hd-logo.png" type="image/png" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
</head>
<body>
  <header>
    <nav>
      <div class="mobile-nav-bar hidden">
        <div class="mobile-header-container"><span class="brand-header">Hourly Discounts</span></div>

        <div class="hamburger-button" id="nav-icon4">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="sub-menu" id="mobile-navbar-submenu">
          <ul>
            <li><a href='index.html'><span>Home</span></a></li>
            <li><a href='about.html'><span>About</span></a></li>
            <li><a href='postcoupon.html'><span>Post Coupons</span></a></li>
            <li><a href='index.html#search'><span>Search</span></a></li>
          </ul>
        </div>
      </div>

      <ul class="primary-navbar secondary-navbar" >
        <li class=" col-2"><a href="index.html">Home</a></li>
        <li class="col-2"><a href="about.html">About Us</a></li>
        <li class="col-4 brand"><span class="brand-header">HourlyDiscounts</span><br><span class="brand-slogan">Hot Deals on the go!</span></li>
          <li class=" col-2"><a href="postcoupon.html">Post Coupons</a></li>
					<li class="col-2"><a href="index.html#search">Search</a></li>
        </ul>
      </nav>

    </header>
    <div class="container">
      <section class="quote-banner">
        <h2>CONTROL PANEL</h2>
      </section>
      <section class="coupons cp-menu">
      <ul>
        <li>
          <a href="add-coupon.html">
          <h2>Add Coupons</h2>
          <span class="fa-6"><i class="fa fa-plus-square-o "></i></span>

        </a>
        </li>
        <li>
          <a href="edit-account.html">
          <h2>Edit Account</h2>
          <span class="fa-6"><i class="fa fa-pencil-square-o"></i></span>

        </a>
        </li>

      </ul>



      </section>
      <section class="quote-banner position">
        <h2>CURRENTLY ACTIVE COUPONS</h2>
      </section>
      <section class="coupons fix">
    <ul>
      <li>
        <div class="top-container">
          <img alt="bg" src="images/coupon-thumbnail.jpg">
          <div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
        </div>
        <div class="bottom-container">
          <h3>Lorem ipsum</h3>
          <h1>20%</h1>
          <h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
          <h6 ><i class="fa fa-map-marker"></i> Location</h6>
        </div>

      </li>
    </ul>
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
    <script>

    $(document).ready(function(){
      $('.secondary-navbar').css('opacity', '1');

      var flag=0;
      $( ".hamburger-button" ).click(function() {
                	$(this).toggleClass('open');
        if(flag==0)
        {
          $('#mobile-navbar-submenu').css('height', '150px');


          flag=1;
        }
        else if(flag==1)
        {
          $('#mobile-navbar-submenu').css('height', '0px');

          flag=0;
        }

      });


    });

    </script>
  </body>
  </html>
