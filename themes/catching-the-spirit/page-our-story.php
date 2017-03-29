<?php
/**
 * Template Name: Our Story Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="our-story-logo">
                <img src="<?php echo CFS()->get( 'our_story_logo' ); ?>"/>
            </div>
            <div class="our-story-mission">
                <h2>Our Mission</h2>
                <p><?php echo CFS()->get('our_story_our_mission'); ?></p>
            </div>
            <div class="our-mission-image">
                <img src="<?php echo CFS()->get( 'our_story_our_mission_image' ); ?>"/>
            </div>
            <div class=our-story-green-box>
            </div>
            <div class="whats-cts">
                <h2>What is CTS?</h2>
                <p><?php echo CFS()->get('our_story_what_is_cts'); ?></p>
            </div>
            <dv class="how-we-run">
                <div class="green-box">
                    <h2>How We Run</h2>
                    <p><?php echo CFS()->get('our_story_how_we_run'); ?></p>
                    <a href="<?php echo home_url( '/sponsors' ); ?>" class="blue-btn">See Our Sponsors</a>
                    <p><?php echo CFS()->get('our_story_how_we_run_2'); ?></p>
                    <div class="btn-container"><a href="<?php echo home_url( '/volunteer' ); ?>" class="red-btn">Volunteer</a><a href="<?php echo home_url( '/give' ); ?>" class="red-btn">Give</a></div>
                </div>
                

            </dv>
            

    
	

        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
