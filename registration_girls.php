<?php
if(isset($_POST["submit"])){
include_once("con.php");
 $tname=$_POST["tname"];
 $cname=$_POST["cname"];
 $phone=$_POST["phone"];
 $email=$_POST["email"];
 $clg=$_POST["clg"];
 if(isset($_POST)){
 $mysql_query=("insert into girls (team_name,caption_name,phone,email,college_name) VALUES('$tname','$cname','$phone','$email','$clg')");

 mysqli_query($con,$mysql_query);
   }
}
?>
<!DOCTYPE html>
<html class="background-100-e">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Thunder || Regstration</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="bower_components/animate.css/animate.min.css" />
<link rel="stylesheet" href="bower_components/minicolors/jquery.minicolors.css" />
<link rel="stylesheet" href="bower_components/slick.js/slick/slick.css" />
<link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css" />
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap-custom.min.css" />
<link rel="stylesheet" href="lib/linecons/style.css" />
<link rel="stylesheet" href="styles/style.min.css" />
<link rel="stylesheet" href="theme-custom.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style type="text/css">
	.justify
	{
		text-align: justify;
	}

	input[type=text], input[type=password] {
    width: 50%;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
</style>
</head>


<body class="state1 background-100-e">
<div class="ext-nav background-95-h page-transition">
<div class="view half-height">
<img alt class="bg static" src="images/bg/JohnKraus/2.jpg" />
<div class="content no-top-padding no-bottom-padding  full-height">
<div class="container-fluid  full-height">
<div class="row full-height">
<a href="index.php#events" class="col-md-6 colors-e background-95-e full-height" target="_self">
<div>
<span class="side-title">Events</span>
</div>
</a>
<a href="#" class="col-md-6 colors-f background-95-f full-height">
<div>
<span class="side-title">Register</span>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="container-fluid  half-height">
<div class="row full-height">
<a href="index.php#contact" class="col-md-4 colors-g background-solid full-height border-bottom border-lite" target="_self">
<div>
<span class="side-title">Contact Us</span>
</div>
</a>
<a href="index.php#sponsors" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite" target="_self">
<div>
<span class="side-title">Sponsors</span>	
</div>
</a>
<a href="index.php#numbers" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite" target="_self">
<div>
<span class="side-label">Some Facts</span>
<span class="side-title">Our Numbers</span>
</div>
</a>
</div>
</div>
</div>
<div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>
<div class="page-border left colors-e background-solid">
<ul>
<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>

<div class="page-border right colors-e background-solid"></div>
<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
<div class="container">
<div class="navbar-header">
<a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>
<a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
<a class="navbar-brand" href="index.php" target="_self"><p>
<img src="images/svg/thunder.jpg" height="50px" />
</p></a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="index.php#home" class="hover-effect" target="_self">Home</a></li>
<li><a href="index.php#about" class="hover-effect" target="_self">About</a></li>
<li><a href="index.php#events" class="hover-effect" target="_self">Events</a></li>
<li><a href="index.php#gallery" class="hover-effect" target="_self">Gallery</a></li>
<li><a href="index.php#sponsors" class="hover-effect" target="_self">Sponsors</a></li>
<li><a href="index.php#team" class="hover-effect" target="_self">Our Team</a></li>
<li><a href="index.php#contact" class="hover-effect" target="_self">Contact</a></li>
<li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>
</ul>
</div>
</div>
</nav>

<ul id="dot-scroll" class="colors-e background-solid"></ul>
<div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
<div class="overlay-control background-85-d">
<a class="previos" href="#"></a>
<a class="next" href="#"></a>
<a class="cross" href="#"></a>
</div>
<div class="overlay-view"></div>
<ul class="loader">
<li class="background-100-d"></li>
<li class="background-100-d"></li>
<li class="background-100-d"></li>
</ul>
</div>
<div class="overlay-window map-overlay colors-f background-95-f">
<div class="overlay-control background-90-f">
<a class="cross" href="#"></a>
</div>
<div class="overlay-view">
<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
</div>
</div>
</div>
<div class="overlay-window credits-overlay colors-g background-95-g">
<div class="overlay-control background-85-d">
<a class="cross" href="#"></a>
</div>
</div>
<section style="margin-top: 50px;" >
	<h3>Fill Detail For Registration</h3><br />
<form action="" method="post">
  <center>
  <div class="container" align="center" style="background-color: white;width: 100%;" >
  <div class="container" align="center">
    <input type="text" placeholder="Enter Your Team Name...." name="tname" required><br/>
    <input type="text" placeholder="Enter Your Team Caption Name...." name="cname" required><br/>
    <input type="text" placeholder="Enter Your Contact No. ...." name="phone" required><br/>
    <input type="text" placeholder="Enter Your Email Id...." name="email" required><br/>
    <input type="text" placeholder="Enter Your College Name...." name="clg" required><br/>
    <p>
      <button type="submit" name="submit">Submit Your Detail</button>
    </p>
  </div>
</div>
</form>
</section>

<footer class="colors-g page-transition non-preloading">
<div class="container scroll-in-animation" data-animation="fadeInDown">
<div class="row">
<div class="col-md-3">
<h4><span class="highlight">Thunder</span>Sport</h4>
<div class="footer-description">
</div>
<p class="social-links">
<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
<a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
</p>
</div>
<div class="col-md-3">
<h5>Additional Links</h5>
<ul class="simple">
<li><a href="#">Blog</a></li>
<li><a href="index.php#about">About</a></li>
<li><a href="index.php#events">Events</a></li>
<li><a href="index.php#numbers">Our Numbers</a></li>
</ul>
</div>
<div class="col-md-3">
<h5>Recent Posts</h5>
<ul class="simple">
<li><a href="#">ThunderSport || Ready for BigPlay!</a></li>
</ul>
</div>
<div class="col-md-3">
<h5>Contacts</h5>
Registration and enquiry- +91 9695015595

Branding - +91 7007691380
<br/>
Events-+91 7651927972
</div>
</div>
</div>
<div class="bottom text-center background-10-b">
© 2018 All Rights Reserved. <a href="#" class="open-overlay-window heading" data-overlay-window=".credits-overlay">Thunder TEAM.</a>
</div>
</footer>


<script>
		if (typeof(atob) == "undefined")
		{
			document.write('<script src="lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');
			var atob = function(x)
			{
				return base64.decode(x);
			}
		}
		</script>
<script src="bower_components/less.js/dist/less.min.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="lib/tween/tween.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/modernizr/modernizr.js"></script>
<script src="lib/SmoothScroll-1.2.1/SmoothScroll.js"></script>
<script src="bower_components/jquery-cookie/jquery.cookie.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
<script src="bower_components/minicolors/jquery.minicolors.min.js"></script>
<script src="bower_components/slick.js/slick/slick.min.js"></script>
<script src="bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
<script src="bower_components/textillate/assets/jquery.lettering.js"></script>
<script src="bower_components/textillate/assets/jquery.fittext.js"></script>
<script src="bower_components/textillate/jquery.textillate.js"></script>
<script src="lib/prism/prism.js"></script>
<script>
		(function()
		{
			var disableMobileAnimations = true;
			var isWin = navigator.appVersion.indexOf("Win") !== -1;
			if (isWin) $('html').addClass('win');
			var ua = navigator.userAgent.toLowerCase();
			var isChrome = ua.indexOf('chrome') > -1;
			if (isChrome) $('html').addClass('chrome');
			var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
			if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
			var isSafari = !isChrome && ua.indexOf('safari') !== -1;
			if (isSafari) $('html').addClass('safari');
			var isMobile = Modernizr.touch;
			if (isMobile)
			{
				$('html').addClass('mobile');
				if (disableMobileAnimations) $('html').addClass('poor-browser');
			}
			else
			{
				$('html').addClass('non-mobile');
			}
			if (isWin && isSafari)
			{
				$('html').addClass('flat-animation');
			}
		})();
		</script>
<script src="scripts/script-bundle.js"></script>
<script>
		if (Function('/*@cc_on return document.documentMode===9@*/')())
		{
			$('html').addClass('ie9');
		}
		if (Function('/*@cc_on return document.documentMode===10@*/')())
		{
			$('html').addClass('ie10');
		}
		if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
		{
			$('html').addClass('ie11');
		}
		</script>
</body>


</html>