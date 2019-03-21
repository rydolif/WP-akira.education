
<?php get_header(); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<div class="bg--hero"></div>

	<section class="hero section">

		<div class="parallax parallax--circle--white parallax--sped-seven parallax--position-seven"></div>
		<div class="parallax parallax--circle--light parallax--sped-four parallax--position-six"></div>
		<div class="parallax parallax--circle--white parallax--sped-five parallax--position-five"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-five parallax--position-four parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-left">

		<div class="container">
			<div class="row">
				<div class="offset-xl-2 col-xl-4 col-lg-6">

					<p class="hero__sub-title"><b>International Association</b></p>

					<div class="hero__logo">
						<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></svg>
					</div>

					<a href="#" class="btn hero__btn order_open">начать обучение <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>

				</div>

			</div>

			<div id="coverflow">
				<ul class="flip-items">
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="">
						<p class="text">Обучаем детей <br>и проводим олимпиады</p>
						<a href="#" class="btn btn--more training_open">записаться</a>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt="">
						<p class="text">Обучаем инструкторов<br> для детей</p>
						<a href="#" class="btn btn--more training_open">записаться</a>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt="">
						<p class="text">Обучаем инструкторов<br> для взрослых</p>
						<a href="#" class="btn btn--more training_open">записаться</a>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png" alt="">
						<p class="text">Обеспечиваем материалами и<br> онлайн-портал</p>
						<a href="#" class="btn btn--more training_open">записаться</a>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/5.png" alt="">
						<p class="text">Сертифицируем детей и<br> взрослых</p>
						<a href="#" class="btn btn--more training_open">записаться</a>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/6.jpg" alt="">
						<p class="text">Франшиза детского<br> центра Akira Education</p>
						<a href="#" class="btn btn--more training_open">записаться</a>
					</li>
				</ul>
			</div>

		</div>
	</section>

	<section class="advantages section">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--position-six parallax--sped-four parallax--width-min">

		<div class="container">

			<p class="advantages__decor section__decor">претмущества</p>

			<h2>Наши преимущества</h2>

			<?php get_template_part( 'parts/section-advantages' ); ?>

		</div>
	</section>

	<section class="techniques section">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-seven parallax--position-seven parallax--width-min">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-four parallax--position-four parallax--width-big">

		<div class="container">
			
			<p class="techniques__decor section__decor">наши методики</p>

			<h2>Наши методики</h2>

			<div class="techniques__list">
				<div class="techniques__item">
					<svg class="techniques__item_svg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:abacus"></use></svg>
					<p>ментальная <br> арифметика</p>
					<a href="#" class="btn btn--accent-dark presentation_open">получить<br> презентацию <svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></a>
				</div>
				<div class="techniques__item">
					<svg class="techniques__item_svg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:books"></use></svg>
					<p>скорочтение</p>
					<a href="#" class="btn btn--accent-dark presentation_open">получить<br> презентацию <svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></a>
				</div>
				<div class="techniques__item">
					<svg class="techniques__item_svg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:calligraphy"></use></svg>
					<p>каллиграфия</p>
					<a href="#" class="btn btn--accent-dark presentation_open">получить<br> презентацию <svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></a>
				</div>
				<div class="techniques__item">
					<svg class="techniques__item_svg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:emocional"></use></svg>
					<p>эмоциональный <br> интеллект</p>
					<a href="#" class="btn btn--accent-dark presentation_open">получить<br> презентацию <svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></a>
				</div>
				<div class="techniques__item">
					<svg class="techniques__item_svg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:memory"></use></svg>
					<p>эйдетика и <br> мнемотехника</p>
					<a href="#" class="btn btn--accent-dark presentation_open">получить<br> презентацию <svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></a>
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
					<a href="<?php the_field('market', 'option'); ?>" target="_blank">скачать</a>
				</div>
			</div>
		</div>
	</section>

	<section class="about section" id="about">

		<p class="advantages__decor section__decor">О нас</p>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-six parallax--position-six parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt=""class="parallax parallax--sped-four parallax--position-four">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt=""class="parallax parallax--sped-seven parallax--position-seven parallax--width-min">

		<div class="container">

			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-bg.png" alt="" class="about__bg">

			<div class="about__top">
				<h2>О нас</h2>
				<p>
					Компания IA «AKIRA Education» - международная ассоциация педагогов,
					<br> имеющая многочисленую партнёрскую сеть, с присутствием в 15 странах
					<br> мира. Мы способствуем запуску курсов дополнительного образования 
					<br>для детей, обеспечивая выпускников и партнёров всем необходимым - 
					<br> знаниями, материалами, программным обеспечением, маркетинговыми 
					<br>материалами и многим другим, на доступных условиях - от 
					<br>демократичных пакетов и до франшизы.
				</p>
				<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></use></svg>
			</div>

			<div class="row">

				<div class="col-lg-6">
					<iframe width="1663" height="738" src="https://www.youtube.com/embed/w4VEOPP8giw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="about__soc">
						<a href="<?php the_field('in', 'option'); ?>" target="_blank">
							<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:instagram"></use></svg>
						</a>
						<a href="<?php the_field('youtube', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="">
						</a>
						<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt="">
						</a>
						<p>
							Подписывайтесь на наши группы в соцсетях.
							<br>Общайтесь и следите за новостями
						</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="about__content">
						<p>
							В 2015 году мы открыли свой первый центр в городе Алматы и запустили занятия. Для нас было важно качество, потому мы привлекали в компанию только тех людей, которые могли обеспечить идеальное выполнение работы. Занятия к концу года успешно шли уже в 10 партнёрских центрах города.
							<span>2015</span>
						</p>
						<p>
							Обучение стало настолько популярным, что к 2016 году нам пришлось расширить наш штат до 50 человек, включая тренеров, сертифицированных авторов учебников и специалистов по созданию и ведению бизнеса. К тому времени у нас было 5 собственных центров в городах Казахстана.
							<span>2016</span>
						</p>
						<p>
							В 2017 году была значительно расширена партнерская сеть компании, общее число партнеров достигло 71 организации
							<span>2017</span>
						</p>
						<p>
							В 2018 году партнерская сеть выросла до 100 организаций, в которых успешно велась и ведется образовательная деятельность по нашим методикам. На настоящий момент мы выпустили более 5000 учеников, 800 выпускников -тренеров, из которых большинство ведут успешную преподавательскую деятельность.
							<span>2018</span>
						</p>
					</div>
				</div>

			</div>

		</div>
	</section>

	<section class="team section">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--position-six parallax--sped-six parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--position-four parallax--sped-four parallax--width-min">
		<div class="container">

			<p class="team__decor section__decor">наша команда</p>
			
			<h2>Наша команда</h2>

			

		<?php if( have_rows('team') ): ?>

			<div class="team__slider">

			<?php while( have_rows('team') ): the_row(); 

				$image = get_sub_field('img');
				$name = get_sub_field('name');
				$position = get_sub_field('position');

				?>

				<div class="team__slide">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<p>
						<b class="team__name"><?php echo $name; ?></b>
						<span class="team__text"><?php echo $position; ?> </span>
					</p>
				</div>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>


