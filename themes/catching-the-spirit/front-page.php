<?php
/**
 * Template Name: Front Page Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="page-title">Catching the Spirit</h1>
			<div class="front-page-hero">
				<img src="<?php echo CFS()->get('front_page_hero_image'); ?>"/>
			</div>
			<div class="about-section-wrapper">
				<div class="front-page-mission">
					<h2>Our mission</h2>
					<div><?php echo CFS()->get('front_page_our_mission'); ?></div>
				</div>
				<div class="front-page-about">
					<h2>Who we are?</h2>
					<div><?php echo CFS()->get('front_page_who_we_are'); ?></div>
				</div>
				<div class="btn-container">
					<a href="" class="blue-btn">Learn More</a>
				</div>
			</div>
			<div class="green-box for-youth-yellow">
			</div>
			<div class="front-page-programs-list">
				<h2>What do we offer?</h2>
				<div class="programs-wrapper">
					<div class="program-summer">
						<img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/summer')->ID); ?>"/>
						<h3>Summer</h3>
					</div>
					<div class="program-fallwinter">
						<img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/fallwinter')->ID); ?>"/>
						<h3>Fall/Winter</h3>
					</div>
					<div class="program-leadership">
						<img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/summer')->ID); ?>"/>
						<h3>Leadership</h3>
					</div>
				</div>
			</div>
			<div class="front-page-programs-free green-box">
				<h2>Our programs are <span class="emphasis">free</span></h2>
				<div class="text-container"><?php echo CFS()->get('front_page_programs_free'); ?>
					<div class="btn-container">
						<a href="" class="red-btn">Volunteer</a>
						<a href="" class="red-btn">Give</a>
					</div>
				</div>
			</div>
			<div class="front-page-social-media">
				<h2>Follow us on social media!</h2>
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
