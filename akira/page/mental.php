	
<?php
	/**
		* Template name: Ментальная арифметика
	*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<section class="curse--hero hero section">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--sped-six parallax--position-six parallax--width-big">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--sped-four parallax--position-four parallax--width-big">
		<div class="container">
			
			<h1>Стань преподавателем <span>ментальной арифметики</span> за 7 дней, <b>от 4 920 руб.</b></h1>
			<p>Рассрочка, чат выпускников, сопровождение и забота, гибкий график, сертификат международной ассоциации</p>

		</div>
	</section>

	<section class="curse--video section">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-seven parallax--position-seven parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--sped-four parallax--position-four parallax--width-big">
		<p class="curse--video__decor section__decor">методика</p>

		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-man.png" alt="" class="curse--video__man">
			<div class="row justify-conternt-center">

				<div class="offset-lg-3 col-lg-6">
					<div class="curse--video__container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Pq9k7DvcqXc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="curse--video__content">
						<p><b>все преимущества</b> методики</p>
						<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></use></svg>
						<p>в одном видео. <b>Посмотри !!!</b></p>
						<svg class="svg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg>
					</div>
				</div>

			</div>			
		</div>
	</section>

	<section class="curse--step section">
		<p class="curse--step__decor section__decor">мы предлагаем</p>
		<div class="container">

			<h2>С нами вы сможете</h2>

			<div class="curse--step__list">
				
				<div class="curse--step__item">
					<div class="curse--step__item_number">1</div>
					<h3>
						<b>СОЗДАТЬ СОБСТВЕННУЮ ШКОЛУ</b>
						Ментальной арифметики:
					</h3>
					<ul>
						<li>Пройти обучение по ментальной арифметике</li>
						<li>Организовать бизнес и открыть школу МА</li>
						<li>Узнать все тонкости ведения бизнеса</li>
						<li>Получить кредит на запуск своего бизнеса</li>
						<li>Стать партнером «AKIRA Education»</li>
					</ul>
				</div>
				<div class="curse--step__item">
					<div class="curse--step__item_number">2</div>
					<h3>
						<b>СТАТЬ ПРЕПОДАВАТЕЛЕМ </b>
						ментальной арифметики:
					</h3>
					<ul>
						<li>Научиться методам обучения ментальной арифметике</li>
						<li>Сдать на сертификат преподавателя/инструктора МА</li>
						<li>Получить рекомендации для устройства на работу</li>
					</ul>
				</div>
				<div class="curse--step__item">
					<div class="curse--step__item_number">3</div>
					<h3>
						<b>ИЗУЧИТЬ МА</b> <br>
						для себя:
					</h3>
					<ul>
						<li>Стать гуру в области ментальной арифметики</li>
						<li>Научить ментальной арифметике собственных детей</li>
						<li>Применять знания по МА в жизни</li>
						<li>Получить кредит на обучение МА</li>
					</ul>
				</div>

			</div>
		</div>
	</section>

	<section class="info--mobile info section">
		<span class="parallax parallax--num parallax--num-left">!</span>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-right">
		<div class="container">
			<div class="info__container">
				<h3><span>Скачайте</span> мобильное приложение <br><span>уже сейчас абсолютно</span> бесплатно!</h3>
				<div class="info--mobile__link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.png" alt="">
					<a href="<?php the_field('market', 'option'); ?>">скачать</a>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'parts/section-choose' ); ?>

	<section class="info--call info section">
		<span class="parallax parallax--num parallax--num-left">?</span>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--num parallax--num-right">
		
		<div class="container">
			<div class="info__container">
				<h3><span>Не можете выбрать курс???</span> <a href="#" class="btn order_open">обратный звонок  <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a></h3>
			</div>
			<div class="info__container">
				<h3>Позвоните нам!!!   </h3>
				<a href="tel:<?php the_field('tel', 'option'); ?>" class="info--call__tel"><b><?php the_field('tel', 'option'); ?></b></a>
			</div>
		</div>
	</section>

	<section class="curse--advantages advantages section">
		<div class="container">

			<p class="curse--advantages__decor advantages__decor section__decor">почему мы</p>

			<h2>Преимущества обучения у нас</h2>

			<?php get_template_part( 'parts/section-advantages' ); ?>

			<div class="curse--advantages__line"></div>

			<div class="curse--advantages__content">
				
				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ВАС ОБУЧАТ <br> ТРЕНЕРЫ МЕЖДУНАРОДНОЙ <br>АССОЦИАЦИИ МА </h4>

					</div>
					<p>
						Все курсы подготовлены сертифицированными тренерами международной ассоциации МА и показали свою высокую эффективность.  
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4> ГОДОВАЯ БЕСПРОЦЕНТНАЯ<br> РАССРОЧКА/КРЕДИТ<br> НА ОБУЧЕНИЕ</h4>

					</div>
					<p>
						При необходимости Вы можете воспользоваться беспроцентной рассрочкой на 12 месяцев или кредитом на оплату обучения.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>5 ЛЕТ БЕСПЛАТНОГО <br>СОПРОВОЖДЕНИЯ <br>И КОНСУЛЬТИРОВАНИЯ</h4>

					</div>
					<p>
						Вы получите 5 лет бесплатного сопровождения и консультирования и сможете задавать нашим тренерам любые вопросы по МА и ведению преподавательской деятельности и бизнеса.

					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ДОСТУП К ОБРАЗОВАТЕЛЬНОЙ <br>СРЕДЕ «AKIRA Education»</h4>

					</div>
					<p>
						Вам будет открыт доступ к кабинету учителя, функционалу «Akira Smart», онлайн-порталу учеников, чату выпускников, дополнительным материалам по ментальной арифметике. 
					</p>
					<a href="#" class="btn btn--curse--advantages sing_open"> протестировать образовательную среду</a>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ПОЛУЧЕНИЕ СЕРТИФИКАТА<br> НА ПРЕПОДАВАНИЕ</h4>
					</div>
					<p>
						После сдачи экзаменов Вам будет выдан бессрочный сертификат Международной Ассоциации Ментальной Арифметики на ведение преподавательской деятельности или проведения инструктажа. На  сертификат можно сдать и без обучения, если Вы уже владеете МА и методиками обучения.

					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ПОЛНОСТЬЮ СНАБЖАЕМ МАТЕРИАЛАМИ<br> ДЛЯ ПРОВЕДЕНИЯ ТРЕНИНГОВ</h4>
						  
					</div>
					<p>
						Вы получите все необходимые материалы для ведения преподавательской деятельности. Красочные учебники разработаны на основе японских пособий, адаптированы к потребителю и опробованы детьми в РФ и СНГ на протяжении 4-х лет. Авторы пособий – методисты, сертифицированные в Ассоциации Ментальной Арифметики PAMA Global.

					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4> ВАШИ УЧЕНИКИ<br> БУДУТ ВАС <br>РЕКОМЕНДОВАТЬ</h4>
					</div>
					<p>
						Вы научитесь не только ментальной арифметике, но и привлечению клиентов, а также успешному взаимодействию с учениками и их родителями.

					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>НЕ ПОНРАВИЛОСЬ ПЕРВОЕ ЗАНЯТИЕ? <br> ВЕРНЕМ ДЕНЬГИ</h4>
					</div>
					<p>
						Если после первого занятия Вы вдруг поймете, что МА – не для Вас, мы вернем Вам полную стоимость курса.

					</p>
				</div>

			</div>

		</div>
	</section>

	<section class="curse--info--mail info--mail info section">
		<span class="parallax parallax--num parallax--num-left">?</span>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--num parallax--num-right parallax--width-norm">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10">
					<div class="curse--info--mail__container info__container">
						<h3><span>Оставьте свой email и</span></h3>
						<a href="#" class="btn modal-mail_open">Ваш Email <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
					</div>
					<h3><b>получите доступ к вебинару по ментальной арифметике абсолютно бесплатно!</b></h3>
				</div>
			</div>
		</div>
	</section>

	<section class="curse--work section">
		<p class="curse--work__decor section__decor">галерея</p>
		<div class="container">

			<div class="curse--work__title">
				<h2>как мы работаем</h2>
				<div class="curse--work__title_soc">
					<p>Подписывайтесь на наши группы в соцсетях. <br> Общайтесь и следите за новостями</p>
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

			<?php get_template_part( 'parts/section-work' ); ?>
			
		</div>
	</section>

	<section class="info--mail info section">
		<span class="parallax parallax--num parallax--num-left">?</span>
		<span class="parallax parallax--num parallax--num-right">%</span>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="info__container">
						<h3><span>Пройдите опрос </span></h3>
						<a href="#" class="btn opros_open">Пройдити опрос  <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
					</div>
					<h3>и получите купон на скидку!!!</h3>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'parts/section-graduates' ); ?>

	<?php get_template_part( 'parts/section-question' ); ?>

	<section class="curse--question__info question__info info section">
		<span class="parallax parallax--num parallax--num-right">?</span>

		<div class="container">
			<h3><span>Не нашли ответ на интересующий Вас вопрос? </span></h3>
			<div class="info__container">
				<h3>Задайте свой вопрос нам! </h3>
				<a href="#" class="btn sing_open">Задайте вопрос  <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
			</div>
		</div>
	</section>
	
<?php get_footer('curse'); ?>