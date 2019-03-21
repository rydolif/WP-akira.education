	<footer class="footer" id="contacts">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-lg-3 col-md-6">
					<a href="<?php echo get_home_url(); ?>" class="footer__logo"><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></use></svg></a>
					<p>Международная ассоциация <br>Акира Эдукейшн, <br>International Association <br>Akira Education</p>
					<div class="footer__line"></div>
					<a href="<?php echo get_template_directory_uri(); ?>/assets/img/pk.jpg" target="_blank">Политика конфиденциальности</a>
					<p class="footer__copy">All rights reserved, 2018</p>
				</div>

				<div class="offset-lg-1 col-lg-2 col-md-6">
					<h3>меню</h3>
					<nav class="footer__nav">
						<?php 
							wp_nav_menu( array(
								'menu'=>'Меню',
								'menu_class'=>'list',
							    'theme_location'=>'menu',
							) );
						?>
					</nav>
				</div>   

				<div class="col-lg-2 col-md-6">
					<h3>контакты</h3>
					<p>
						г. Алматы, ул. Жандосова д. 58
						<a href="<?php the_field('location_map', 'option'); ?>" target="_blank" class="footer__link">Показать на карте</a>
					</p>
					<a href="tel:<?php the_field('tel', 'option'); ?>" class="footer__link"><?php the_field('tel', 'option'); ?></a>
					<a href="mailto:<?php the_field('email', 'option'); ?>" class="footer__link"><?php the_field('email', 'option'); ?></a>
					<div class="footer__soc">
						<a href="<?php the_field('in', 'option'); ?>" target="_blank">
							<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:instagram"></use></svg>
						</a>
						<a href="<?php the_field('youtube', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-youtube.png" alt="">
						</a>
						<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-vk.png" alt="">
						</a>
						<a href="<?php the_field('market', 'option'); ?>" target="_blank">
							<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:google-play"></use></svg>
						</a>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-3 col-md-6">
					<h3>Обратная связь</h3>
					<div class="footer__call call">
						<div class="call__absolute call__absolute--tel">
							<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:telephone"></use></svg>
						</div>
						<a href="tel:<?php the_field('tel', 'option'); ?>"><b><?php the_field('tel', 'option'); ?></b></a>
						<a href="#" class="order_open">заказать звонок</a>
					</div>
					<div class="footer__call call">
						<div class="call__absolute">
							<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:mail"></use></svg>
						</div>
						<a href="mailto:<?php the_field('email', 'option'); ?>"><b><?php the_field('email', 'option'); ?></b></a>
						<a href="#" class="order_open">Напишите нам</a>
					</div>
					<a href="#" class="btn btn--sing sing_open">Записаться</a>
				</div>

			</div>
		</div>
	</footer>
	