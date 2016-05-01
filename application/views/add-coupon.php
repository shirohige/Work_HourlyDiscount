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
          <div class="quote-banner"><h2>ADD COUPON</h2></div>
          <form id="addcoupon" method="post" action="<?php echo base_url(); ?>index.php/welcome/createcoupon" enctype="multipart/form-data">
            <div class="field-wrap">
              <center><img alt="coupon-logo" id="prev" class="coupon-logo" src="<?php echo base_url(); ?>images/coupon-logo.png"></center>
              <center><div class="btn-style-2" id="imgbtn" onclick="showpanel()">Upload Logo</div></center>
              <input type="file" accept="image/*" required name="coupon-logo" id="logo" onchange="preview(this)" />
            </div>
            <div class="field-wrap">
              <input type="text" pattern="[0-9]*" name="discount"  required autocomplete="off" placeholder="Discount %"/>
            </div>
            <div class="field-wrap">
              <textarea rows="4" name="coupon_description" cols="50" placeholder="Desciption maximum 20-30 words"></textarea>
            </div>
            <div class="top-row">
              <div class="field-wrap" id="category">
                <input type="text" name="cat" placeholder="Category" id="category-input" required autocomplete="off" />
                <div class="sub-menu" id="category-submenu">
                  <ul>
                    <li><a class="category" value="Food"><span>Food</span></a></li>
                    <li><a class="category" value="Electronics"><span>Electronics</span></a></li>
                    <li><a class="category" value="Sports"><span>Sports</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="field-wrap" id="sub-category">
                <input type="text" name="sub-cat" placeholder="sub-category" id="sub-category-input" required autocomplete="off"/>
                <div class="sub-menu" id="sub-category-submenu">
                  <ul>
                    <li><a class="sub-category" value="Sub-Cat1"><span>Sub-Cat1</span></a></li>
                    <li><a class="sub-category" value="Sub-Cat2"><span>Sub-Cat2</span></a></li>
                    <li><a class="sub-category" value="Sub-Cat3"><span>Sub-Cat3</span></a></li>
                    <li><a class="sub-category" value="Sub-Cat4"><span>Sub-Cat4</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="top-row">
              <div class="field-wrap">
                <input type="text" pattern="[0-9]*" name="time_from"  required autocomplete="off" placeholder="From(24-hour format) eg:12"/>
                <input type="text" name="country" id="country">
                <input type="text" name="zone" id="zone">
              </div>
              <div class="field-wrap">
                <input type="text" pattern="[0-9]*" name="time_to"  required autocomplete="off" placeholder="To(24-hour format) eg:13"/>
              </div>
            </div>
            <div class="field-wrap" id="days">
              <input type="text" id="weekday-input" name="days" required autocomplete="off" placeholder="Choose days applicable ..."/>
              <div class="sub-menu" id="days-submenu">
                <ul>
                  <li><a class="weekday" value="Monday"><span>Monday</span></a></li>
                  <li><a class="weekday" value="Tuesday"><span>Tuesday</span></a></li>
                  <li><a class="weekday" value="Wednesday"><span>Wednesday</span></a></li>
                  <li><a class="weekday" value="Thursday"><span>Thrusday</span></a></li>
                  <li><a class="weekday" value="Friday"><span>Friday</span></a></li>
                  <li><a class="weekday" value="Saturday"><span>Saturday</span></a></li>
                  <li><a class="weekday" value="Sunday"><span>Sunday</span></a></li>
                </ul>
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
  <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>js/common.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#country').val(geoplugin_countryCode());
    $('#zone').val(geoplugin_regionCode());
  });
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
  var defaultSrc = document.getElementById("prev").src;
  </script>
</body>
</html>
