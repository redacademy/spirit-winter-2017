<?php
/**
 * Template Name: Front Page Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="front-page-hero">
				<img src="<?php echo CFS()->get('front_page_hero_image'); ?>"/>
			</div>
			<div class="front-page-mission">
				<h2>Our mission</h2>
				<p><?php echo CFS()->get('front_page_our_mission'); ?></p>
			</div>
			<div class="front-page-about">
				<h2>Who we are?</h2>
				<p><?php echo CFS()->get('front_page_who_we_are'); ?></p>
				<a href="" class="blue-btn">Learn More</a>
			</div>
			<div class="green-box for-youth-yellow">
			</div>
			<div class="front-page-programs">
				<h2>What do we offer?</h2>
				<div class="program-summer">
					<h3>Summer</h3>
					<img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/summer')->ID); ?>"/>
				</div>
				<div class="program-fallwinter">
					<h3>Fall/Winter</h3>
					<img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/fallwinter')->ID); ?>"/>
				</div>
				<div class="program-leadership">
					<h3>Leadership</h3>
					<img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/summer')->ID); ?>"/>
				</div>
			</div>
			<div class="front-page-programs-free green-box">
				<h2>Our programs are <span class="emphasis">free</span></h2>
				<p><?php echo CFS()->get('front_page_programs_free'); ?></p>
				<div class="btn-container">
				<a href="" class="red-btn">Volunteer</a>
				<a href="" class="red-btn">Give</a>
				</div>
			</div>
			<div class="front-page-social-media">
				<h2>Follow us on social media!</h2>
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</div>
			<div class="front-page-testimonials green-box">
				<h2>Testimonials</h2>
				<a href="" class="blue-btn">See More</a>
			</div>
			<div class="front-page-sponsors">
				<h2>A big thanks to our sponsors</h2>

			<ul class="front-page-sponsors-list">
				<?php $fields = CFS()->get('sponsors_list', get_page_by_path('sponsors')->ID); ?>
				<?php foreach ( $fields as $field ): ?>
					<li>
						<img src="<?php echo $field['sponsor_logo']; ?>"/>
					</li>
				<?php endforeach ?>
			</ul>
			</div>

		<!--<?php if ( have_posts() ) : ?>

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

		<?php endif; ?>-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
