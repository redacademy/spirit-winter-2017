<?php
/**
 * Template Name: Board Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<h1 class="page-title">Board Members</h1>

<h2 class="strong">Meet Our Board</h2>

<ul class="Board-members-list">

    <?php $fields = CFS()->get('board_members_list'); ?>
    <?php foreach ( $fields as $field ): ?>
        <li>
            <img src="<?php echo $field['board_member_image']; ?>"/>
            <p class="board-member-name strong"><?php echo $field['board_member_name']; ?></p>
           <p class="board-member-description"><?php echo $field['board_member_description']; ?></p>
        </li>
    <?php endforeach ?>
</ul>

<div class="green-box our-model">  
    <h2 class="strong">Our Model</h2>
    <p><?php echo CFS()->get('board_our_model'); ?></p>
 </div>

 <div class="get-involved">
     <h2 class="strong">Want to get involved? Become a CTS Member!</h2>
    <p>  <?php echo CFS()->get('board_get_involved'); ?> </p>
</div>

<a href="#" class="red-btn">Join</a>

<?php get_footer(); ?>
