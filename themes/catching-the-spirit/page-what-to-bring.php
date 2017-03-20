<?php
/**
 * Template Name: What to Bring Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<h1 class="page-title">What to Bring</h1>

<img class ="what-to-bring-img" src="<?php echo CFS()->get( 'what_to_bring_image' ); ?>"

<?php $fields = CFS()->get('what_to_bring_loop'); ?>

<ul class="what-to-bring-loop">
    <?php foreach ( $fields as $key=>$field ): ?>
	

        <li class="what-to-bring-entry <?php echo $key%2 !== 0 ? ' green-box' : ''?>" >
          <h2 class="what-to-bring-heading"><?php echo $field['what_to_bring_heading'];?></h2>
		  <p><?php echo $field['what_to_bring_content'];?></p>
        </li>
    <?php endforeach ?>
</ul>


<?php get_footer(); ?>
