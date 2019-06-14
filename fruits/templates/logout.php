<?php
	/**
		* Template name: logout
	*/

get_header();

?>

	<main class="main">

		<section class="order">
			<div class="container">

				<h2><?php the_title(); ?></h2>


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<a href="<?php echo get_home_url(); ?>">Главная</a>


			</div>
		</section>

	</main>


<?php
get_footer();
