
<!-- заказать -->
<div class="modal" id="order">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close order_close" type="button"></button>

			<h3>Заполните форму и наш специалист свяжется с Вами.</h3>
			<input type="hidden" name="subject" value="Заказать дзвонок">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox1" value="" required>
				<label for="checkbox1">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

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
				<textarea name="comment" id="textarea" placeholder="Напишите Ваш вопрос"></textarea>
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox2" value="" required>
				<label for="checkbox2">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Обучаем -->
<div class="modal" id="training">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close training_close" type="button"></button>

			<h3>Записаться на обучение</h3>
			<input type="hidden" name="subject" value="Записаться з главной страницы">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox3" value="" required>
				<label for="checkbox3">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Презентация -->
<div class="modal" id="presentation">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close presentation_close" type="button"></button>

			<h3>получить презентацию</h3>
			<input type="hidden" name="subject" value="Получить презентацию">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox4" value="" required>
				<label for="checkbox4">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Почта -->
<div class="modal" id="modal-mail">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close modal-mail_close" type="button"></button>

			<h3>Оставьте свой email <br>И ПОЛУЧИТЕ ПОДАРОК ОТ AKIRA EDUCATION!</h3>
			<input type="hidden" name="subject" value="Получить презентацию">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox5" value="" required>
				<label for="checkbox5">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Заявка -->
<div class="modal" id="request">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close request_close" type="button"></button>

			<h3>Оставьте заявку</h3>
			<input type="hidden" name="subject" value="Оставьте заявку">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox6" value="" required>
				<label for="checkbox6">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- Заявка franchise -->
<div class="modal" id="request-franchise">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close request-franchise_close" type="button"></button>

			<h3>Оставьте заявку<br> на франшизу</h3>
			<input type="hidden" name="subject" value="Оставьте заявку">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox7" value="" required>
				<label for="checkbox7">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>

<!-- франшиза -->
<div class="modal" id="order-franchise">
	<div class="wrapper">
		<form action="sendmail.php" class="form" method="post">

			<button class="close order-franchise_close" type="button"></button>

			<h3>Заполните форму и наш специалист свяжется с Вами для консультации.</h3>
			<input type="hidden" name="subject" value="Франшиза">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Введите Ваше имя" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" required placeholder="Введите ваш телефон">
			</div>
			<div class="modal__line--textarea">
				<textarea name="comment" id="textarea" placeholder="Напишите Ваш вопрос"></textarea>
			</div>
			<div class="modal__line--checkbox">
				<input type="checkbox" name="checkbox" id="checkbox8" value="" required>
				<label for="checkbox8">Я принимаю и даю согласие на храниние и обработку персональных данных </label>
			</div>
			<div class="modal__line">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>

		</form>
	</div>
</div>


<?php get_template_part( 'parts/modal-opros' ); ?>

<?php get_template_part( 'parts/modal-thanks' ); ?>
