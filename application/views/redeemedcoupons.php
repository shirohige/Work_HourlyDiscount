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
      <h2>Redeemed Coupons</h2>
    </section>
    <section class="coupons">
      <ul>
        <ul id="dynamic-coupons">
          <?php
          for($i=0;$i<20;$i++){
            echo $coupon;
          }
          ?>
        </ul>
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
