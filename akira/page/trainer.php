	
<?php
	/**
		* Template name: Тренажеры
	*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/header-page' ); ?>

	<div class="bg--hero"></div>

	<section class="error--hero hero curse--hero section ">

		<div class="parallax parallax--circle--white parallax--sped-seven parallax--position-seven"></div>
		<div class="parallax parallax--circle--light parallax--sped-four parallax--position-six"></div>
		<div class="parallax parallax--circle--white parallax--sped-five parallax--position-five"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-five parallax--position-four parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-left">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">

					<p class="hero__sub-title"><b>Перейдите на тренажеры</b></p>

					<div class="hero__logo">
						<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></svg>
					</div>

					<a href="https://mentalclass.ru/?fbclid=IwAR2bdhGc5VTBCJLZ0hUXWq-L1lDznL0N3JYHuyO884eS0rEZzNbr7RVeADA" target="_blank" class="btn">Mental Class<span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
					<br>
					<br>
					<br>
					<a href="https://mindskills.online/landing/registration/?promo=akira&fbclid=IwAR1nmY6UXJ5E7vvnI0TG9G8D0M9crCqr7pDLdgaZA0YDmshBfn3QFlPOrLU" target="_blank" class="btn hero__btn">MINDSKILLS<span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>

				</div>

			</div>

		</div>
	</section>

<?php get_footer(); ?>