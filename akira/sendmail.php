<?php
	$SITE_TITLE = 'Message';
	$SITE_DESCR = '';

	if ( isset($_POST) ) {
		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));
		$subject = $_POST['subject'] ? htmlspecialchars(trim($_POST['subject'])) : '';
		$comment = isset($_POST['comment']) ? htmlspecialchars(trim($_POST['comment'])) : '';
		$question = isset($_POST['question']) ? htmlspecialchars(trim($_POST['question'])) : '';

		$one1 = htmlspecialchars(trim($_POST['one1']));
		$one2 = htmlspecialchars(trim($_POST['one2']));
		$one3 = htmlspecialchars(trim($_POST['one3']));
		$one4 = htmlspecialchars(trim($_POST['one4']));
		$one5 = htmlspecialchars(trim($_POST['one5']));
		$one6 = htmlspecialchars(trim($_POST['one6']));

		$two1 = htmlspecialchars(trim($_POST['two1']));
		$two2 = htmlspecialchars(trim($_POST['two2']));
		$two3 = htmlspecialchars(trim($_POST['two3']));
		$two4 = htmlspecialchars(trim($_POST['two4']));
		$two5 = htmlspecialchars(trim($_POST['two5']));
		$two6 = htmlspecialchars(trim($_POST['two6']));

		$three1 = htmlspecialchars(trim($_POST['three1']));
		$three2 = htmlspecialchars(trim($_POST['three2']));
		$three3 = htmlspecialchars(trim($_POST['three3']));
		$three4 = htmlspecialchars(trim($_POST['three4']));
		$three5 = htmlspecialchars(trim($_POST['three5']));
		$three6 = htmlspecialchars(trim($_POST['three6']));

		$product = isset($_POST['product']) ? htmlspecialchars(trim($_POST['product'])) : '';
		$work = isset($_POST['work']) ? htmlspecialchars(trim($_POST['work'])) : '';

		$to = 'admin@akira.education';

		$headers = "From: $SITE_TITLE \r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";

		$data = '<h1>'.$subject."</h1>";
		$data .= 'Имя: '.$name."<br>";
		$data .= 'Телефон: '.$phone."<br>";

		if ( $comment != '' ) {
			$data .= 'Вопрос: '.$comment."<br>";
		}

	//----1----------------------------------------------------------------------------------		
		$data .= "<h3>Вы уже запустили Ваши курсы или планируете?</h3>";

		if ( $one1 != '' ) {
			$data .= '1. ' . $one1 ."<br>";
		}

		if ( $one2 != '' ) {
			$data .= '2. ' . $one2 ."<br>";
		}

		if ( $one3 != '' ) {
			$data .= '3. ' . $one3 ."<br>";
		}

		if ( $one4 != '' ) {
			$data .= '4. ' . $one4 ."<br>";
		}

		if ( $one5 != '' ) {
			$data .= '5. ' . $one5 ."<br>";
		}

		if ( $one6 != '' ) {
			$data .= '6. ' . $one6 ."<br>";
		}


	//----2----------------------------------------------------------------------------------		
		$data .= "<h3>Имеете ли педагогическое образование?</h3>";

		if ( $two1 != '' ) {
			$data .= '1. ' . $two1 ."<br>";
		}

		if ( $two2 != '' ) {
			$data .= '2. ' . $two2 ."<br>";
		}

		if ( $two3 != '' ) {
			$data .= '3. ' . $two3 ."<br>";
		}

		if ( $two4 != '' ) {
			$data .= '4. ' . $two4 ."<br>";
		}

		if ( $two5 != '' ) {
			$data .= '5. ' . $two5 ."<br>";
		}

		if ( $two6 != '' ) {
			$data .= '6. ' . $two6 ."<br>";
		}

	//-----3---------------------------------------------------------------------------------		
		$data .= "<h3>Вы работаете в сфере образования?</h3>";

		if ( $three1 != '' ) {
			$data .= '1. ' . $three1 ."<br>";
		}

		if ( $three2 != '' ) {
			$data .= '2. ' . $three2 ."<br>";
		}

		if ( $three3 != '' ) {
			$data .= '3. ' . $three3 ."<br>";
		}

		if ( $three4 != '' ) {
			$data .= '4. ' . $three4 ."<br>";
		}

		if ( $three5 != '' ) {
			$data .= '5. ' . $three5 ."<br>";
		}

		if ( $three6 != '' ) {
			$data .= '6. ' . $three6 ."<br><hr>";
		}

	//--------------------------------------------------------------------------------------
		if ( $product != '' ) {
			$data .= "<h3>Какие наши продукты вас интересуют?</h3>";
			$data .= ' ' . $product ."<br>";
		}

	//--------------------------------------------------------------------------------------
		if ( $work != '' ) {
			$data .= "<h3>Что мы можем улучшить для Вас в нашей работе?</h3>";
			$data .= ' ' . $work ."<br>";
		}


		$message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
				".$data."
				<br>\n
				<hr>\n
				<br>\n
				<small>это сообщение было отправлено с сайта ".$SITE_TITLE." - ".$SITE_DESCR.", отвечать на него не надо</small>\n</div>";
		$send = mail($to, $subject, $message, $headers);

		if ( $send ) {
			echo '';
		} else {
				echo '<div class="error">Ошибка отправки формы</div>';
		}

	}
	else {
			echo '<div class="error">Ошибка, данные формы не переданы.</div>';
	}
	die();
?>