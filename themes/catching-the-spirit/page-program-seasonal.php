<?php
/**
 * Template Name: Seasonal Program Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="program-header">
				<h1 class="page-title"><?php echo CFS()->get('program_type'); ?></h1>
				<span class="subtitle"><?php echo CFS()->get('program_name'); ?></span>
				<div class="program-header-image">
                    <img src="<?php echo CFS()->get( 'program_image' ); ?>"/>
                </div>
			</header>

			<section class="program-description-wrapper">
				<div>
					<h2 class="subheading">In a nutshell</h2>
					<span class="program-name"><?php echo CFS()->get('program_description'); ?></span>
				</div>

				<div class="program-price green-box">
					<h2 class="subheading">What do we charge?</h2>
					<p class="emphasis">Nothing!</p>
					<p>Find out how we do that:</p>
					<a href="" class="blue-btn">Learn More</a>
				</div>

				<div class="green-box for-youth-green">
				</div>

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
                    <div>
                        <a href="" class="blue-btn">Learn More</a>
                    </div>
				</div>
				
                <div>
                    <div class="program-details-wrapper">
                        <div class="program-details-when">
                            <h2>When?</h2>
                            <p><?php echo CFS()->get('program_details_when'); ?></p>
                        </div>
                        <div class="program-details-where">
                            <h2>Where?</h2>
                            <p><?php echo CFS()->get('program_details_where'); ?></p>
                        </div>
                    </div>
					<p>We have events throughout Metro Vancouver. Check our Calendar page for events information.</p>
					<div>
                        <a href="" class="blue-btn">Calendar</a>
                    </div>
				</div>

				<div class="program-registration">
					<a href="" class="register-btn">Register</a>
					<h2>Join our membership to get early registration</h2>
					<a href="" class="red-btn">Join</a>
					<h2>Questions?</h2>
					<a href="" class="blue-btn faq-parents">FAQ for Parents</a> <a href="" class="blue-btn">FAQ for Youth</a>
				</div>
			</section>
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
