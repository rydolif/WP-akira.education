
<section class="course section">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--position-four parallax--width-norm">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-left">
	<div class="parallax parallax--circle--white parallax--position-five"></div>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--position-seven parallax--width-min">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--position-six parallax--width-max">

	<div class="container">

		<div class="bg--course"></div>

		<p class="course__decor section__decor">наши курсы</p>
		
		<h2>выберите курс и узнайте стоимость</h2>


			<div class="filters button-group" id="filters--button">
				<p>кого Вы планируете обучать:</p>
 		
				<div>
					<button class="button" id="child">обучать учеников</button>
					<button class="button" id="parent">обучать взрослых</button>
				</div>

			</div>

			<div class="filters filters--btn button-group child" id="filters">
				<p>обучать учеников <br>методики:</p>

				<div>
					<button class="button" data-filter=".mental">ментальная арифметика</button>
					<button class="button" data-filter=".speed">скорочтение</button>
					<button class="button" data-filter=".cal">каллиграфия</button>

				</div>

			</div>

			<div class="filters filters--btn button-group parent" id="filters">
				<p>обучать взрослых <br>методики:</p>

				<div>
					<button class="button" data-filter=".mental-parent">ментальная арифметика</button>
					<button class="button" data-filter=".speed-parent">скорочтение</button>
					<button class="button" data-filter=".cal-parent">каллиграфия</button>
				</div>

			</div>

		
		<?php if( have_rows('list') ): ?>

			<div class="row course__grid">

			<?php while( have_rows('list') ): the_row(); 

				$link = get_sub_field('link');
				$image = get_sub_field('img');
				$filter = get_sub_field('filter');
				$text = get_sub_field('text');

				?>

				<div class="col-lg-4 col-sm-6 item <?php echo $filter; ?>">
					<div class="course__grid_item">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="course__grid_item--img">
						<div  class="course__grid_text">
							<p><?php echo $text; ?></p>
						</div>
						<a href="<?php echo $link; ?>" class="btn">Купить <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
					</div>
				</div>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>
</section>
