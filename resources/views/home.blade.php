<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Elegant Template By W3 Template</title>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/boxicons/css/boxicons.min.css')}}"/>

<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/master_css.css')}}"/> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/> -->

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo " href="#"> <img src="{{asset('assets/image/logo1.png')}}" alt="logo" class="logo-1"> <span style="margin-top:20px">Hima</span> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0"><i class="bx bxl-apple" ></i>IOS</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1"><i class="bx bxl-android" ></i>Android</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1"><i class="bx bxl-dribbble" ></i>App landing page</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->

<div class="banner text-center" data-scroll-index='0' >
    <div class="banner-overlay">
         <div class="container" style="margin-top: -50px;">
            <p>MADE WITH    BY THE FLUTTER COMMUNITY</p>
            <h1 class="text-capitalize">An open list of apps built with Flutter</h1>
            <p>Feel free to add an app in progress and update it when it goes live</p>
            <a href="#" class="banner-btn" style="margin-right=20px">Get Started</a>
            <a href="#" class="banner-btn">Get Started</a>
        </div>
    </div>
</div>

<!-- End Banner Image --> 


@yield('Content')


<!-- footer -->
    <div class="footer">
        <div class="footer-list">
            <div class="main">
                <div class="list">
                    <p>SOLUTIONS</p>
                    <ul>
                        
                        <li><a rel="alternate" media="only screen and (max-width: 640px)" class="amobile" href="https://m.apkpure.com/vn/">Mobile version</a></li>
                        
                        <li><a class="dl-ref" dl-ref="footer" href="https://apkpure.com/vn/apkpure-app.html?icn=aegon&ici=text_footer">APKPure For Android</a></li>
                        <li><a href="https://apkpure.com/vn/apk-install.html">APK Install</a></li>
                        <li><a href="https://apkpure.com/vn/region-free-apk-download">APK Downloader (Region free)</a></li>
                        <li><a href="https://apkpure.com/vn/apk-signature-verification">APK Signature Verification</a></li>
                    </ul>
                    <div class="clear" style="height:10px;"></div>
                    <p>CUSTOMER SERVICE</p>
                    <ul>
                        <li><a href="/vn/submit-apk">Submit APK</a></li>
                        <li><a href="https://developer.apkpure.com?hl=vi-VN" target="_blank">Developer Console</a></li>
                        <li><a href="/vn/about.html">About Us</a></li>
                        <li><a href="/vn/contact-us.html">Contact Us</a></li>
                        <li><a href="/vn/report-content.html">Report abuse</a></li>
                    </ul>
                </div>
                <div class="list">
                    <p>FOLLOW US</p>

                    
                    
                    <ul class="follow">
                        <li><a class="fb" rel="nofollow noopener" target="_blank" href="https://www.facebook.com/apkpure"><span>Facebook</span></a></li>
                        <li><a class="tw" rel="nofollow noopener" target="_blank" href="https://twitter.com/apkpure"><span>Twitter</span></a></li>
                        <li><a class="glp" rel="nofollow noopener" target="_blank" href="https://www.youtube.com/channel/UCbCOKdnt1yYk4S3I4a034XQ"><span>YouTube</span></a></li>
                    </ul>

                    
                    <div class="clear" style="height:60px;"></div>
                    <p>Top Developers & Partners</p>
                    <ul>
                        <li><a href="/vn/developer/Gameloft" target="_blank" title="Gameloft">Gameloft</a></li>
                        <li><a href="/vn/developer/Supercell" target="_blank" title="Supercell">Supercell</a></li>
                        <li><a href="/vn/developer/NEXON%20Company" target="_blank" title="NEXON">NEXON</a></li>
                        <li><a href="/vn/developer/BANDAI%20NAMCO%20Entertainment%20Inc." target="_blank" title="BANDAI NAMCO Entertainment Inc.">BANDAI Inc.</a></li>
                    </ul>
                    
                </div>
                <div class="list">
                    <p>TOP ANDROID APPS</p>
                    <ul>                     
                        <li><a title="LuluBox - Free Skin Mod for Garena Liên Quân APK" href="/vn/lulubox/com.lulu.lulubox">LuluBox - Free Skin Mod for Garena Liên Quân APK</a></li>

                        <li><a title="Messenger - nhắn tin và gọi video miễn phí APK" href="/vn/facebook-messenger/com.facebook.orca">Messenger APK</a></li>

                        <li><a title="Google Play Store APK" href="/vn/google-play-store/com.android.vending">Google Play Store APK</a></li>

                        <li><a title="YouTube APK" href="/vn/youtube/com.google.android.youtube">YouTube APK</a></li>

                        <li><a title="Facebook APK" href="/vn/facebook/com.facebook.katana">Facebook APK</a></li>

                        <li><a title="Zing MP3 APK" href="/vn/zing-mp3/com.zing.mp3">Zing MP3 APK</a></li>

                        <li><a title="Zalo - Gọi Video sắc nét APK" href="/vn/zalo-video-call/com.zing.zalo">Zalo APK</a></li>

                        <li><a title="Facebook Lite APK" href="/vn/facebook-lite/com.facebook.lite">Facebook Lite APK</a></li>

                        <li><a title="Chrome: Nhanh và an toàn APK" href="/vn/google-chrome-fast-secure/com.android.chrome">Chrome APK</a></li>

                        <li><a title="Google Play Trò chơi APK" href="/vn/google-play-games/com.google.android.play.games">Google Play Trò chơi APK</a></li>

                    </ul>
                </div>
                <div class="list">
                    <p>TOP ANDROID GAMES</p>
                    <ul>
                        
                        
                                    <li><a title="Garena Free Fire: NGÀY BOOYAH APK" href="/vn/garena-free-fire-android-il/com.dts.freefireth">Garena Free Fire: NGÀY BOOYAH APK</a></li>

                                    <li><a title="PUBG MOBILE LITE APK" href="/vn/pubg-lite-android/com.tencent.iglite">PUBG MOBILE LITE APK</a></li>

                                    <li><a title="Garena Liên Quân Mobile APK" href="/vn/garena-li%C3%AAn-qu%C3%A2n-mobile-x-ultraman/com.garena.game.kgvn">Garena Liên Quân Mobile APK</a></li>

                                    <li><a title="PUBG MOBILE METRO ROYALE APK" href="/vn/pubg-mobile-4-android-i/com.tencent.ig">PUBG MOBILE APK</a></li>

                                    <li><a title="Auto Chess APK" href="/vn/auto-chess/com.dragonest.autochess.google">Auto Chess APK</a></li>

                                    <li><a title="Identity V APK" href="/vn/identity-v/com.netease.idv.googleplay">Identity V APK</a></li>

                                    <li><a title="PUBG MOBILE VN - METRO ROYALE APK" href="/vn/pubg-mobile-vn-metro-royale/com.vng.pubgmobile">PUBG MOBILE APK</a></li>

                                    <li><a title="배틀그라운드 APK" href="/vn/pubg-mobile/com.pubg.krmobile">배틀그라운드 APK</a></li>

                                    <li><a title="Chess Rush APK" href="/vn/chess-rush/com.tencent.godgame">Chess Rush APK</a></li>

                                    <li><a title="Garena 傳說對決：四周年版本登場 APK" href="/vn/garena-%E5%82%B3%E8%AA%AA%E5%B0%8D%E6%B1%BA%EF%BC%9A%E5%9B%9B%E5%91%A8%E5%B9%B4%E7%89%88%E6%9C%AC%E7%99%BB%E5%A0%B4/com.garena.game.kgtw">Garena 傳說對決：四周年版本登場 APK</a></li>

                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>   
    </div>
