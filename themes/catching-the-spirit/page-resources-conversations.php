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
				<h1 class="page-title"><?php echo esc_html(CFS()->get('resource_page_title')); ?></h1>
				<p><?php echo esc_html(CFS()->get('resource_page_description')); ?></p>
			</header>

			<section>
				<?php $categories = CFS()->get( 'resource_category_loop'); ?>
				<?php foreach( $categories as $category ): ?>
					<h2><?php echo $category[ 'resource_category_title' ]; ?></h2>
					<?php foreach( $category['resource_link_loop'] as $link): ?>
						<p><?php echo $link['resource_link']; ?></p>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
