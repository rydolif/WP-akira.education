
<div class="curse--work__slider">

	<?php if( have_rows('gallery') ): ?>

		<?php while( have_rows('gallery') ): the_row(); 
			$image = get_sub_field('img');
			?>

			<a href="<?php echo $image['url']; ?>" class="curse--work__slider_item" data-fancybox="gallery">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			</a>

		<?php endwhile; ?>


	<?php endif; ?>
	
</div>