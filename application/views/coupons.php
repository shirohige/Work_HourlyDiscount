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
    <section class="cp-menu">
      <ul>
        <li>
          <a href="<?php echo base_url(); ?>/index.php/welcome/addcoupon">
            <h2>Add Coupons</h2>
            <span class="fa-6"><i class="fa fa-plus-square-o "></i></span>

          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>/index.php/welcome/editaccount">
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
      <ul id="dynamic-coupons">
        <?php
        for($i=0;$i<20;$i++){
          echo $coupon;
        }
        ?>
      </ul>
    </section>
    <?php include 'footer.php' ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/common.js"></script>

</body>
</html>
