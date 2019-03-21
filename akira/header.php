<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta name="theme-color" content="#000">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;subset=cyrillic-ext" rel="stylesheet">
</head>

<?php wp_head(); ?>

<body>
	
	<?php get_template_part( 'parts/preloader' ); ?>
 
	<header class="header">
		<div class="container">
			<div class="header__container">
		
				<a href="<?php echo get_home_url(); ?>" class="header__logo">
					<svg><use xlink:href="http://localhost/akira/wp-content/plugins/svg-spritemap/defs.svg#:logo"></use></svg>
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
						<svg><use xlink:href="http://localhost/akira/wp-content/plugins/svg-spritemap/defs.svg#:telephone"></use></svg>
					</div>
					<a href="tel:84999384355"><b>8 (499) 938-43-55</b></a>
					<br>
					<a href="#" class="order_open">заказать звонок</a>
				</div>

				<div class="header__login">
					<a href="#" class="">
						<svg><use xlink:href="http://localhost/akira/wp-content/plugins/svg-spritemap/defs.svg#:user"></use></svg>
						<b>вход</b>
					</a>
				</div>

			</div>
		</div>
	</header>
