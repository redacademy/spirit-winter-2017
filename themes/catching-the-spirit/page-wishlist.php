<?php
/**
 * Template Name: Wishlist Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<h1 class="page-title">Our Wishlist</h1>

<p> <?php echo CFS()->get('wishlist_opening_text');?> </p>

<?php $fields = CFS()->get('wishlist_loop'); ?>


<ul class="wishlist-loop">
    <?php foreach ( $fields as $field ): ?>
        <li class="wishlist-entry green-box">
        <p class ="strong wishlist-heading"> <?php echo $field['wishlist_category'];?> </p>
        <p><?php echo $field['wishlist_item_1'];?></p>
        <p><?php echo $field['wishlist_item_2'];?></p>
        <p><?php echo $field['wishlist_item_3'];?></p>
        <p><?php echo $field['wishlist_item_4'];?></p>
        </li>
    <?php endforeach ?>
</ul>

<p class="wishlist-contact-us"> <?php echo CFS()->get('wishlist_contact_us')?> </p>
<p> <?php echo CFS()->get('wishlist_closing_text')?> </p>

<?php get_footer(); ?>
