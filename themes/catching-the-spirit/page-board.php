<?php
/**
 * Template Name: Board Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<?php the_title( '<h1 class="page-title board-title">', '</h1>' ); ?>

<h2 class="strong meet-board">Meet Our Board</h2>

<ul class="board-members-list">

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
     <h2 class="strong get-involved-title">Want to get involved? Become a CTS Member!</h2>
    <p>  <?php echo CFS()->get('board_get_involved'); ?> </p>
</div>

<a href="<?php echo CFS()->get('join_board'); ?>" class="red-btn">Join</a>

<?php get_footer(); ?>
