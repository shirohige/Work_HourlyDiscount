$(document).ready(function(){
  $('.primary-navbar').css('visibility', 'hidden');
  $('.secondary-navbar').css('visibility', 'visible');
  $('.secondary-navbar').css('opacity', '1');
  var flag=0;

  $( ".hamburger-button" ).click(function() {
    $(this).toggleClass('open');
    if(flag==0){
      $('#mobile-navbar-submenu').css('height', '150px');
      flag=1;
    }
    else if(flag==1){
      $('#mobile-navbar-submenu').css('height', '0px');
      flag=0;
    }

  });
  $('.form').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
    label = $this.prev('label');

    if (e.type === 'keyup') {
      if ($this.val() === '') {
        label.removeClass('active highlight');
      } else {
        label.addClass('active highlight');
      }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight');
      } else {
        label.removeClass('highlight');
      }
    } else if (e.type === 'focus') {

      if( $this.val() === '' ) {
        label.removeClass('highlight');
      }
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
      }
    }

  });

  $('.tab a').on('click', function (e) {

    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

  });
  $( ".profile" ).click(function() {
    $('.side-menu ul').css('visibility', 'visible');
    $('.side-menu ul').css('right', '0px');
    $('#blur').css('visibility', 'visible');
  });
  $( "#close-btn" ).click(function() {
    $('.side-menu ul').css('visibility', 'hidden');
    $('.side-menu ul').css('right', '-450px');
    $('#blur').css('visibility', 'hidden');
  });
  $( "#blur" ).click(function() {
    $('.side-menu ul').css('visibility', 'hidden');
    $('.side-menu ul').css('right', '-450px');
    $('#blur').css('visibility', 'hidden');
  });
  var obj = $('#right');
  setInterval(function(){slideshow()}, 6000);
  function slideshow() {
    //alert(flag2);
    if(flag2>=3) obj = $('#left');
    if(flag2<=0) obj = $('#right');
    obj.click();
  }
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


  ( function() {
    $('#btn-search').on('click', function(e) {
      e.preventDefault();
      $('#search').animate({width: 'toggle'}).focus();
    });
  } () );
});
var myCenter=new google.maps.LatLng(51.508742,-0.120850);

function initialize()
{
  var mapProp = {
    center:myCenter,
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker=new google.maps.Marker({
    position:myCenter,
  });

  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
