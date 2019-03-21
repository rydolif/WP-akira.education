
<!-- консультация -->
<div class="modal" id="sing">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close sing_close" type="button"></button>

			<h3>Заполните форму и наш специалист свяжется с Вами для консультации.</h3>
			<input type="hidden" name="subject" value="Консультация">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--textarea">
				<textarea name="textarea" id="textarea" placeholder="Напишите Ваш вопрос"></textarea>
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox" value="">
				<label for="checkbox">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Обучаем детей и проводим олимпиады -->
<div class="modal" id="sing">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close sing_close" type="button"></button>

			<h3>Заполните форму и наш специалист свяжется с Вами для консультации.</h3>
			<input type="hidden" name="subject" value="Консультация">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--textarea">
				<textarea name="textarea" id="textarea" placeholder="Напишите Ваш вопрос"></textarea>
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox" value="">
				<label for="checkbox">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Опрос -->
<div class="modal modal--opros" id="opros">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close opros_close" type="button"></button>
			<input type="hidden" name="subject" value="Опрос">

			<div class="modal--opros__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="modal--opros__item swiper-slide">
						<h3>Пройдите опрос <b>и получите купон на скидку!!!</b></h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?
						</p>
						<div class="modal--opros__line">
							<div class="modal__line--checkbox">
								<input type="checkbox" name="checkbox" id="checkbox0" value="" checked="checked">
								<label for="checkbox0">Lorem ipsum dolor sit amet, consectetur .</label>
							</div>
						</div>
						<div class="modal__line--checkbox">
							<input type="checkbox" name="checkbox" id="checkbox1" value="">
							<label for="checkbox1">Lorem ipsum dolor sit amet, consectetur .</label>
						</div>
						<div class="modal--opros__line">
							<div class="modal__line--checkbox">
								<input type="checkbox" name="checkbox" id="checkbox2" value="">
								<label for="checkbox2">Lorem ipsum dolor sit amet, consectetur .</label>
							</div>
						</div>
						<div class="modal__line--checkbox">
							<input type="checkbox" name="checkbox" id="checkbox3" value="">
							<label for="checkbox3">Lorem ipsum dolor sit amet, consectetur .</label>
						</div>
					</div>
					<div class="modal--opros__item swiper-slide">
						<h3>Пройдите опрос <b>и получите купон на скидку!!!</b></h3>

					 	<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?
						</p>
						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio" id="radio0" value="" checked="checked">
								<label for="radio0">Lorem ipsum dolor sit amet, consectetur .</label>
							</div>
						</div>
						<div class="modal__line--radio">
							<input type="radio" name="radio" id="radio1" value="">
							<label for="radio1">Lorem ipsum dolor sit amet, consectetur .</label>
						</div>
						<div class="modal--opros__line">
							<div class="modal__line--radio">
								<input type="radio" name="radio" id="radio2" value="">
								<label for="radio2">Lorem ipsum dolor sit amet, consectetur .</label>
							</div>
						</div>
						<div class="modal__line--radio">
							<input type="radio" name="radio" id="radio3" value="">
							<label for="radio3">Lorem ipsum dolor sit amet, consectetur .</label>
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
							<button type="submit" class="btn" name="submit">получить скидку <span><svg><use xlink:href="http://localhost/akira/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></button>
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

<!-- Благодарность -->
<div class="modal" id="thanks">
	<button class="close thanks_close" type="button"></button>

	<h3>Спасибо <br>за доверие!</h3>
	<p>Мы обязательно с вами свяжемся!</p>
</div>
