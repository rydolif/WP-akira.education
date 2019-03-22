	
<?php
	/**
		* Template name: Скорочтение
	*/
?>


<?php get_header(); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<section class="curse--hero hero section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/speed.jpg)">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--sped-six parallax--position-six parallax--width-big">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--sped-four parallax--position-four parallax--width-big">
		<div class="container">
			
			<h1>Стань преподавателем <span>скорочтение </span><br> за 14 дней, <b>от 4 920 руб.</b></h1>
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
						<iframe width="1663" height="738" src="https://www.youtube.com/embed/w4VEOPP8giw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
						Курсы скорочтения:
					</h3>
					<ul>
						<li>Пройти обучение по курсу три в одном: скорочтение, эмоциональный интеллект, развитие памятие</li>
						<li>Запустить свой бизнес и открыть школу скорочтения</li>
						<li>Узнать все нюансы запуска бизнеса</li>
						<li>Получить кредит на запуск своего дела </li>
						<li>Стать партнером «AKIRA Education»</li>
					</ul>
				</div>

				<div class="curse--step__item">
					<div class="curse--step__item_number">2</div>
					<h3>
						<b>СТАТЬ ПРЕПОДАВАТЕЛЕМ </b>
						Курсы скорочтения:
					</h3>
					<ul>
						<li>Освоить современные техники и методы изучения скорочтения, развития эмоционального интеллекта, развития памяти</li>
						<li>Получить сертификат преподавателя, инструктора тренеров скорочтения</li>
						<li>Получить рекомендации для трудоустройства и возможность стать педагогом «AKIRA Education» </li>
					</ul>
				</div>

				<div class="curse--step__item">
					<div class="curse--step__item_number">3</div>
					<h3>
						<b>СТАТЬ ПРЕПОДАВАТЕЛЕМ </b>
						Курсы скорочтения:
					</h3>
					<ul>
						<li>Стать профессионалом в области скорочтения</li>
						<li>Научить скорочтению своих детей или внуков</li>
						<li>Применять навыки скорочтения ежедневно</li>
						<li>Получить кредит на курсы по скорочтению</li>
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
						<h4>ОБУЧЕНИЕ ПРОВОДЯТ <br> ТРЕНЕРЫ МЕЖДУНАРОДНОЙ <br> АССОЦИАЦИИ </h4>
					</div>
					<p>
						Все курсы разработаны сертифицированными тренерами международной ассоциации  и показали свою особую эффективность. 
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>все курсы и <br>материалы можно <br>приобрести в <br>РАССРОЧКу или КРЕДИТ </h4>
					</div>
					<p>
						При необходимости Вы можете воспользоваться беспроцентной рассрочкой на 12 месяцев или кредитом на оплату обучения.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>БЕСПЛАТНОе <br>СОПРОВОЖДЕНИе И <br>КОНСУЛЬТИРОВАние</h4>
					</div>
					<p>
						В зависимости от пакета вы получите бесплатное сопровождение и консультирование и сможете задавать нашим метоистам свои вопросы по методике преподавания, организации преподавательской деятельности и бизнеса.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ДОСТУП К <br>образовательной инфраструктуре<br>  «AKIRA Education»</h4>
					</div>
					<p>
						Вам будет открыт доступ к кабинету учителя, , чату выпускников, дополнительным материалам по скорочтению, доступ к функционалу "Akira Smart". <br>Протестировать образовательную инфраструктуру сейчас (ведет в тестовый кабинет).
					</p>
					<a href="#" class="btn btn--curse--advantages sing_open"> протестировать <br>образовательную среду</a>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ПОЛУЧЕНИЕ СЕРТИФИКАТА<br> инструктора</h4>
					</div>
					<p>
						Сдав экзамен Вы получите сертификат Международной Ассоциации, подтверждающий ваше членство и результаты проведенных экзаменов. Сертификат можно получить и без обучения, если Вы уже владеете навыками скорочтения и методиками обучения.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>обеспечиваем  МАТЕРИАЛАМИ <br> ДЛЯ ПРОВЕДЕНИЯ ваших <br>курсов</h4>
					</div>
					<p>
						Вы получите  необходимые материалы дляваших курсов. Красочные учебники разработаны на основе японских методик, адаптированы и опробованы детьми в РФ и СНГ на протяжении 4-х лет. Авторы пособий – методисты, сертифицированные в авторитетной организации "Школа эйдетики", во главе с профессором И.Ю. Матюгиным.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ВАШИ УЧЕНИКИ БУДУТ<br> ВАС РЕКОМЕНДОВАТЬ</h4>
					</div>
					<p>
						Вы научитесь не толькотехникам скорочтения, развития эмоционального иртеллекта, развития памяти, но и основам привлечения клиентов, а также алгоритму успешных коммуникаций с учениками и их родителями.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>гарантич возврата?<br> ВЕРНЕМ ДЕНЬГИ</h4>
					</div>
					<p>
						Если после первого занятия Вы передумали, мы вернем Вам полную стоимость курса.
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

	<section class="info--mail info section">
		<span class="parallax parallax--num parallax--num-left">?</span>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num parallax--num-right">

		<div class="container">
			<div class="info__container">
				<h3>Готовы начать??? </h3>
				<a href="#" class="btn opros_open">Пройдите опрос  <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
			</div>
			<h3><span>пройдите обучение в  </span>“akira education” !!!</h3>
		</div>
	</section>

	
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