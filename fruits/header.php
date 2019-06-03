<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta name="theme-color" content="#000">

	<link href="https://fonts.googleapis.com/css?family=Neucha|Philosopher:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
	
</head>

<?php wp_head(); ?>

<body>

	<header class="header">
		<div class="header__container container">

			<div class="header__col">
				<a href="index.html"  class="header__logo">
					<img src="img/logo.png" alt="logo">
				</a>
				<nav class="header__nav nav">
					<ul>
						<li><a href="#">Как заказать</a></li>
						<li><a href="#">Доставка</a></li>
						<li><a href="#">Вопрос/Ответ</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Подарочная Упаковка</a></li>
					</ul>
				</nav>
			</div>

			<div class="header__col">

				<div class="header__info">
					<a href="mailto:info@fruitymall.ru">
						<img src="img/mail.png" alt="">
						<span>info@fruitymall.ru</span>
					</a>
					<a href="tel:+1234567890">
						<img src="img/phone.png" alt="">
						<span>+1234567890</span>
					</a>
				</div>

				<div class="header__soc">
					<a href="#" target="_blank"><img src="img/fb.png" alt=""></a>
					<a href="#" target="_blank"><img src="img/in.png" alt=""></a>
					<a href="#" target="_blank"><img src="img/vk.png" alt=""></a>
				</div>

				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>

			</div>

		</div>
	</header>

	<div class="navigation">
		<div class="navigation__container container">

			<nav class="navigation__nav nav">
				<ul>
					<li><a href="#">Фрукты</a></li>
					<li><a href="#">Ягоды</a></li>
					<li><a href="#">Орехи</a></li>
					<li><a href="#">Сухофрукты</a></li>
					<li><a href="#">Готовые коробки</a></li>
					<li><a href="#" class="action">Акции</a></li>
				</ul>
				<ul class="navigation__nav_page">
					<li><a href="#">Как заказать</a></li>
					<li><a href="#">Доставка</a></li>
					<li><a href="#">Вопрос/Ответ</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Подарочная Упаковка</a></li>
				</ul>
			</nav>

			<div class="navigation__info">

				<div class="navigation__info_login">
					<img src="img/login.png" alt="">
					<a href="#">ivanovivan@mail.ru</a>
				</div>

				<a href="#" class="navigation__info_basket">
					<img src="img/basket.png" alt="">
					<span>13</span>
				</a>

				<p class="navigation__info_place">5000 руб.</p>
			</div>

		</div>
	</div>
