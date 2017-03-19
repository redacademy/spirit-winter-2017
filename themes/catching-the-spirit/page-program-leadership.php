<?php
/**
 * Template Name: Leadership Program Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="program-header">
				<h1 class="page-title"><?php echo CFS()->get('program_type'); ?></h1>
				<span class="program-name"><?php echo CFS()->get('program_description'); ?></span>
				<a href="" class="blue-btn leadership-description-link">Peer Leaders</a> <a href="" class="blue-btn leadership-description-link">Supervisors</a>
			</header>

			<section class="program-description-wrapper">

				<div class="green-box">
					<h2 class="subheading">Who we are?</h2>
					<div class="program-leaders-wrapper">
						<div class="peer-leaders">
							<p>Peer Leaders</p>
							<img src="<?php echo CFS()->get('peer_leaders_image'); ?>"/>
							<p>Age: 15-18</p>
						</div>
						<div class="supervisors">
							<p>Supervisors</p>
							<img src="<?php echo CFS()->get('supervisors_image'); ?>"/>
							<p>Age: 19+</p>
						</div>
					</div>
				</div>

				<div class="for-youth-green">
				</div>

				<div class="green-box peer-leaders-description">
					<h2>Peer Leaders</h2>
					<p><?php echo CFS()->get('peer_leaders_description'); ?></p>
					<a href="" class="apply-btn">Apply for peer leaders</a>
				</div>
				<div class="program-details-where">
					<h2>Supervisors</h2>
					<p><?php echo CFS()->get('supervisors_description'); ?></p>
					<a href="" class="apply-btn">Apply for supervisors</a>
				</div>
			</section>
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
