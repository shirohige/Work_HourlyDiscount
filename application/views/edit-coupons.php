<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Hourly Discounts</title>
  <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />

  <link href="<?php echo base_url(); ?>css/postcoupon.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url(); ?>css/add-coupon.css" rel='stylesheet' type='text/css' />
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
                <div class="quote-banner"><h2>EDIT COUPON</h2></div>
              <form action="/" method="post">
                <div class="field-wrap">
                  <center><img alt="coupon-logo" class="coupon-logo" src="<?php echo base_url(); ?>images/coupon-logo.png"></center>
                  <center><div class="btn-style-2" >Upload Logo</div></center>
                </div>
                <div class="field-wrap">
                  <input type="text" pattern="[0-9]*"  required autocomplete="off" placeholder="Discount %"/>
                </div>
                <div class="field-wrap">
                  <textarea rows="4" cols="50" placeholder="Desciption maximum 20-30 words"></textarea>
                </div>
                <div class="top-row">
                  <div class="field-wrap" id="category">


                    <input type="text" placeholder="Category" required autocomplete="off" />
                    <div class="sub-menu" id="category-submenu">
                      <ul>
                        <li><a href='#'><span>item 1</span></a></li>
                        <li><a href='#'><span>item 2</span></a></li>
                        <li><a href='#'><span>item 3</span></a></li>
                        <li><a href='#'><span>item 4</span></a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="field-wrap" id="Sub-Category">

                    <input type="text" placeholder="sub-category" required autocomplete="off"/>
                    <div class="sub-menu" id="sub-category-submenu">
                      <ul>
                        <li><a href='#'><span>item 1</span></a></li>
                        <li><a href='#'><span>item 2</span></a></li>
                        <li><a href='#'><span>item 3</span></a></li>
                        <li><a href='#'><span>item 4</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="field-wrap" id="days">
                  <input type="text" required autocomplete="off" placeholder="Choose days applicable ..."/>
                  <div class="sub-menu" id="days-submenu">
                    <ul>
                      <li><a href='#'><span>Monday</span></a></li>
                      <li><a href='#'><span>Tuesday</span></a></li>
                      <li><a href='#'><span>Wednesday</span></a></li>
                      <li><a href='#'><span>Thrusday</span></a></li>
                      <li><a href='#'><span>Friday</span></a></li>
                      <li><a href='#'><span>Saturday</span></a></li>
                      <li><a href='#'><span>Sunday</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="top-row">
                  <div class="field-wrap">
                    <input type="text" pattern="[0-9]*"  required autocomplete="off" placeholder="From (24-hour format)"/>

                  </div>
                  <div class="field-wrap">
                    <input type="text" pattern="[0-9]*"  required autocomplete="off" placeholder="To (24-hour format)"/>
                  </div>

                </div>

                <button type="submit" class="button button-block">Post</button>

              </form>

            </div>





        </div> <!-- /form -->





      </section>
      <?php include 'footer.php' ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/common.js"></script>


  </body>
  </html>
