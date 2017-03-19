<?php
/**
 * Template Name: Camp Locations Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<h1 class="page-title">Camp Locations</h1>

<div class="multi-map">
<?php echo do_shortcode('[put_wpgm id=1]') ?>
<?php echo do_shortcode('[put_wpgm id=1]') ?>
</div>

<?php $fields = CFS()->get('camp_locations_loop'); ?>

<div class="camp-list-jump-to">

	<h2 class="strong">Jump to a Camp</h2>

<ul class="jump-to-list-camp">
    <?php foreach ( $fields as $field ): ?>
        <li>
            <a href="#<?php echo str_replace(' ', '-', strtolower($field['camp_location_name'])) ?>">
	        &bull; <?php echo $field['camp_location_name']; ?>
			</a>
        </li>
    <?php endforeach ?>
</ul>


</div>

<ul class="camp-locations-list">
    <?php foreach ( $fields as $field ): ?>

	<?php //$shortcode = get_post_meta($post->ID,$field['camp_location_map'],true);?>
	<?php //echo do_shortcode($shortcode); ?>

        <li class="camp-location-entry" id="<?php echo str_replace(' ', '-', strtolower($field['camp_location_name'])) ?>">
          <p class="camp-location-name"><?php echo $field['camp_location_name'];?></p>
		  <p><?php echo $field['camp_location_description'];?></p>
		  <?php echo do_shortcode($field['camp_location_map']);?>
		  <a href="#page" class="back-to-top">Back to Top</a>
        </li>
    <?php endforeach ?>
</ul>




<?php get_footer(); ?>
