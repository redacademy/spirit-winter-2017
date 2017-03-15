<?php
/**
 * Template Name: Front Page Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="mobile-container">
				<div class="missin-about-wrapper">
					<div class="front-page-hero">
					</div>
					<div class="front-page-mission">
						<h2>Our mission</h2>
						<p><?php echo CFS()->get('front_page_our_mission'); ?></p>
					</div>
					<div class="front-page-about">
						<h2>Who we are?</h2>
						<p><?php echo CFS()->get('front_page_who_we_are'); ?></p>
					</div>
				</div>
				<a href="" class="blue-btn">Learn More<a>
                <div class="for-youth-banner">
                </div>
                <div class="front-page-programs">
					<h2>What do we offer?</h2>
                </div>
                <div class="front-page-programs-free">
					<h2>Our programs are <span class="uppercase">free</span></h2>
                    <p><?php echo CFS()->get('front_page_programs_free'); ?></p>
					<a href="" class="red-btn">Volunteer<a>
					<a href="" class="red-btn">Give<a>
                </div>
				<div class="front-page-social-media">
					<h2>Follow us on Social Media!</h2>
				</div>
				<div class="front-page-testimonials">
					<h2>Testimonials</h2>
					<a href="" class="blue-btn">See More<a>
				</div>
				<div class="front-page-sponsors">
					<h2 class="uppercase">A big thanks to our sponsors</h2>
				</div>
            </div>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
