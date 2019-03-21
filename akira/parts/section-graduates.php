
<section class="curse--graduates section">

	<p class="curse--graduates__decor section__decor">клиенты говорят</p>
	
	<div class="container">
		
		<div class="curse--graduates__title">
			<h2>Посмотрите видео с нашими выпускниками</h2>
			<a href="<?php the_field('youtube', 'option'); ?>" class="btn btn--curse--graduates" target="_blank">смотреть все</a>
		</div>

		<?php if( have_rows('video') ): ?>

			<div class="curse--graduates__slider">

			<?php while( have_rows('video') ): the_row(); 

				$link = get_sub_field('link');
				$image = get_sub_field('img');

				?>
					<a href="<?php echo $link; ?>" class="curse--graduates__slider_item" data-fancybox="">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					</a>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>


	</div>
</section>
