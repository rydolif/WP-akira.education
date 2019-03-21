<header class="header price--header">
	<div class="container">
		<div class="header__container">
	
			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></use></svg>
			</a>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<nav class="nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'Меню',
						'menu_class'=>'list',
					    'theme_location'=>'menu',
					) );
				?>
			</nav>

			<div class="header__call call">
				<div class="call__absolute call__absolute--tel">
					<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:telephone"></use></svg>
				</div>
				<a href="tel:84999384355"><b>8 (499) 938-43-55</b></a>
				<br>
				<a href="#" class="order_open">заказать звонок</a>
			</div>

			<div class="header__login">
				<a href="#" class="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/login.png" alt="">
					<b>вход</b>
				</a>
			</div>

		</div>
	</div>
</header>