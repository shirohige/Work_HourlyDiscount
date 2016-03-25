<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Hourly Discounts</title>
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/postcoupon.css" rel='stylesheet' type='text/css' />

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
    <?php echo $navbar; ?>

  </header>
  <div class="container adjust">

    <div class="form">
      Thank you for registering .We are validating the information submitted and the account will be activated after the validation is completed.Validation should ideally take less than 24 hours.<br>For more information/questions contact no +91 9029765550
    </div>

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
