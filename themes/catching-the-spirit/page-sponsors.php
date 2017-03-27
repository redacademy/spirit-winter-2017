<?php
/**
 * Template Name: Sponsors Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

<h1 class="sponsor-thanks">Thank You</h1>

<p><?php CFS()->get( 'sponsor-thanks' ); ?></p>

<ul class="sponsors-page-list">

    <?php $fields = CFS()->get('sponsors_list'); ?>
    <?php foreach ( $fields as $key=>$field ): ?>
        <li>
            <img src="<?php echo $field['sponsor_logo']; ?>"/>
            <p class="sponsor-name"><?php echo $field['sponsor_name']; ?></p>

                <?php if($key === 0  && isset($field['sponsor_statement'])): ?>
                <p><?php echo $field['sponsor_statement']; ?>
                <?php endif ?>
        </li>
    <?php endforeach ?>
</ul>

<?php get_footer(); ?>
