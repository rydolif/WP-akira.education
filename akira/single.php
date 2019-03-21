
<?php get_header(); ?>

	<?php get_template_part( 'parts/header-page' ); ?>

	<main class="main">
		<section class="article blog--content price--content section">
			<p class="price--content__decor section__decor">новости</p>
			
			<div class="container">
				
				<div class="grums">
					<b><?php the_title(); ?></b>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-10">
						
						<article>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>
							
								<?php the_content(); ?>

							<?php endwhile; ?>
							<?php endif; ?>
						</div>

						<a href="<?php echo get_home_url(); ?>/article/" class="btn btn--franchise">ко всем новостям</a>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>