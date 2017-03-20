<?php
/**
 * Template Name: Conversations Resource Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header>
				<h1 class="page-title"><?php echo CFS()->get('resource_page_title'); ?></h1>
				<p><?php echo CFS()->get('resource_page_description'); ?></p>
			</header>
			<section>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