<!-- 
				<div class="team__slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team1.png" alt="">
					<p>
						<b class="team__name">Кудряшова Любовь</b>
						<span class="team__text">руководитель методического блока, партнёр IA "Akira Education", директор центров </span>
					</p>
				</div>

				<div class="team__slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team2.jpg" alt="">
					<p>
						<b class="team__name">Савостьянова Наталья</b>
						<span class="team__text">практикующий тренер-методист, партнёр IA "Akira Education",  директор центров, психолог</span>
					</p>
				</div>
				<div class="team__slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team3.jpg" alt="">
					<p>
						<b class="team__name">Селивёрстова Дарья</b>
						<span class="team__text">практикующий тренер-методист, профессиональный художник</span>
					</p>
				</div>
				<div class="team__slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team4.jpg" alt="">
					<p>
						<b class="team__name">Гомолко Юлия</b>
						<span class="team__text">руководитель блока продаж, практикующий педагог</span>
					</p>
				</div>
				<div class="team__slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team6.png" alt="">
					<p>
						<b class="team__name">Араспаева Алена</b>
						<span class="team__text">руководитель блока обеспечения материалами, сертифицированный менеджер по качеству.</span>
					</p>
				</div>
				<div class="team__slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team5.png" alt="">
					<p>
						<b class="team__name">Ахметжанова Меруерт</b>
						<span class="team__text">методист, магистр MBA, практикующий тренер.</span>
					</p>
				</div> -->

		</div>
	</section>

	<section class="info--mail info section">
		<span class="parallax parallax--num parallax--num-left">!</span>
		<div class="container">
			<div class="info__container">
				<h3><span>Оставьте свой email</span></h3>
				<a href="#" class="btn modal-mail_open">Ваш Email <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
			</div>
			<h3>и получите подарок ОТ AKIRA education!</h3>
		</div>
	</section>

	<section class="begin section">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-six parallax--position-six parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--position-four parallax--sped-four parallax--width-norm">
		<div class="container">

			<p class="begin__decor section__decor">алгоритм дейвствий</p>

			<h2>с чего начать?</h2>

			<div class="begin__list">
				<div class="begin__item">
					<div class="begin__svg">
						<svg class="begin__svg_icon"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:customer-service"></use></svg>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/begin1.svg" alt="" class="begin__svg_bg">
						<svg class="begin__svg_bg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:begin1"></use></svg>
						<span class="begin__svg_number">1</span>
					</div>
					<p>
						<b>Оставьте заявку</b>
						<a href="#" class="btn begin__btn request_open">здесь</a>
					</p>
					<p>
						Менеджер свяжеться с Вами в ближайшее время
					</p>
				</div>
				<div class="begin__item">
					<div class="begin__svg">
						<svg class="begin__svg_icon"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:laptop"></use></svg>
						<svg class="begin__svg_bg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:begin2"></use></svg>
						<span class="begin__svg_number">2</span>
					</div>
					<p>
						Пройдите пробный бессплатный урок. <b>Заключаем договор</b> и Вы знакомитесь с офертой на сайте
					</p>
				</div>
				<div class="begin__item">
					<div class="begin__svg">
						<svg class="begin__svg_icon"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:pay-per-click"></use></svg>
						<svg class="begin__svg_bg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:begin3"></use></svg>
						<span class="begin__svg_number">3</span>
					</div>
					<p>
						<b>Оплата</b>. Вы получаете доступ к материалам курса и нрафик обучения
					</p>
				</div>
				<div class="begin__item">
					<div class="begin__svg">
						<svg class="begin__svg_icon"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:learn"></use></svg>
						<svg class="begin__svg_bg"><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:begin4"></use></svg>
						<span class="begin__svg_number">1</span>
					</div>
					<p>
						<b>Запускаете ваши курсы</b>. Мы сопровождаем, консультируем и проводим вебинары специально для Вас.
					</p>
				</div>

			</div>

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

	<?php get_template_part( 'parts/section-course' ); ?>

	<section class="reviews section" id="reviews">
		<p class="reviews__decor section__decor">клиенты говорят</p>

		<div class="container">

			<div class="section__title">
				<h2>отзывы наших клиентов</h2>
				<a href="https://www.youtube.com/playlist?list=PL0EgkLs2ord7CFnmrj7a5wPbEQOTOH-ww" class="btn btn--franchise" target="_blank">Все отзывы</a>
			</div>

			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8">
					<div class="reviews__slider">

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я рад был познакомиться с Араспаевым Тимуром, обучить его ребят курсу инструкторов, в дальнейшем надеюсь на творческое сотрудничество, желаю Вам успехов!
							</p>
							<div class="reviews__login">
								<b>Матюгин И.Ю. директор «Школа Эйдетики», г. Москва</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Хочу, поделиться своим отзывом об обучении в Akira, по программе скорочтения, у меня остались только положительные отзывы, положительные эмоции, потому что было очень приятно общаться с преподавателем. Все организованно, информация преподносилась понятным языком, и на все мои вопросы, которые я задавала, получала ответы, могу рекомендовать своим коллегам здесь обучаться, потому что я обучалась еще по другим программам. Но как преподносится программа в данной организации очень мне понравилось, спасибо большое тренеру, спасибо методистам и директору. Спасибо!
							</p>
							<div class="reviews__login">
								<b>Татьяна Ефимова, г. Гатчина</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я прошла курс обучения скорочтению, мне все очень понравилось, для меня было много чего нового, мне очень понравился такой вопрос-как эмоциональный интеллект, потому что без эмоционального интеллекта мы не сможем построить никакого урока, на первом уроке скорочтения я дала такой результат – я прочитала 826 знаков, на 4 уроке я прочитала 1 245 знаков. 
							</p>
							<div class="reviews__login">
								<b>Бислямова Наталья </b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Прошла курс обучения скорочтению по методике Akira, я осталась очень довольна и работой тренера, и самой методикой, мне очень приятно было работать с вами, по прочтению вашей методики я поняла, что эмоциональный интеллект, на который уделялось большой упор при изучении – это очень важно, замечательно, что уделяете этому такое внимание. Методика ваша очень рабочая – мой результат при начальном 432 слова в минуту, по окончании 643 слова в минуту. Я думаю это замечательно и спасибо вам и процветания Вашей команде.
							</p>
							<div class="reviews__login">
								<b>Орлова Наталья, г. Реутов</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Не так давно я прошла обучение в Ассоциации Akira, уже будучи действующим педагогом МА, в одной из студий нашего города. Нынче я прошла обучение по первому блоку «Сложение и вычитание» и в поисках продолжения обучения по МА по второму блоку «Умножение и деление» я находилась долго, и наконец остановила свой выбор на Ассоциации Akira. Здесь мной был приобретен комплект учебников по основным категориям кидс, джуниор, тинс. Я считаю, что по учебникам Akira, удобно и легко работать как педагогам, так и его ученикам, и их родителям. Здесь удобные методические материалы, структурированные книги и детальная проработка всех уроков. Хочу сказать большое спасибо моему личному персональному тренеру, за ее профессионализм, и внесение приветливой доброй атмосферы при проведении наших занятий! Тьютор уделяет большое внимание постановке рук и пальцев, график занятий довольно гибкий. Рекомендую всем делающим пройти обучение по МА в Ассоциации Akira. Я сама очень рада, что прошла обучение именно здесь. Желаю всем удачи! Всего доброго! До свидания!
							</p>
							<div class="reviews__login">
								<b>Иванова Римма,  г Улан-уде</b>
							</div>
						</div>
						
						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я только что закончила обучение по МА по методике Акира несмотря на то, что у меня большой педагогический стаж, я очень много для себя узнала нового. Хочу выразить огромную благодарность, всей компании Акира, особенно менеджеру Юлии, которая мне дала возможность обучиться на этих курсах, моему тренеру, которая меня буквально приковывала к компьютеру, и я даже не замечала, как проходили эти часы занятий. Я хочу выразить огромную благодарность нашему методисту, которая курировала нас с тренером, и еще хочу сказать, что все занятия и всё время обучения со мной согласовывалось и большое спасибо за обучение, было очень интересно. Всей компании хочу пожелать дальнейших успехов, профессионального роста, хочу, чтобы очень много было слушателей в этой компании, я всем желаю здоровья, счастья, финансового благополучия и благодарна за то, что у нас появилась возможность общаться через ватсап. 
							</p>
							<div class="reviews__login">
								<b>Керженцева Анна, г. Нальчик</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Мы прошли обучение по ментальной арифметике Акира, мы очень рады, что преподаватели были с нами, и обучали нас очень качественно, на все вопросы, которые мы задавали мы всегда получали четкий и ясный ответ, и в дальнейшем у нас не возникало трудностей при изучении. Мы готовы к дальнейшему сотрудничеству. Спасибо!
							</p>
							<div class="reviews__login">
								<b>Лидия Савина, г. Мытищи</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я прошла курс скорочтения и осталась очень довольна, данный курс был для меня познавательным и интересным, атмосфера на уроке была приятная, преподаватель информацию преподносила в доступной форме, на мои многочисленные вопросы я получала ответы. Мы на уроках и играли, и делали разные упражнения на развитие образного мышления, на развитие нашей памяти, самое интересное, что используя методики, которые мы изучили на уроках – они дали уже свой результат, за маленькое количество времени моя скорость увеличилась, пусть не на много, но уже есть результат, чему я очень рада! Я хотела бы поблагодарить преподавателя и весь коллектив, надеюсь мы с вами увидимся на других курсах!
							</p>
							<div class="reviews__login">
								<b>Калимуллина Василиса, г. Альметьевск</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Наша школа изначально позиционировала себя как школа ментальной арифметики. Далее мы стали обучать ребят красивому почерку и обучать чтению по авторским методикам, теперь решили увеличить сферу преподавания до скорочтения. Долго выбирали методики, школы и свой выбор остановили на Акира. Теперь понятно, что сделали мы это не зря, очень понравилась преподаватель-инструктор, во-вторых я очень много нового узнала о детской психологии и о путях решения некоторых проблем, в –третьих в понятной форме была рассказана методика преподавания скорочтения, для всех от мала-до велика. Спасибо большое!
							</p>
							<div class="reviews__login">
								<b>Сиразетдинова Эльвира</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Все обучение было в доступной форме, всё очень понятно, доходчиво было объяснено, домашнее задание, которое предлагалось мне в течение обучения, было адекватное по сложности, по объему и выполнено с хорошим результатом. Еще понравилось то, что в момент общения с преподавателем я получила сведения о том, как на практике применять разнообразные приемы, допустим, как повысить мотивацию для выполнения ДЗ у детей, или как помочь детям, которым очень трудно представить ментально спицу абакуса, какими приемами можно им в данном случае помочь. Всё обучение было приятное, доступное, надеюсь на дальнейшее сотрудничество! Спасибо!
							</p>
							<div class="reviews__login">
								<b>Михайлова Ольга</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я проходила обучение по ментальной арифметике, мне очень понравился мой тренер, наше обучение проходило по скайпу, в ходе обучения у меня возникало очень много вопросов, тренер с терпением и доброжелательностью отвечала на все мои вопросы. Я думаю, что не ошиблась при выборе Akira Mental Arithmetic и выражаю благодарность всему коллективу. Спасибо за обучение! Желаю удачи всей команде!
							</p>
							<div class="reviews__login">
								<b>Бурханова Марварида, г. Андижан</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Хотелось бы оставит отзыв о курсе для преподавателей по скорочтению, который я прошла в Акире, скажу честно, что я давно этой темой интересуюсь и достаточно много читала, и какой- то структуры, которой следует придерживаться у меня не было. Я очень благодарна тренеру и курсу самому за то, что теперь у меня появилось понимание того – как нужно выстраивать занятия, какие техники использовать, кроме того – включение эмоционального интеллекта и заданий, связанных с его развитием, я считаю особенно важным для того, чтобы повысить мотивацию детей и взрослых в том числе, настроить их на восприятие информации и соответственно получить лучшие результаты. Поэтому я надеюсь на дальнейшее сотрудничество и моим следующим курсом будет ментальная арифметика, спасибо вам большое!
							</p>
							<div class="reviews__login">
								<b>Марина Сергеева, г. Бийск</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я только что закончила обучение в центре Akira Mental Arithmetic, информацию о центре нашла в интернете, рассмотрев материал, который предлагает центр, поговорив с работниками центра – решили сделать выбор в пользу центра Akira. Очень довольна, у меня был прекрасный педагог, который очень доходчиво знакомил меня с техникой работы на соробане, с методикой, мы вместе разбирали мои ошибки, отрабатывали правила, еще раз ей большое спасибо! Большое спасибо работникам этого центра за внимание, заботу, предоставленные материалы и тренажеры, за ту помощь, которую они оказывают и после обучения! Надеюсь на дальнейшее сотрудничество! Всем всего доброго, всем успехов!
							</p>
							<div class="reviews__login">
								<b>Абадаева Вера</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Я обучалась МА в компании Akira, хочу отметить высокий уровень организации обучения и приема экзамена. Мой методист передала меня на обучение тренеру, которая в свое время очень доступно объяснила весь материал. Я осталась очень довольна. Спасибо всем большое! Буду всем рекомендовать проходить обучение именно в Akira!
							</p>
							<div class="reviews__login">
								<b>Смольянинова Н.</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Уважаемые коллеги, мы прошли курс обучения по ментальной арифметике в Akira Mental Arithmetic, и были настолько приятно удивлены тесным контактом тренера, методических работников с нами, на протяжении всей учёбы нам было комфортно, а наш тренер дала нам очень крепкую базу для дальнейшей работы. И мы благодарны абсолютный всем!
							</p>
							<div class="reviews__login">
								<b>Екатерина Исакова. г. Лесной</b>
							</div>
						</div>

						<div class="reviews__item">
							<div class="reviews__item_decor">“</div>
							<p>
								Огромное спасибо моему тренеру, мне всё очень понравилось, обучение было очень качественным, обстановка очень дружелюбной. 
							</p>
							<div class="reviews__login">
								<b>Нечаева Эльвира, г. Москва</b>
							</div>
						</div>

					</div>
				</div>
			</div>
			
		</div>
	</section>

	<?php get_template_part( 'parts/section-question' ); ?>

	<section class="question__info info section">
		<div class="parallax parallax--circle--white parallax--num-left"></div>
		<span class="parallax parallax--num parallax--num-right">?</span>
		<div class="container">
			<h3><span>Не нашли ответ на интересующий Ваш вопрос? </span></h3>
			<div class="info__container">
				<h3>Задайте свой вопрос нам! </h3>
				<a href="#" class="btn sing_open">Задать вопрос  <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>
			</div>
		</div>
	</section>

	<section class="partners section">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-six parallax--position-six parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png" alt="" class="parallax parallax--position-four parallax--sped-four parallax--width-norm">
		<div class="container">
			
			<div class="section__title">
				<h2>наши партнеры</h2>
				<a href="<?php echo get_home_url(); ?>/parnery" class="btn btn--franchise" target="_blank">Все партнеры</a>
			</div>

			<div class="partners__slider">
				<div class="partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners1.jpg" alt=""></div>
				<div class="partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners2.jpg" alt=""></div>
				<div class="partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners3.jpg" alt=""></div>
				<div class="partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners4.jpg" alt=""></div>
				<div class="partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners3.jpg" alt=""></div>
			</div>
		</div>
	</section>
	
<?php get_footer('curse'); ?>