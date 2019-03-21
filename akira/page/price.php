	
<?php
	/**
		* Template name: Price
	*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/header-page' ); ?>

	<main class="main">
		<section class="price--content section">
			<p class="price--content__decor section__decor">skype - курсы</p>
			
			<div class="container">

				<div class="price--content__header">
					<div class="grums">
						<a href="#">курсы</a>
<!-- 						<span>></span>
						<a href="#">ИНДИВИДУАЛЬНЫЕ skype - курсы</a> -->
					</div>
					<a href="<?php the_field('btn'); ?>" class="btn btn--franchise">ко всем курсам</a>
				</div>

				

					
				<?php if( have_rows('list') ): ?>

					<div class="price--content__list">

					<?php while( have_rows('list') ): the_row(); 

						$link = get_sub_field('link');
						$title = get_sub_field('title');
						$price = get_sub_field('price');
						$time = get_sub_field('time');
						$text = get_sub_field('text');

						?>
							<div class="price--content__item">
								<div class="price--content__item_header">
									<h3><?php echo $title; ?></h3>
									<p><?php echo $time; ?></p>
								</div>
								<div class="price--content__item_main">
									<div class="price--content__item_main--price"><?php echo $price; ?></div>
									<?php echo $text; ?>
<!-- 									<a href="#" class="price--content__item_main--link"><b>подробнее о курсе</b></a>
 -->									<a href="<?php echo $link; ?>" class="btn btn--franchise">купить <b></b></a>
								</div>
							</div>

					<?php endwhile; ?>

				</div>

			<?php endif; ?>

			</div>
		</section>
	</main>

<?php get_footer(); ?>