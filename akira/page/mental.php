	
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
			<p>Работаем в 5 городах Казахстана, круглый год! Курсы, сертификация, кредит на обучение</p>

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
						<li>Пройти практику МА в одной из наших школ(?)</li>
						<li>Сдать на сертификат преподавателя/инструктора МА</li>
						<li>Получить рекомендации для устройства на работу</li>
					</ul>
				</div>
				<div class="curse--step__item">
					<div class="curse--step__item_number">3</div>
					<h3>
						<b>СТАТЬ ПРЕПОДАВАТЕЛЕМ </b>
						ментальной арифметики:
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
						<h4>ОБУЧЕНИЕ проводится <br> ТРЕНЕРами МЕЖДУНАРОДНОЙ АССОЦИАЦИИ <br>с профильным образованием. </h4>
					</div>
					<p>
						Все курсы разработаны сертифицированными тренерами международной ассоциации, имеющими художественное образование и педагогический опыт,  и показали свою особую эффективность. 
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4> все наши продукты<br> доступны в рассрочку<br> и в кредит.</h4>
					</div>
					<p>
						В случае такой необходимости существует возможность воспользоваться  рассрочкой или кредитом на оплату обучения.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>сопровождаем и <br>консультируем всех <br>выпускников</h4>
					</div>
					<p>
						Вы получаете бесплатное сопровождение и консультирование, и сможете задавать методистам вопросы по методике, организации образовательного процесса и развитию бизнеса.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ДОСТУП К образовательным <br>инструментам  «AKIRA Education»</h4>
					</div>
					<p>
						Вам будет открыт доступ к учебному порталу, онлайн-чату выпускников, доступ к функционалу "Akira Smart".
						<br>Протестировать образовательную инфраструктуру сейчас (ведет в тестовый кабинет).
					</p>
					<a href="#" class="btn btn--curse--advantages sing_open"> протестировать <br>образовательную среду</a>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>ПОЛУЧЕНИЕ СЕРТИФИКАТА<br> межународной ассоциации</h4>
					</div>
					<p>
						Вы получаете сертификат Международной Ассоциации о членстве в ассоциации, и с информацией о результатах проведенных экзаменов. Есть возможность получить сертификат без обучения, если Вы уже владеете навыками красивого письма и методиками обучения.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>Полное обеспечение<br> материалами</h4>
					</div>
					<p>
						Вы получите необходимые материалы для ваших курсов. Увлкательные прописи разработаны на основе японских методик, адаптированы и проработаны с детьми в РФ, СНГ в течение 4-х лет. 
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4> ВАШИ УЧЕНИКИ<br> БУДУТ ВАС <br>РЕКОМЕНДОВАТЬ</h4>
					</div>
					<p>
						Вы научитесь не только правилам красивого письма , но и с по шаговой системой привлечения учеников, и порядку взаимодействия с родителями и детьми.
					</p>
				</div>

				<div class="curse--advantages__content_item">
					<div class="curse--advantages__content_header">
						<b>+</b>
						<h4>Гарантируем возврат<br> вложений</h4>
					</div>
					<p>
						Если после первого урока Вы решили не продолжать обучение, мы вернем Вам оплаченную стоимость курса.
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

					<div class="block block--active">
						<div class="block__header">
							<span></span>
							<p><b>С ЧЕГО НАЧАТЬ?</b></p>
						</div>
						<div class="block__content">
						  <p>
							Оставьте заявку на сайте и пройдите бесплатный пробный урок с тренером
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>КОГДА СТАРТУЮТ БЛИЖАЙШИЕ КУРСЫ?</b></p>
						</div>
						<div class="block__content">
						  <p>
							 По видеокурсам вы можете самостоятельного начать обучаться в любое время, скайп-курсы проводятся индивидуально с тренером в любом удобном графике, в группах проводится только обучение на тренерских курсах (инструктор тренеров).
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>ГДЕ МОЖНО ОЗНАКОМИТЬСЯ С РАСПИСАНИЕМ ЗАНЯТИЙ?</b></p>
						</div>
						<div class="block__content">
						  <p>
							  Вы можете начать обучаться в любой удобное вам время, согласовав его с методистом, график всех занятий также подбираетне сами, но согласуется он заблаговременно
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>КАК МОЖНО ЗАПИСАТЬСЯ НА КУРС?</b></p>
						</div>
						<div class="block__content">
						  <p>
							   Позвоните нам, оставьте заявку, напишите на e-mail, или купите курс в вашем личном кабинете.
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>ГДЕ ПРОХОДЯТ ЗАНЯТИЯ?</b></p>
						</div>
						<div class="block__content">
						  <p>
							 Занятия проводятся по скайпу, а также путем просмотра видекурсов или очно в центрах наших партнёров.
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>СКОЛЬКО СТОИТ КУРС?</b></p>
						</div>
						<div class="block__content">
						  <p>
							О действующих спецпредложениях вам сможет рассказать менеджер-на постоянной основе проводятся акции, розыгрыши, конкурсы, стоимость курсов вы можете самостоятельно узнать на страницах курсов, или в вашем Личном кабинете в разделе Магазин.
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>КАКОВА ПРОДОЛЖИТЕЛЬНОСТЬ КАЖДОГО КУРСА?</b></p>
						</div>
						<div class="block__content">
						  <p>
							  Продолжительность курсов указана на страницах с их описанием.
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>КАК РЕШИТЬ ВОПРОС О ПРОПУСКЕ ЗАНЯТИЙ?</b></p>
						</div>
						<div class="block__content">
						  <p>
							  Предварительно уведомив тренера и согласовав изменения в графике вы сможете перенести занятие.
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>ГДЕ МОЖНО ПОСМОТРЕТЬ ПРОГРАММЫ КУРСОВ?</b></p>
						</div>
						<div class="block__content">
						  <p>
								Вернитесь в раздел "выберите курс и узнайте стоимость" и выберите интересующий курс
						  </p>
						</div>
					</div>

					<div class="block">
						<div class="block__header">
							<span></span>
							<p><b>ЕСТЬ ЛИ ПРОБНЫЕ ЗАНЯТИЯ?</b></p>
						</div>
						<div class="block__content">
						  <p>
								До начала обучения вы можете пройти индивидуальный пробный урок с тренером и задать все интересующие вопросы
						  </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

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