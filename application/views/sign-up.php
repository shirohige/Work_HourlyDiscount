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
        <ul class="tab-group">
          <li class="tab active"><a href="#signup">Sign Up</a></li>
          <li class="tab"><a href="#login">Log In</a></li>
        </ul>
        <div class="tab-content">
          <div id="signup">
            <div class="quote-banner"><h2>JOIN US</h2></div>
            <form action="<?php echo base_url(); ?>index.php/welcome/register" method="post">
              <div class="field-wrap">
                <input type="email" required autocomplete="off" placeholder="Email Address" name='email' id='email'/>
              </div>
              <div class="field-wrap">
                <input type="password" required autocomplete="off" placeholder="Set a password"name='pass' id='pass'/>
              </div>
              <div class="field-wrap">
                <input type="password" required autocomplete="off" placeholder="Confirm password"/>
              </div>
              <button type="submit" class="button button-block">Get Started</button>
            </form>
          </div>
          <div id="login">
            <form action="<?php echo base_url(); ?>index.php/welcome/login" method="post">
              <div class="field-wrap">
                <input type="email" required autocomplete="off" placeholder="Email address" name='email' id='name'/>
              </div>
              <div class="field-wrap">
                <input type="password" required autocomplete="off" placeholder="Password" name='pass' id='pass'/>
              </div>
              <button class="button button-block">LogIn</button>
            </form>
          </div>
        </div><!-- tab-content -->
      </div> <!-- /form -->
    </section>
    <?php include 'footer.php' ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/common.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js">
  </script>
</body>
</html>
