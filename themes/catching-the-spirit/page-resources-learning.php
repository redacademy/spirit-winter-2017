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
            <h1 class="page-title"><?php echo esc_html(CFS()->get('resource_page_title')); ?></h1>
            <?php $content = CFS()->get('resource_page_description') ?>
            <?php $allowed_html = array('br' => array()); ?>                                        
            <p><?php echo wp_kses($content, $allowed_html); ?></p>	            
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
