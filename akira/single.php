
<?php get_header('page'); ?>
	
	<main class="main">
		<section class="article blog--content price--content section">
			<p class="price--content__decor section__decor">новости</p>
			
			<div class="container">
				
				<div class="grums">
					<a href="#">блог</a>
					<span>></span>
					<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-10">
						
						<article>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<a href="#" class="btn btn--franchise">ко всем новостям</a>
						</div>

						<a href="#" class="btn btn--franchise">ко всем новостям</a>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>