
<section class="question section">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--position-four parallax--width-norm">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-left">
	<div class="parallax parallax--circle--white parallax--position-five"></div>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--position-seven parallax--width-min">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--position-six parallax--width-max">
		
	<p class="question__decor section__decor">вопрос-ответ</p>

	<div class="container">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/question-decor.png" alt="" class="question__man">

		<h2>часто задаваемые вопросы</h2>

		<div class="row justify-content-center">
			<div class="col-lg-10">


				<?php if( have_rows('question') ): ?>

					<?php while( have_rows('question') ): the_row(); 

						$title = get_sub_field('title');
						$text = get_sub_field('text');

						?>
						
							<div class="block">
								<div class="block__header">
									<span></span>
									<p><b><?php echo $title; ?></b></p>
								</div>
								<div class="block__content">
								  <p>
									<?php echo $text; ?>
								  </p>
								</div>
							</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>