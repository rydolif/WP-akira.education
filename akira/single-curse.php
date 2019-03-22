<?php get_header(); ?>

	<?php get_template_part( 'parts/header-page' ); ?>

	<main class="main">
		<section class="price--content section">
			<p class="price--content__decor section__decor">skype - курсы</p>
			
			<div class="container">

				<div class="price--content__header">
					<h2><?php the_title(); ?></h2>
					<a href="<?php the_field('btn'); ?>" class="btn btn--franchise">ко всем курсам</a>
				</div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php if( have_rows('list') ): ?>

						<div class="price--content__list">

							<?php while( have_rows('list') ): the_row(); 

								$link = get_sub_field('link');
								$title = get_sub_field('title');
								$price = get_sub_field('price');
								$time = get_sub_field('time');
								$text = get_sub_field('text');
								$program = get_sub_field('program');

								?>
									<div class="price--content__item">
										<div class="price--content__item_header">
											<h3><?php echo $title; ?></h3>
											<p><?php echo $time; ?></p>
										</div>
										<div class="price--content__item_main">
											<div class="price--content__item_main--price"><?php echo $price; ?></div>
											<?php echo $text; ?>

											<div class="box">
												<div class="box__header">
													<span></span>
													<p><b>Программа курса</b></p>
												</div>
												<div class="box__content">
												  <p>
													<?php echo $program; ?>
												  </p>
												</div>
											</div>

											<a href="<?php echo $link; ?>" class="btn btn--franchise"  target="_blank">купить <b></b></a>
										</div>
									</div>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>
					
				<?php endwhile; ?>
				<?php endif; ?>

				<?php wptuts_pagination(); ?>


			</div>
		</section>
	</main>

<?php get_footer(); ?>