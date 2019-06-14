	
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
<!-- 		<div class="modal" id="login">

			<button class="close login_close" type="button">
				<span></span>
				<span></span>
			</button>

			<div class="modal__btn">
				<a href="#" class="btn btn--active">Войти</a>
				<a href="#" class="btn login_close register_open">Регистрация</a>
			</div>

			<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

			<div class="u-columns col2-set" id="customer_login">

				<div class="u-column1 col-1">

			<?php endif; ?>

					<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

						<form class="woocommerce-form woocommerce-form-login login" method="post">

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<input type="text" placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<input placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
							</p>

							<?php do_action( 'woocommerce_login_form' ); ?>

							<p class="form-row">
								<span>
									<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> 
									<label for="rememberme"><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></label>
								</span>
								<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
								<button type="submit" class="btn woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
							</p>
							<p class="woocommerce-LostPassword lost_password">
								<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
							</p>

							<?php do_action( 'woocommerce_login_form_end' ); ?>

						</form>
			<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

				</div>

				<div class="u-column2 col-2">

					<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

					<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

						<?php do_action( 'woocommerce_register_form_start' ); ?>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
							</p>

						<?php endif; ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
							<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</p>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
							</p>

						<?php else : ?>

							<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

						<?php endif; ?>

						<?php do_action( 'woocommerce_register_form' ); ?>

						<p class="woocommerce-FormRow form-row">
							<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
							<button type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
						</p>

						<?php do_action( 'woocommerce_register_form_end' ); ?>

					</form>

				</div>

			</div>
			<?php endif; ?>

			<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
						


		</div>

		<div class="modal" id="register">

			<button class="close register_close" type="button">
				<span></span>
				<span></span>
			</button>

			<div class="modal__btn">
				<a href="#" class="btn register_close login_open">Войти</a>
				<a href="#" class="btn btn--active">Регистрация</a>
			</div>

			<?php echo do_shortcode( '[ultimatemember form_id="166"]' ); ?>

			<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

				<?php do_action( 'woocommerce_register_form_start' ); ?>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<input type="text" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
					</p>

				<?php endif; ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<input type="email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<input type="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
					</p>

				<?php else : ?>

					<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

				<?php endif; ?>

				<?php do_action( 'woocommerce_register_form' ); ?>

				<p class="woocommerce-FormRow form-row">
					<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
					<button type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
				</p>

				<?php do_action( 'woocommerce_register_form_end' ); ?>

			</form>

		</div> -->
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