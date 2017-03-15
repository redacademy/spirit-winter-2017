<?php
/**
 * Template Name: FAQ Template
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<section class="faq-page">
	<h1>FAQ's</h1>
	<p class="we-have-answers">You Have Question We Have Answers</p>

	<div class="btn-container">
	<a class="blue-btn">For Parents</a>
	<a class="blue-btn">For Youth</a>
	</div>



<div class="faq-parents">
<?php	$fields = CFS()->get( 'faq_parents_loop' ); ?>
<?php foreach ( $fields as $field ): ?>
    <p class="strong"><?php echo $field['faq_question']; ?></p>
    <p><?php echo $field['faq_answer']; ?></p>
<?php endforeach ?>
</div>

<div class="faq-youth">
<?php	$fields = CFS()->get( 'faq_youth_loop' );?>
<?php foreach ( $fields as $field ): ?>
    <p class="strong"><?php echo $field['faq_question']; ?></p>
    <p><?php echo $field['faq_answer']; ?></p>
<?php endforeach ?>
</div>


<section>
<?php get_footer(); ?>
