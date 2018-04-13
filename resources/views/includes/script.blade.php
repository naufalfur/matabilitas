<!-- //footer -->
	<script type="text/javascript" src="{{ asset('app-assets/js/jquery-2.2.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('app-assets/js/bootstrap.js') }}"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="{{ asset('app-assets/js/easing.js') }}"></script>
	<script type="text/javascript" src="{{ asset('app-assets/js/move-top.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="{{ asset('app-assets/js/jquery-1.7.2.js') }}"></script>
	<script src="{{ asset('app-assets/js/jquery.quicksand.js') }}" type="text/javascript"></script>
	<script src="{{ asset('app-assets/js/script.js') }}" type="text/javascript"></script>
	<script src="{{ asset('app-assets/js/jquery.prettyPhoto.js') }}" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->