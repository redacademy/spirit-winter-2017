<?php
/**
 * Template Name: Give Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<!--<h1> Give </h1>-->
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<img src="<?php echo CFS()->get( 'give_main_image' ); ?>"/>

	<p><?php echo CFS()->get( 'give_main_text' ); ?></p>

	<a class="red-btn">Donate Here</a>

	<p><?php echo CFS()->get( 'give_link_text' ); ?></p>

<?php get_footer(); ?>
