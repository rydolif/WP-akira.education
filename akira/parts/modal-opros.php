
<div class="modal modal--opros" id="opros">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">
	
  
		      <script>
		      	$(function() {
			        var swiper = new Swiper('.swiper-container', {
			           pagination: {
			             el: '.swiper-pagination',
			             clickable: true,
			             renderBullet: function (index, className) {
			               return '<span class="' + className + '">' + (index + 1) + '</span>';
			             },
			           },
			           navigation: {
			             nextEl: '.swiper-button-next',
			             prevEl: '.swiper-button-prev',
			           },
			           effect: 'fade',
			         });

			        $('#opros').on('shown.bs.modal', function(e){
						swiper.update();
			        });
		        });
		      </script>

			<button class="close opros_close" type="button"></button>
			<input type="hidden" name="subject" value="Опрос">

			<div class="modal--opros__slider swiper-container">
				<div class="swiper-wrapper">

					<div class="modal--opros__item swiper-slide">
						<h3>Вы уже запустили Ваши курсы или планируете?</b></h3>
						
						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio1" id="radio0" value="Собираю информацию" checked>
								<label for="radio0">собираю информацию</label>
							</div>
						</div>

						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio1" id="Хочу вступить в ассоциацию и участвовать в олимпиадах, вебинарах и т.д." value="">
								<label for="radio1">хочу вступить в ассоциацию и участвовать в олимпиадах, вебинарах и т.д.</label>
							</div>
						</div>

						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio1" id="Запустил - нужны Smart учебники или абакусы" value="">
								<label for="radio1">Запустил - нужны Smart учебники или абакусы</label>
							</div>
						</div>

						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio1" id="Запустил, но хочу пройти более качественное обучение" value="">
								<label for="radio1">Запустил, но хочу пройти более качественное обучение</label>
							</div>
						</div>

						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio1" id="Не запустил, но хочу запустить с вашей помощью" value="">
								<label for="radio1">Не запустил, но хочу запустить с вашей помощью</label>
							</div>
						</div>

						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio1" id="Меня интересует франшиза" value="">
								<label for="radio1">Меня интересует франшиза</label>
							</div>
						</div>

					</div>

					<div class="modal--opros__item swiper-slide">
						<h3>Имеете ли педагогическое образование?</b></h3>
						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio2" id="radio2" value="Да" checked="checked">
								<label for="radio2">Да</label>
							</div>
						</div>
						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio2" id="radio3" value="Нет">
								<label for="radio3">Нет</label>
							</div>
						</div>
					</div>

					<div class="modal--opros__item swiper-slide">
						<h3>Вы работаете в сфере образования? </b></h3>
						<div class="modal--opros__line">
							<div class="modal__line--checkbox">
								<input type="checkbox" name="checkbox" id="checkbox0" value="Педагог" checked="checked">
								<label for="checkbox0">Педагог</label>
							</div>
						</div>
						<div class="modal--opros__line">
							<div class="modal__line--checkbox">
								<input type="checkbox" name="checkbox" id="checkbox1" value="Руководитель">
								<label for="checkbox1">Руководитель</label>
							</div>
						</div>
						<div class="modal--opros__line">
							<div class="modal__line--checkbox">
								<input type="checkbox" name="checkbox" id="checkbox2" value="Репетитор">
								<label for="checkbox2">Репетитор</label>
							</div>
						</div>
						<div class="modal--opros__line">
							<div class="modal__line--checkbox">
								<input type="checkbox" name="checkbox" id="checkbox3" value="Бизнесмен">
								<label for="checkbox3">Бизнесмен</label>
							</div>
						</div>
					</div>

					<div class="modal--opros__item swiper-slide">
						<h3>Какие наши продукты вас интересуют?</b></h3>
						<div class="modal__line--textarea modal--opros__textarea">
							<textarea name="textarea" placeholder="Какие наши продукты вас интересуют?"></textarea>
						</div>
					</div>

					<div class="modal--opros__item swiper-slide">
						<h3>Что мы можем улучшить для Вас в нашей работе?</b></h3>
						<div class="modal__line--textarea modal--opros__textarea">
							<textarea name="textarea" placeholder="Что мы можем улучшить для Вас в нашей работе?"></textarea>
						</div>
					</div>

					<div class="modal--opros__item--final modal--opros__item swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/question-decor.png" alt="" class="modal--opros__item--final_man">
					 	<h2>Поздравляем! <span>Вы успешно прошли тест!</span></h2>
					 	<h4>
					 		Чтобы получить скидку  - оставьте свои контактные данные, мы свяжемся с вами в течение дня
					 	</h4>
						<div class="modal__line">
							<input type="text" name="name" placeholder="Введите Ваше имя" required>
						</div>
						<div class="modal__line">
							<input type="tel" name="phone" required placeholder="Введите ваш телефон">
						</div>
						<div class="modal__line">
							<button type="submit" class="btn" name="submit">получить скидку <span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></button>
						</div>
					</div>

				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<span class="text">Вопрос:</span>
			</div>

		</form>
	</div>
</div>
