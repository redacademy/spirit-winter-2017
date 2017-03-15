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
                <?php echo CFS()->get('front_page_hero_image'); ?>
            </div>
            <div class="front-page-mission">
                <?php echo CFS()->get('front_page_our_mission'); ?>
            </div>
            <div class="front-page-about">
                <?php echo CFS()->get('front_page_who_we_are'); ?>
            </div>
            <div class="for-youth-banner">
            </div>
            <div class="front-page-programs">
            </div>
            <div class="front-page-programs-free">
                <?php echo CFS()->get('front_page_programs_free'); ?>
            </div>

		<?php if ( have_posts() ) : ?>

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

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
