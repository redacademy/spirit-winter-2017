<?php
/**
 * Template Name: Membership Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<h1 class="page-title"> Membership </h1>

	<img src="<?php echo CFS()->get( 'membership_hero_image' ); ?>"/>

	<p><?php echo CFS()->get( 'membership_main_text' ); ?></p>

	<a class="red-btn">Join</a>

	<p><?php echo CFS()->get( 'membership_fee_text' ); ?></p>


<?php get_footer(); ?>
