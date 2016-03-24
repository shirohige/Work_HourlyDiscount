<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
        <li><a href='<?php echo base_url(); ?>index.php/welcome'><span>Home</span></a></li>
        <li><a href='about.html'><span>About</span></a></li>
        <li><a href='sign-up.html'><span>Post Coupons</span></a></li>
        <li><a href='sign-up.html'><span>Sign-In</span></a></li>

      </ul>
    </div>
  </div>
  <ul class="primary-navbar">
    <li class=" col-2"><a href="<?php echo base_url(); ?>index.php/welcome">Home</a></li>
    <li class="col-2"><a href="about.html">About</a></li>
    <li class="col-4 brand"><span class="brand-header">HourlyDiscounts</span><br><span class="brand-slogan">Hot Deals on the go!</span></li>
    <li class=" col-2"><a href="postcoupon.html">Post Coupons</a></li>
    <li class="col-2"><a href="" id="profile">Profile <span><i class="fa fa-caret-right"></i></span></a></li>
  </ul>
  <ul class="primary-navbar secondary-navbar" >
    <li class=" col-2"><a href="index.html">Home</a></li>
    <li class="col-2"><a href="about.html">About</a></li>
    <li class="col-4 brand"><span class="brand-header">HourlyDiscounts</span><br><span class="brand-slogan">Hot Deals on the go!</span></li>
    <li class=" col-2"><a href="sign-up.html">Post Coupons</a></li>
    <li class="col-2" ><a href="sign-up.html" >Sign-In </a></li>
  </ul>
  <div class="blur" id="blur"></div>
  <div class="side-menu" id="side-menu">
    <ul>
      <a href='edit-account.html'><div class="circle"><img src="<?php echo base_url(); ?>images/people.png"></div></a>
      <li><a href='redeemed-coupons.html'><span>Redeemed Coupons</span></a></li>
      <li><a href='edit-account.html'><span>Edit Account</span></a></li>
      <li><a href='#'><span>Log Out</span></a></li>
      <div class="close-btn" id="close-btn">
        <span></span>
        <span></span>
      </div>
    </ul>
  </div>
</nav>
