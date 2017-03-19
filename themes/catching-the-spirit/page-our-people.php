<?php
/**
 * Template Name: Our People Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <h1>Our People</h2>

            <div class="youth-council">
                <h2>Youth Council</h2>
                <p><?php echo CFS()->get('our_people_youth_council'); ?></p>
            </div>
            
	

        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>