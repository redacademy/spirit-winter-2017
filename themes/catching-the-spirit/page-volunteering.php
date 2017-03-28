<?php
/**
 * Template Name: Volunteering Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="volunteering-for-cts">
                <h2>Volunteer for Catching the Spirit</h2>
                <p><?php echo CFS()->get('volunteer_for_catching_the_spirit'); ?></p>
            </div>

            <div class="the-board">
                <h2>The Board</h2>
                <p><?php echo CFS()->get('volunteer_the_board'); ?></p>
                <div class="the-board-image">
                <img src="<?php echo CFS()->get( 'volunteer_the_board_image' ); ?>"/>
                </div>
                <a href="<?php echo home_url( '/board' ); ?>" class="blue-btn">Learn More</a>
            </div>

            <div class="mentorvisors">
                <h2>Mentorvisors</h2>
                <p><?php echo CFS()->get('volunteer_mentorvisors'); ?></p>
                <div class="mentorvisors-image">
                <img src="<?php echo CFS()->get( 'volunteer_mentorvisors_image' ); ?>"/>
                </div>
                <a href="<?php echo home_url( '/leadership' ); ?>" class="blue-btn">Learn More</a>
            </div>
	

        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
