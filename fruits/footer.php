	
	<footer class="footer">
		<div class="footer__container container">

			<div class="footer__col">
				<a href="<?php echo get_home_url(); ?>" class="footer__logo">
					<img src="<?php the_field('footer-logo', 'option'); ?>" alt="logo">
				</a>
				<p><?php the_field('copyright', 'option'); ?></p>
			</div>

			<div class="footer__col">
				<div class="footer__info header__info">
					<a href="mailto:info@fruitymall.ru">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">
						<span><?php the_field('mail', 'option'); ?></span>
					</a>
					<a href="tel:+1234567890">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="">
						<span><?php the_field('phone', 'option'); ?></span>
					</a>
				</div>
				<div class="footer__soc header__soc">
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png" alt="">
					</a>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.png" alt="">
					</a>
					<a href="<?php the_field('vkontakte', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</footer>

	<!-- modal -->
		<div class="modal" id="order">
			<form action="sendmail.php" class="form" method="post">

				<button class="close order_close" type="button">
					<span></span>
					<span></span>
				</button>

				<h3>Оставьте заявку, <br>мы свяжемся с Вами</h3>
				<input type="hidden" name="subject" value="Узнать подробнее!">

				<div class="">
					<input type="text" name="name" placeholder="Имя" required>
				</div>
				<div class="">
					<input type="tel" name="phone" required placeholder="Телефон">
				</div>
				<div class="">
					<button type="submit" class="btn" name="submit">Отправить</button>
				</div>
				<p>Нажимая на кнопку, вы даете согласие <br>на обработку своих <a href="#" target="_blank">персональных данных</a></p>

			</form>
		</div>

		<div class="modal" id="thanks">
			<button class="close thanks_close" type="button">
				<span></span>
				<span></span>
			</button>
			<h3>Спасибо <br>за доверие!</h3>
			<p>Мы обязательно с вами свяжемся!</p>
		</div>
	<!-- modal end-->


	<script>
		//------------------------------revievs slider-----------------------------
		  var swiper = new Swiper('.reviews__slider', {
		    navigation: {
		      nextEl: '.swiper-button-next',
		      prevEl: '.swiper-button-prev',
		    },
		    pagination: {
		      el: '.reviews__pagination',
		    },
		    autoplay: {
		      delay: 5000,
		    },
		  });
	</script>


	<?php wp_footer(); ?>

</body>
</html>