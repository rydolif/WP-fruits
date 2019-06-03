<?php
	/**
		* Template name: index
	*/

get_header();
?>


	<main class="main">

		<section class="hero swiper-container">
			<div class="swiper-wrapper">

				<div class="hero__item swiper-slide" style="background-image: url(img/bunner1.png)">
					<div class="container">
						<div class="row">
							<div class="offset-lg-6 col-lg-6 offset-md-3 col-md-9">
								<img src="img/logo.png" alt="" class="hero__item_logo">
								<p class="hero__item_sub-logo">Зарядись витаминами!</p>
								<a href="#" class="btn--hero hero__item_btn">В магазин!</a>
							</div>
						</div>
					</div>
				</div>

				<div class="hero__item swiper-slide" style="background-image: url(img/bunner2.png)">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h1><span>От</span> <b>6 000</b> <span>рублей</span> - </h1>
								<p class="hero__item_action"><span>БЕСПЛАТНО!!! *</span></p>
								<a href="#" class="btn--hero hero__item_btn">В магазин!</a>
								<p class="hero__item_big-text">*Доскавка заказов на сумму от <span><b>6000</b> рублей</span> бесплатна</p>
								<p class="hero__item_min-text"> (в пределах МКАД, за пределами МКАД - 25 руб. за км)</p>
							</div>
						</div>
					</div>
				</div>

				<div class="hero__item swiper-slide" style="background-image: url(img/bunner3.png)">
					<div class="container">
						<div class="row">
							<div class="offset-lg-4 col-lg-8 offset-md-2 col-md-10">
								<div class="hero__item_content">
									<h1>Закажи на сумму более <span>5000 рублей</span> и выбери один фрукт</h1>
									<p class="hero__item_action">в <span>подарок</span></p>
									<a href="#" class="btn--hero hero__item_btn">В магазин!</a>
									<p class="hero__item_text">выбери: <br>манго, маракуйю, мангостин, лонган, <br>черимойю, рамбутан, карамболу или гуаву</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="hero__pagination swiper-pagination"></div>
		</section>

		<section class="section-btn--top section-btn">
			<div class="section-btn__container container">
				<a href="#" class="btn">Рекомендуем</a>
				<a href="#" class="btn">Популярное</a>
			</div>
		</section>

		<section class="shop" id="app">
			<div class="container">

				<div class="shop__list">
					
					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--red">Акция</span>
								<span class="shop__item_action--orange">Популярное</span>
							</div>
							<h3>Папайя Папайя Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам ) ( Страна происхождения  - Вьетнам ) ( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--old">76 руб.</span>
								<span class="shop__item_price--red">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item1.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>
					
					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

					<div class="shop__item">
						<div>
							<div class="shop__item_action">
								<span class="shop__item_action--orange">Популярное</span>
								<span class="shop__item_action--green">Новинка</span>
							</div>
							<h3>Папайя</h3>
							<p class="shop__item_sub-title">( Страна происхождения  - Вьетнам )</p>
							<div class="shop__item_price">
								<span class="shop__item_price--green">50 руб.</span>
								<span class="shop__item_price--weight">(250 гр 1 шт.)</span>
							</div>

						</div>
						<div>
							<div class="shop__item_img">
								<img src="img/shop-item2.png" alt="">
							</div>
							<form class="shop__item_form">
								<button class="shop__item_form--btn"><svg><use xlink:href="#zoom"></use></svg></button>
								<button class="shop__item_form--input-btn">-</button>
								<input type="number" class="shop__item_form--input" value="1">
								<button class="shop__item_form--input-btn">+</button>
								<button class="shop__item_form--btn"><svg><use xlink:href="#shopping-cart"></use></svg></button>
							</form>
						</div>
					</div>

				</div>

				<div class="shop__btn">
					<a href="#" class="btn btn--shop">Больше</a>
				</div>

			</div>
		</section>
				
		<section class="section-btn--bottom section-btn tabs">
			<div class="section-btn__container container">
				<a href="#one" class="btn">Доставка</a>
				<a href="#payment" class="btn">Оплата</a>
				<a href="#reviews" class="btn">Отзывы</a>
				<a href="#about" class="btn">О нас</a>
			</div>
		</section>

		<section id="one" class="reviews reviews--delivery tabs__wrap">
			<div class="container">

				<h3>Доставка курьерской службой</h3>

				<p>
					Наш курьер доставит заказ по указанному Вами адресу в трех временных интервалах на выбор: с 10:00 до 14:00, с 14:00 до 18:00 и с 18:00 до 22:00. В день доставки курьер свяжется с Вами ориентировочно за 30-40 минут для предупреждения о выезде по адресу доставки. 
				</p>

				<p>
					Мы можем предложить доставку на следующий после оформления заказа день в трех указанных временных интервалах (по умолчанию), либо на любую удобную для Вас дату. 
				</p>

				<h4>Стоимость доставки: </h4>

				<ul>
					<li>Доставка до 1 500 руб. - 200 руб.</li>
					<li>Доставка от 2 500 руб - 100 руб.</li>
					<li>Доставка от 5 000 руб.  - <b>БЕССПЛАТНО!</b></li>
				</ul>

				<p>
					Срочная доставка в день заказа может быть осуществлена в любое удобное время в интервале 1 час, но не ранее, чем через 3 часа после оформления заказа. Такая доставка должна быть оформлена до 15:00 текущего дня. Срочной так же считается доставка к конкретному моменту во времени на любую удобную для Вас дату. Пример: на завтра строго к 12:00. Стоимость срочной доставки - 600 руб. В случае опоздания курьера - разница в стоимости доставки за наш счет!
				</p>

			</div>
		</section>

		<section id="payment" class="reviews reviews--delivery tabs__wrap">
			<div class="container">

				<h3>Оплата</h3>

				<p>
					Наш курьер доставит заказ по указанному Вами адресу в трех временных интервалах на выбор: с 10:00 до 14:00, с 14:00 до 18:00 и с 18:00 до 22:00. В день доставки курьер свяжется с Вами ориентировочно за 30-40 минут для предупреждения о выезде по адресу доставки. 
				</p>

				<p>
					Мы можем предложить доставку на следующий после оформления заказа день в трех указанных временных интервалах (по умолчанию), либо на любую удобную для Вас дату. 
				</p>

				<h4>Стоимость доставки: </h4>

				<ul>
					<li>Доставка до 1 500 руб. - 200 руб.</li>
					<li>Доставка от 2 500 руб - 100 руб.</li>
					<li>Доставка от 5 000 руб.  - <b>БЕССПЛАТНО!</b></li>
				</ul>

				<p>
					Срочная доставка в день заказа может быть осуществлена в любое удобное время в интервале 1 час, но не ранее, чем через 3 часа после оформления заказа. Такая доставка должна быть оформлена до 15:00 текущего дня. Срочной так же считается доставка к конкретному моменту во времени на любую удобную для Вас дату. Пример: на завтра строго к 12:00. Стоимость срочной доставки - 600 руб. В случае опоздания курьера - разница в стоимости доставки за наш счет!
				</p>


			</div>
		</section>

		<section id="reviews" class="reviews tabs__wrap">
			<div class="container">

				<h2>Отзывы клиентов</h2>

				<div class="reviews__slider swiper-container">
					<div class="swiper-wrapper">

						<div class="reviews__item swiper-slide">
							<img src="img/hooks.png" alt="" class="reviews__item_hooks">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<p class="reviews__item_info"><span>Алиса,</span> <time datetime="2008-02-14" >24/07/2018</time></p>
						</div>

						<div class="reviews__item swiper-slide">
							<img src="img/hooks.png" alt="" class="reviews__item_hooks">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<p class="reviews__item_info"><span>Алиса,</span> <time datetime="2008-02-14" >24/07/2018</time></p>
						</div>

						<div class="reviews__item swiper-slide">
							<img src="img/hooks.png" alt="" class="reviews__item_hooks">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<p class="reviews__item_info"><span>Алиса,</span> <time datetime="2008-02-14" >24/07/2018</time></p>
						</div>

						<div class="reviews__item swiper-slide">
							<img src="img/hooks.png" alt="" class="reviews__item_hooks">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<p class="reviews__item_info"><span>Алиса,</span> <time datetime="2008-02-14" >24/07/2018</time></p>
						</div>

						<div class="reviews__item swiper-slide">
							<img src="img/hooks.png" alt="" class="reviews__item_hooks">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<p class="reviews__item_info"><span>Алиса,</span> <time datetime="2008-02-14" >24/07/2018</time></p>
						</div>

					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="reviews__pagination swiper-pagination"></div>
				</div>

			</div>
		</section>

		<section id="about" class="reviews reviews--delivery tabs__wrap">
			<div class="container">

				<h3>О нас</h3>

				<p>
					Наш курьер доставит заказ по указанному Вами адресу в трех временных интервалах на выбор: с 10:00 до 14:00, с 14:00 до 18:00 и с 18:00 до 22:00. В день доставки курьер свяжется с Вами ориентировочно за 30-40 минут для предупреждения о выезде по адресу доставки. 
				</p>

				<p>
					Мы можем предложить доставку на следующий после оформления заказа день в трех указанных временных интервалах (по умолчанию), либо на любую удобную для Вас дату. 
				</p>

				<h4>Стоимость доставки: </h4>

				<ul>
					<li>Доставка до 1 500 руб. - 200 руб.</li>
					<li>Доставка от 2 500 руб - 100 руб.</li>
					<li>Доставка от 5 000 руб.  - <b>БЕССПЛАТНО!</b></li>
				</ul>

				<p>
					Срочная доставка в день заказа может быть осуществлена в любое удобное время в интервале 1 час, но не ранее, чем через 3 часа после оформления заказа. Такая доставка должна быть оформлена до 15:00 текущего дня. Срочной так же считается доставка к конкретному моменту во времени на любую удобную для Вас дату. Пример: на завтра строго к 12:00. Стоимость срочной доставки - 600 руб. В случае опоздания курьера - разница в стоимости доставки за наш счет!
				</p>


			</div>
		</section>

	</main>


<?php
get_footer();
