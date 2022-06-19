<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Fabricator an Industrial Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fabricator a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- default css files -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- default css files -->	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!--//web font-->
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- //sweetalert -->
</head>
<!-- Body ------------------------------------------------------------------------>

@yield('header')
@yield('site-content')
@yield('footer')




<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js')}}"></script>
<!-- //Default-JavaScript-File -->
		<!-- stats -->
	<script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

<!-- clients js file-->
	<script src="{{ asset('frontend/js/jquery.wmuSlider.js')}}"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
<!-- //clients js file -->

<!-- Jarallax -->
<script src="{{ asset('frontend/js/jarallax.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<!-- //Jarallax -->

<!-- smooth scrolling -->
	<script src="{{ asset('frontend/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/easing.js')}}"></script>
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->
<!-- flexSlider -->
				<script defer src="{{ asset('frontend/js/jquery.flexslider.js')}}"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
<!-- //flexSlider -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
</body>
<!-- //Body -->
</html>


