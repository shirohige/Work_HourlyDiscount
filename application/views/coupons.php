<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Hourly Discounts</title>
  <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />


  <link href="<?php echo base_url(); ?>css/coupons-page.css" rel='stylesheet' type='text/css' />
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
          <img alt="bg" src="<?php echo base_url(); ?>images/coupon-thumbnail.jpg">
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
    <script src="<?php echo base_url(); ?>js/common.js"></script>

  </body>
  </html>