<!-- end footer -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<!-- owl carousel js --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- magnific-popup --> 
<script src="js/jquery.fancybox.min.js"></script> 

<!-- scrollIt js --> 
<script src="js/scrollIt.min.js"></script> 

<!-- isotope.pkgd.min js --> 
<script src="js/isotope.pkgd.min.js"></script> 
<script>
  $(window).on("scroll",function () {

      var bodyScroll = $(window).scrollTop(),
          navbar = $(".navbar");

      if(bodyScroll > 130){

          navbar.addClass("nav-scroll");
          $('.navbar-logo img').attr('src','{{asset('assets/image/logo1.png')}}');


      }else{

          navbar.removeClass("nav-scroll");
          $('.navbar-logo img').attr('src','{{asset('assets/image/logo1.png')}}');

      }

  });

  $(window).on("load",function (){



var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");

if(bodyScroll > 130){

navbar.addClass("nav-scroll");
$('.navbar-logo img').attr('src','{{asset('assets/image/logo1.png')}}');


}else{

navbar.removeClass("nav-scroll");
$('.navbar-logo img').attr('src','{{asset('assets/image/logo1.png')}}');

}

/* smooth scroll
  -------------------------------------------------------*/
  $.scrollIt({

easing: 'swing',      // the easing function for animation
scrollTime: 900,       // how long (in ms) the animation takes
activeClass: 'active', // class given to the active nav element
onPageChange: null,    // function(pageIndex) that is called when page is changed
topOffset: -63
});

/* isotope
-------------------------------------------------------*/
var $gallery = $('.gallery').isotope({});
$('.gallery').isotope({

    // options
    itemSelector: '.item-img',
    transitionDuration: '0.5s',

});


$(".gallery .single-image").fancybox({
  'transitionIn'  : 'elastic',
  'transitionOut' : 'elastic',
  'speedIn'   : 600,
  'speedOut'    : 200,
  'overlayShow' : false
});


/* filter items on button click
-------------------------------------------------------*/
$('.filtering').on( 'click', 'button', function() {

    var filterValue = $(this).attr('data-filter');

    $gallery.isotope({ filter: filterValue });

    });

$('.filtering').on( 'click', 'button', function() {

    $(this).addClass('active').siblings().removeClass('active');

});

})

$(function () {
$( ".cover-bg" ).each(function() {
    var attr = $(this).attr('data-image-src');

    if (typeof attr !== typeof undefined && attr !== false) {
      $(this).css('background-image', 'url('+attr+')');
    }

  });

  /* sections background color from data background
  -------------------------------------------------------*/
  $("[data-background-color]").each(function() {
      $(this).css("background-color", $(this).attr("data-background-color")  );
  });


/* Owl Caroursel testimonial
  -------------------------------------------------------*/
  
  $('.testimonials .owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    margin:30,
    dots: true,
    nav: false,
    
  });

});

</script>
</body>
</html>
