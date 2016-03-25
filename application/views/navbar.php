<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
//link all pages
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
        <li><a href='<?php echo base_url(); ?>'><span>Home</span></a></li>
        <li><a href='<?php echo base_url(); ?>index.php/welcome/about'><span>About</span></a></li>
        <?php
        $loggedin=1;
        if(/*$this->session->*/$loggedin != 1){
          ?>
          <li><a href='<?php echo base_url(); ?>index.php/welcome/signup'><span>Post Coupons</span></a></li>
          <li id="sign-up"><a href='<?php echo base_url(); ?>signup'><span>Sign-In</span></a></li>
          <?php
        }
        else {
          ?>
          <li><a href='coupons.html'><span>Post Coupons</span></a></li>
          <li class="col-2 profile"><a href="edit-profile.html">Profile <span><i class="fa fa-caret-right"></i></span></a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <ul class="primary-navbar">
    <li class=" col-2"><a href="<?php echo base_url(); ?>">Home</a></li>
    <li class="col-2"><a href="<?php echo base_url(); ?>index.php/welcome/about">About</a></li>
    <li class="col-4 brand"><span class="brand-header">HourlyDiscounts</span><br><span class="brand-slogan">Hot Deals on the go!</span></li>
    <?php
    if(/*$this->session->*/$loggedin != 1){
      ?>
      <li><a href='<?php echo base_url(); ?>index.php/welcome/signup'><span>Post Coupons</span></a></li>
      <li class=" col-2"><a href="<?php echo base_url(); ?>index.php/welcome/signup">Sign-In</a></li>
      <?php
    }
    else {
      ?>
      <li><a href='<?php echo base_url(); ?>index.php/welcome/coupons'><span>Post Coupons</span></a></li>
      <li class="col-2 profile"><a href="edit-profile.html">Profile <span><i class="fa fa-caret-right"></i></span></a></li>
      <?php
    }
    ?>
  </ul>
  <ul class="primary-navbar secondary-navbar" >
    <li class=" col-2"><a href="<?php echo base_url(); ?>index.php/welcome/">Home</a></li>
    <li class="col-2"><a href="<?php echo base_url(); ?>index.php/welcome/about">About</a></li>
    <li class="col-4 brand"><span class="brand-header">HourlyDiscounts</span><br><span class="brand-slogan">Hot Deals on the go!</span></li>
    <?php
    if(/*$this->session->*/$loggedin != 1){
      ?>
      <li><a href='<?php echo base_url(); ?>index.php/welcome/signup'><span>Post Coupons</span></a></li>
      <li class=" col-2"><a href="<?php echo base_url(); ?>index.php/welcome/signup">Sign-In</a></li>
      <?php
    }
    else {
      ?>
      <li><a href='<?php echo base_url(); ?>index.php/welcome/coupons'><span>Post Coupons</span></a></li>
      <li class="col-2 profile"><a href="edit-profile.html">Profile <span><i class="fa fa-caret-right"></i></span></a></li>
      <?php
    }
    ?>
  </ul>
  <div class="blur" id="blur"></div>
  <div class="side-menu" id="side-menu">
    <ul>
      <a href='<?php echo base_url(); ?>index.php/welcome/editaccount'><div class="circle"><img src="<?php echo base_url(); ?>images/people.png"></div></a>
      <li><a href='redeemed-coupons.html'><span>Redeemed Coupons</span></a></li>
      <li><a href='<?php echo base_url(); ?>index.php/welcome/editaccount'><span>Edit Account</span></a></li>
      <li><a href='#'><span>Log Out</span></a></li>
      <div class="close-btn" id="close-btn">
        <span></span>
        <span></span>
      </div>
    </ul>
  </div>
</nav>
