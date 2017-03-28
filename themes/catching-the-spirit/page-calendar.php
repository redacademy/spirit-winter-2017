<?php
/**
 * Template Name: Calendar Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <div class="calendar-container">
                <?php echo do_shortcode('[Total_Soft_Cal id="8"]');?>
            </div>

            <div class="contact-ca">
                <a href="mailto:<?php echo antispambot( 'info@catchingthespirit.com' ); ?>"><?php echo ( 'Contact Us to RSVP' ); ?></a>
            </div>
	

        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>