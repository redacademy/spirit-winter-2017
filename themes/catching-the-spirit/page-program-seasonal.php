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
				<h1 class="page-title"><?php echo esc_html(CFS()->get('program_type')); ?></h1>
				<?php 
					$field = CFS()->get('program_name');
					if ( !empty( $field ) ) : 
					?>
					<span class="subtitle"><?php echo esc_html($field); ?></span>
				<?php endif; ?>
				<div class="program-header-image">
                    <img src="<?php echo esc_html(CFS()->get( 'program_image' )); ?>"/>
                </div>
			</header>

			<section>
				<div class="program-description-wrapper text-container">
					<h2 class="subheading">In a Nutshell</h2>
					<span class="program-name"><?php echo CFS()->get('program_description'); ?></span>
				</div>

				<div class="icons-camp-activities">
					<div class="camp-activities-right">
						<div class="camp-activity">
							<img src="../wp-content/themes/catching-the-spirit/images/icons_camp-activities/protecting_frog.svg" alt="Icon of frog"/>
							<div class="camp-activity-text">
								<p class="strong">Protecting</p>
								<p class="small-text">environmentally sensitive areas</span>
							</div>
						</div>
						<div class="camp-activity">
							<img src="../wp-content/themes/catching-the-spirit/images/icons_camp-activities/giving_handshake.svg" alt="Icon of handshake"/>
							<div class="camp-activity-text">
								<p class="strong">Giving</p>
								<p class="small-text">back to your community</span>
							</div>
						</div>
						<div class="camp-activity">
							<img src="../wp-content/themes/catching-the-spirit/images/icons_camp-activities/growing_carrots.svg" alt="Icon of carrots"/>
							<div class="camp-activity-text">
								<p class="strong">Growing</p>
								<p class="small-text">a community garden</span>
							</div>
						</div>
					</div>
					<div class="camp-activities-left">
						<div class="camp-activity">
							<img src="../wp-content/themes/catching-the-spirit/images/icons_camp-activities/taking_recycle.svg" alt="Icon of recycling symbol"/>
							<div class="camp-activity-text">
								<p class="strong">Taking</p>
								<p class="small-text">the zero-waste challenge</span>
							</div>
						</div>
						<div class="camp-activity">
							<img src="../wp-content/themes/catching-the-spirit/images/icons_camp-activities/building_shovel.svg" alt="Icon of shovel"/>
							<div class="camp-activity-text">
								<p class="strong">Building</p>
								<p class="small-text">fences and trails</span>
							</div>
						</div>
						<div class="camp-activity">
							<img src="../wp-content/themes/catching-the-spirit/images/icons_camp-activities/restoring_fish.svg" alt="Icon of fish"/>
							<div class="camp-activity-text">
								<p class="strong">Restoring</p>
								<p class="small-text">waterways</span>
							</div>
						</div>
					</div>
				</div><!-- .icons-camp-activities -->	

				<div class="program-price green-box">
					<h2 class="subheading">What Do We Charge?</h2>
					<p class="emphasis">Nothing!</p>
					<p>Find out how we do that:</p>
					<a href="<?php echo esc_url( home_url( '/our-story' ) ); ?>" class="blue-btn">Learn More</a>
				</div>

				<div class="green-box for-youth-green">
				</div>

				<div class="green-box">
					<h2>Who We Are?</h2>
                    <div class="program-leaders-wrapper">
                        <div class="peer-leaders">
                            <p>Peer Leaders</p>
                            <img src="<?php echo esc_html(CFS()->get('peer_leaders_image', get_page_by_path('programs/leadership')->ID)); ?>"/>
                            <p>Age: 15-18</p>
                        </div>
                        <div class="supervisors">
                            <p>Supervisors</p>
                            <img src="<?php echo esc_html(CFS()->get('supervisors_image', get_page_by_path('programs/leadership')->ID)); ?>"/>
                            <p>Age: 19+</p>
                        </div>
                    </div>
                        <a href="<?php echo esc_url( home_url( '/programs/leadership' ) ); ?>" class="blue-btn">Learn More</a>
				</div>
				
                <div>
                    <div class="program-details-wrapper text-container">
                        <div class="program-details-when">
                            <h2>When?</h2>
                            <p><?php echo CFS()->get('program_details_when'); ?></p>
							<a href="<?php echo esc_url( home_url( '/calendar' ) ); ?>" class="blue-btn">Calendar</a>
                        </div>
                        <div class="program-details-where">
                            <h2>Where?</h2>
                            <p><?php echo CFS()->get('program_details_where'); ?></p>
							<a href="<?php echo esc_url( home_url( '/camp-locations' ) ); ?>" class="blue-btn">Locations</a>
                        </div>
                    </div>
				</div>

				<div class="program-registration">
					<a href="<?php echo esc_url( home_url( '/registration' ) ); ?>" class="register-btn">Register</a>

					<h2>Join our membership to get early registration</h2>
					<a href="<?php echo esc_url( home_url( '/membership' ) ); ?>" class="red-btn">Join</a>

					<h2>Questions?</h2>
					<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="blue-btn">FAQ</a>
				</div>
			</section>
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
