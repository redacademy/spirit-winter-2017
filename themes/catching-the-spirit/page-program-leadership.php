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
				<h1 class="page-title"><?php echo esc_html(CFS()->get('program_type')); ?></h1>
				<div class="program-header-image">
                    <img src="<?php echo esc_html(CFS()->get( 'program_image' )); ?>"/>
                </div>
				<span class="program-description"><?php echo CFS()->get('program_description'); ?></span>
				<a href="#peer-leaders" class="blue-btn">Peer Leaders</a> 
				<a href="#supervisors" class="blue-btn">Supervisors</a>
			</header>

			<section class="program-description-wrapper">

				<div class="green-box">
					<h2 class="subheading">Who We Are?</h2>
					<div class="program-leaders-wrapper">
						<div class="peer-leaders">
							<p>Peer Leaders</p>
							<div class="leaders-image"><img src="<?php echo esc_html(CFS()->get('peer_leaders_image')); ?>"/></div>
							<p>Age: 15-18</p>
						</div>
						<div class="supervisors">
							<p>Supervisors</p>
							<div class="leaders-image"><img src="<?php echo esc_html(CFS()->get('supervisors_image')); ?>"/></div>
							<p>Age: 19+</p>
						</div>
					</div>
				</div>

				<div class="for-youth-green">
				</div>

				<div class="green-box peer-leaders-description" id="peer-leaders">
					<h2>Peer Leaders</h2>
					<div><?php echo CFS()->get('peer_leaders_description'); ?></div>
					<a href="<?php echo esc_html(CFS()->get('apply_peer_leaders')); ?>" class="apply-btn">Apply for peer leaders</a>
				</div>

				<div class="supervisors-description text-container" id="supervisors">
					<h2>Supervisors</h2>
					<div><?php echo CFS()->get('supervisors_description'); ?></div>
					<a href="<?php echo esc_html(CFS()->get('apply_supervisors')); ?>" class="apply-btn">Apply for supervisors</a>
				</div>
			</section>
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
