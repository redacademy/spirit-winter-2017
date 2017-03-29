<?php
/**
 * Template Name: Opportunities Resource Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header>
            <h1 class="page-title"><?php echo CFS()->get('resource_page_title'); ?></h1>
            <p><?php echo CFS()->get('resource_page_description'); ?></p>
            <p>Please <a href="mailto:info@catchingthespirit.com">Contact Us</a> if you have any additional questions.</p>
        </header>

        <section>
            <ul>
                <?php 
                    $fields = CFS()->get( 'opportunities_resource_loop' ); ?>
                <?php foreach ( $fields as $field ): ?>
                    <li>
                        <h2><?php echo $field['opportunity_type']; ?></h2>
                        <p><?php echo $field['opportunity_description']; ?> <?php echo $field['opportunity_application_link']; ?>.</p>
                    </li>
                <?php endforeach ?>
            </ul>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
