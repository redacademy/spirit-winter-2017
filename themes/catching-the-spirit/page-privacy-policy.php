<?php
/**
 * Template Name: Privacy Policy Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

  <?php $fields = CFS()->get('privacy_policy_loop'); ?>

<div class="privacy-jump-to">

	<h2 class="strong">Jump to a Section</h2>

<ul class="jump-to-list">
    <?php foreach ( $fields as $field ): ?>
        <li>
            <a href="#<?php echo str_replace(' ', '-', strtolower($field['privacy_policy_section_title'])) ?>">
	&bull; <?php echo $field['privacy_policy_section_title']; ?>
			</a>
        </li>
    <?php endforeach ?>
</ul>


</div>


<div class="privacy-content">

<ul class="privacy-content-list">
    <?php foreach ( $fields as $field ): ?>
        <li class="privacy-policy-entry" id="<?php echo str_replace(' ', '-', strtolower($field['privacy_policy_section_title'])) ?>">
          <p class="privacy-policy-title"><?php echo $field['privacy_policy_section_title'];?></p>
		  <p><?php echo $field['privacy_policy_section_content'];?></p>
		  <a href="#page" class="back-to-top">Back to Top</a>
        </li>
    <?php endforeach ?>
</ul>


</div>

<?php get_footer(); ?>
