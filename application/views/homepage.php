<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hourly </title>
	<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
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
		<div class="banner-bg" id="banner">
			<div class="grey-screen">

			</div>
			<ul class="banner-bg-container">
				<li id="banner-1"></li>
				<li id="banner-2"></li>
				<li id="banner-3"></li>
				<li id="banner-4"></li>
			</ul>
			<ul class="slide-container" id="slide-container">
				<li  id="slide-1">
					<h1>Upcoming<br> Coupons</h1>
					<p>Check out upcoming coupons</p>
					<a href=""><div class="btn-style-1" id="slide-1-div">See Coupons</div></a>
				</li>
				<li  id="slide-2">
					<h1>Most<br> Viewed</h1>
					<p>Check out the most popular coupons</p>
					<a href=""><div class="btn-style-1" id="slide-2-div">See Coupons</div></a>

				</li>
				<li  id="slide-3">
					<h1>Near<br> You</h1>
					<p>Check out coupons of brands near your location</p>
					<a href=""><div class="btn-style-1" id="slide-3-div">See Coupons</div></a>
				</li>
				<li  id="slide-4">
					<h1>Currently<br> live</h1>
					<p>Check out the currently active coupons</p>
					<a href=""><div class="btn-style-1" id="slide-4-div" >See Coupons</div></a>
				</li>
			</ul>
			<div id="carousel-controls">
				<div class="next-arrows">
					<div class="align-left" id="left">
						<i class="fa fa-angle-left"></i>
					</div>
					<div class="align-right" id="right" >
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
				<div class="carousel-pagination-container " id="search">
					<div class="carousel-pagination ">
						<div class="carousel-page-icon" id="circle-1">
							<i class="fa fa-circle"></i>
						</div>
						<div class="carousel-page-icon " id="circle-2">
							<i class="fa fa-circle"></i>
						</div>
						<div class="carousel-page-icon " id="circle-3">
							<i class="fa fa-circle"></i>
						</div>
						<div class="carousel-page-icon " id="circle-4">
							<i class="fa fa-circle"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container" >
		<section class="quote-banner ">
			<div class="search-container" >
				<form class="search" id="search-option" method="post"  >
					<input type="text"  name="q" placeholder="Search..." />
					<div class="sub-menu" id="search-option-submenu">
						<ul>
							<li><a href='#'><span>item 1</span></a></li>
							<li><a href='#'><span>item 2</span></a></li>
							<li><a href='#'><span>item 3</span></a></li>
							<li><a href='#'><span>item 4</span></a></li>
						</ul>
					</div>
				</form>
				<div class="search-btn-container  " >
					<a href="" ><div class="btn-style-1 " >Categories</div></a>
					<div class="sub-menu" id="search-btn-container-submenu">
						<ul>
							<li><a href='#'><span>item 1</span></a></li>
							<li><a href='#'><span>item 2</span></a></li>
							<li><a href='#'><span>item 3</span></a></li>
							<li><a href='#'><span>item 4</span></a></li>
						</ul>
					</div>
				</div>
				<div class="search-btn-container  " >
					<a href="" ><div class="btn-style-1 " >Miles</div></a>
					<div class="sub-menu" id="search-btn-container-submenu">
						<ul>
							<li><a href='#'><span>item 1</span></a></li>
							<li><a href='#'><span>item 2</span></a></li>
							<li><a href='#'><span>item 3</span></a></li>
							<li><a href='#'><span>item 4</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="quote-banner ">
			<div class="easy-nav-container" >
				<h2>What are you looking for?</h2>
				<div class="center-align">
					<a href="">
						<div class="icon-container">
							<div class="size"><i class="fa fa-cutlery "></i></div>
							<h4>Food &#38; drinks</h4>
							<p>261 Coupons</p>
						</div>
					</a>
					<a href="">
						<div class="icon-container">
							<div class="size"><i class="fa fa-cutlery "></i></div>
							<h4>Food &#38; drinks</h4>
							<p>261 Coupons</p>
						</div>
					</a>
					<a href="">
						<div class="icon-container">
							<div class="size"><i class="fa fa-cutlery "></i></div>
							<h4>Food &#38; drinks</h4>
							<p>261 Coupons</p>
						</div>
					</a>
					<a href="">
						<div class="icon-container">
							<div class="size"><i class="fa fa-cutlery "></i></div>
							<h4>Food &#38; drinks</h4>
							<p>261 Coupons</p>
						</div>
					</a>
					<a href="">
						<div class="icon-container">
							<div class="size"><i class="fa fa-cutlery "></i></div>
							<h4>Food &#38; drinks</h4>
							<p>261 Coupons</p>
						</div>
					</a>
				</div>
			</div>
		</section>
		<section class="quote-banner">
			<h2>HOT DEALS ON THE GO !</h2>
		</section>
		<section class="coupons">
			<ul id="dynamic-coupons">
				<?php
				for($i=0;$i<20;$i++){
					//echo $coupon;
				}
				?>
			</ul>
		</section>
		<?php include 'footer.php' ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/common.js"></script>
	<script>
	var lat,lng;
	function geolocation(){
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition,showError);
		} else {
			var x = "Geolocation is not supported by this browser.";
		}
	}
	function showPosition(position){
		lat = position.coords.latitude;
		lng = position.coords.longitude;
		genCoupon();
	}
	function showError(error){

		lat = geoplugin_latitude();
		lng = geoplugin_longitude();
		genCoupon();
	}
	function genCoupon(){
		if (lat == null || lng == null) {showError(0);}
		else {
			if(geoplugin_regionCode() == null)rcode="0";
			else rcode=geoplugin_regionCode();
			$("#dynamic-coupons").load("<?php echo base_url(); ?>index.php/welcome/couponFactory/"+lng+"/"+lat+"/"+geoplugin_countryCode()+"/"+rcode);
		}
	}
	</script>
	<script>
	$(document).ready(function(){
		geolocation();
		$('.primary-navbar').css('visibility', 'visible');
		$('.secondary-navbar').css('opacity', '0');
		$(document).scroll(function () {
			var pos;
			pos=$(document).scrollTop();
			if(pos>=600)
			{
				$('.secondary-navbar').css('opacity', '1');
			}
			if(pos<600)
			{
				$('.secondary-navbar').css('opacity', '0');
			}
		});
		//alert("showError");
		genCoupon();
	});
	</script>
</body>
</html>
