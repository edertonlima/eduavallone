
	<footer></footer>

</body>

<script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		window_W = $(window).width();
	});

	$('.menu-mobile').click(function(){
		$('.nav').toggleClass('active');
	});

	$(window).scroll(function(){
		scroll_body = $(window).scrollTop();
		if(scroll_body > 25){
			$('.header').addClass('scroll');
		}else{
			$('.header').removeClass('scroll');
		}
	});
</script>

<?php //wp_footer(); ?>