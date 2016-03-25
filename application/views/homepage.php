<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hourly Discounts</title>
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
		<ul>

			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
			<li>
				<div class="top-container">
					<img alt="bg" src="images/coupon-thumbnail.jpg">
					<div class="desc-container"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div>
				</div>
				<div class="bottom-container">
					<h3>Lorem ipsum</h3>
					<h1>20%</h1>
					<h5 ><span><i class="fa fa-user"></i> </span> 23567 Bought </h5>
					<h6 ><i class="fa fa-map-marker"></i> Location</h6>
				</div>

			</li>
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
<script>

$(document).ready(function(){
	var curr=0,slide=1,flag=0;
	var flag2=0,flag3=3;
	$('#circle-1').css('opacity', '1');
	$('#right').click(function() {
		$('#circle-'+slide).css('opacity', '0.3');
		if(curr-100>-400)
		{
			curr=curr-100;
			slide=slide+1;
			flag2=flag2+1;
		}
		$('.slide-container').css({left: curr+'%'});
		$('	.banner-bg-container').css({left: curr+'%'});
		$('#left').css('visibility', 'visible');
		$('#circle-'+slide).css('opacity', '1');
		if(curr==-300)
		$('#right').css('visibility', 'hidden');
	});
	$('#left').click(function() {
		$('#circle-'+slide).css('opacity', '0.3');
		if(curr+100<100)
		{
			curr=curr+100;
			slide=slide-1;
			flag2=flag2-1;
		}
		$('.slide-container').css({left: curr+'%'});
		$('	.banner-bg-container').css({left: curr+'%'});
		$('#right').css('visibility', 'visible');
		$('#circle-'+slide).css('opacity', '1');
		if(curr==0)
		$('#left').css('visibility', 'hidden');
	});
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

	( function() {
		$('#btn-search').on('click', function(e) {
			e.preventDefault();
			$('#search').animate({width: 'toggle'}).focus();
		});
	} () );
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
	$( ".profile" ).mouseover(function() {
			$('.side-menu ul').css('right', '0px');
			$('#blur').css('visibility', 'visible');
	});
	$( "#close-btn" ).click(function() {

			$('.side-menu ul').css('right', '-450px');
			$('#blur').css('visibility', 'hidden');
		});
	/*	var j=0;
		var flag3=0;
		while(0){
			while(flag3<3){
				flag3++;
			}
			while(flag3>0){
				flag3--;
			}
		}*/
	//$('#right').click();
	var obj = $('#right');
	setInterval(function(){slideshow()}, 6000);
	function slideshow() {
		//alert(flag2);
		if(flag2>=3) obj = $('#left');
		if(flag2<=0) obj = $('#right');
		obj.click();
		}


/*
var timeid=setInterval(function() {
  $('#right').click();
	if(flag2==3)clearInterval(timeid);
	alert('flag2 = ' + flag2);
},  1000);
	alert('flag3 = ' + flag2);
var timeid2=setInterval(function() {
  $('#left').click();
	if(flag2==0)clearInterval(timeid2);

		alert('flag4' + flag2);
},  1000);*/
	});
//$(window).load(slideshow);
/*function slideshow(){
	$('#right').click();
	setTimeout(50000);
	$('#right').click();
	setTimeout(50000);
	$('#right').click();
	setTimeout(50000);
}*/

</script>
</body>
</html>
