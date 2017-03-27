<?php
/**
 * Template Name: FAQ Template
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<section class="faq-page">
	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	<p class="we-have-answers">You Have Question We Have Answers</p>

	<div class="btn-container">
	<a class="blue-btn faq-btn-parents">For Parents</a>
	<a class="blue-btn faq-btn-youth">For Youth</a>
	</div>

<div class="faq-parents faq-parents-hide">
<?php	$fields = CFS()->get( 'faq_parents_loop' ); ?>
<?php foreach ( $fields as $field ): ?>
    <p class="strong"><?php echo $field['faq_question']; ?></p>
    <p><?php echo $field['faq_answer']; ?></p>
<?php endforeach ?>
<p><?php echo CFS()->get('faq_contact_us');?></p>
</div>

<div class="faq-youth faq-youth-hide">
<?php	$fields = CFS()->get( 'faq_youth_loop' );?>
<?php foreach ( $fields as $field ): ?>
    <p class="strong"><?php echo $field['faq_question']; ?></p>
    <p><?php echo $field['faq_answer']; ?></p>
<?php endforeach ?>
<p><?php echo CFS()->get('faq_contact_us');?></p>
</div>


<section>
<?php get_footer(); ?>
