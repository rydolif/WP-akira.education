
<section class="curse--choose section">
	<div class="parallax parallax--circle--light parallax--sped-six parallax--position-six"></div>
	<div class="parallax parallax--circle--white parallax--sped-four parallax--position-four"></div>
	<p class="curse--choose__decor section__decor">варианты курсов</p>

	<div class="container">

		<h2>выберите курс для себя</h2>
		
		<?php if( have_rows('curse') ): ?>

			<div class="curse--choose__list">

			<?php while( have_rows('curse') ): the_row(); 

				$link = get_sub_field('link');
				$image = get_sub_field('img');
				$title = get_sub_field('title');
				$text = get_sub_field('text');

				?>

				<div class="curse--choose__item">
					<div class="curse--choose__header">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<h3><?php echo $title; ?></h3>
					</div>
					<div class="curse--choose__text">
						<?php echo $text; ?>
						<a href="<?php echo $link; ?>" class="btn btn--choose">выбрать курсы <svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></a>
					</div>
				</div>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>
</section>
