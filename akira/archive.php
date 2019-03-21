
<?php get_header('page'); ?>

	<main class="main">
		<section class="blog--content price--content section">
			<p class="price--content__decor section__decor">новости</p>
			
			<div class="container">

				<h2>блог</h2>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="blog--content__article">
						<img src="img/article1.jpg" alt="">
						<div class="blog--content__article_text">
							<time datetime="1969-07-16">
								<?php echo get_the_date('Y-m-d'); ?>
							</time>
							<?php the_content(); ?>
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