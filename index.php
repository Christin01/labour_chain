<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Migrant Labourers</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Migrant Labourers Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap -->
<link href="temp/css/font-awesome.css" rel="stylesheet"> <!-- Font awesome -->
<link href="temp/css/owl.carousel.css" rel="stylesheet"><!-- Clients -->
<link href="temp/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- Pop-up -->
<link href="temp/css/lsb.css" rel="stylesheet" type="text/css"><!-- gallery -->
<link href="temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<!--banner start here-->
<div class="banner-w3ls" id="home">
	<div class="container">
		<!-- header -->
                 <?php
                 
                 include 'menu.php';
                 ?>
			<!-- //header -->
			<!-- banner-slider -->
			<div class="w3l_banner_info" >
				<div class="slider">
					<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="w3ls-info">
											 <h4>Be fabulous. Be empowered. Be Blown Away!</h4>
											<p>We’re Committed to Service Excellence By Migrant Labourers.</p>
										</div>

									</li>
									

								</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		<!-- //banner-slider -->
				
        </div>
</div>
<!--//home-->
<!--banner end here-->
<!-- services -->
	
<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p>© 2021 Migrant Labourers. All rights reserved | Design by <a href="#">Trinity Technologies</p>
				</div>
				<div class="agileits-social">
					<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--/footer -->

<!-- js -->
<script type='text/javascript' src='../temp/js/jquery-2.2.3.min.js'></script>
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="temp/js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="temp/js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<script src="temp/js/SmoothScroll.min.js"></script>
<!--responsive slider -->
<script src="temp/js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 3
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!--//responsive slider -->
<!--pop-up-box -->
					<script src="temp/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
	<!-- for-Clients -->
		<script src="temp/js/owl.carousel.js"></script>
			<!-- requried-jsfiles-for owl -->
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
			<!-- //requried-jsfiles-for owl -->
	<!-- //for-Clients -->
	<!-- start-smoth-scrolling -->
<script type="text/javascript" src="temp/js/move-top.js"></script>
<script type="text/javascript" src="temp/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>