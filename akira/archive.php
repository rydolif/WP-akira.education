
<?php get_header(); ?>

	<?php get_template_part( 'parts/header-page' ); ?>

	<main class="main">
		<section class="blog--content price--content section">
			<p class="price--content__decor section__decor">новости</p>
			
			<div class="container">

				<h2>блог</h2>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="blog--content__article">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>
						<div class="blog--content__article_text">
							<time datetime="1969-07-16">
								<?php echo get_the_date('Y-m-d'); ?>
							</time>
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="btn btn--franchise">читать <svg><use xlink:href="#arrow"></use></svg></a>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php wptuts_pagination(); ?>

			</div>
		</section>
	</main>

<?php get_footer(); ?>