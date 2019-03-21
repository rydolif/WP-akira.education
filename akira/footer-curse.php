	
	<?php get_template_part( 'parts/footer' ); ?>
	
	<?php get_template_part( 'parts/modal' ); ?>
	
	<?php wp_footer();?>
	
	<?php get_template_part( 'parts/number-js' ); ?>
	
	<script>
		var swiper = new Swiper('.swiper-container', {
	       pagination: {
	         el: '.swiper-pagination',
	         clickable: true,
	         renderBullet: function (index, className) {
	           return '<span class="' + className + '">' + (index + 1) + '</span>';
	         },
	       },
	       navigation: {
	         nextEl: '.swiper-button-next',
	         prevEl: '.swiper-button-prev',
	       },
	       effect: 'fade',
	     });
	</script>
</body>
</html>
