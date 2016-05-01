<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($cid)){
  $coupon_desc = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ";
  $discount = "20%";
  $time = "01:02:33";
  $addr = "Location";
  $img = "images/coupon-thumbnail.jpg";
}
else {
  $img = "images/logos/$coupon_id".".jpg";
}
?>
<li>
  <div class="coupon-container">
    <img alt="bg" src="<?php echo base_url().$img; ?>">
    <div class="desc-container"><p><?php echo $coupon_desc ?></p></div>
    <div class="categories">
      <i class="fa fa-cutlery circle"></i>
      <i class="fa fa-plane circle"></i>
      <i class="fa fa-ticket circle"></i>
      <i class="fa fa-pinterest circle"></i>
    </div>
    <h3>16 char long title</h3>
    <h1> <?php echo $discount."%" ?></h1>
    <div class="coupon-footer-bought"><i class="fa fa-user"></i> 23567</div>
    <div class="coupon-footer-location"><i class="fa fa-map-marker"></i><?php echo $addr; ?></div>
    <div class="coupon-validity"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $time; ?></div>
  </div>
</li>
