<?php
/**
 * Template Name: Learning Resource Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <header>
            <h1 class="page-title"><?php echo CFS()->get('resource_page_title'); ?></h1>
            <p><?php echo CFS()->get('resource_page_description'); ?></p>
        </header>
        <section>
            <ul>
            <?php 
                $fields = CFS()->get( 'learning_resource_loop' ); ?>
            <?php foreach ( $fields as $field ): ?>
                <li><?php echo $field['resource_name']; ?> - <?php echo $field['resource_link']; ?></li>
            <?php endforeach ?>
            </ul>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
