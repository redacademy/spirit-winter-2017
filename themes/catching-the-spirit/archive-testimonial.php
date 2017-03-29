<?php
/**
 * The template for displaying the Testimonial archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="latest-posts">
                <div class="post-thumbnail">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large');
                        } else { ?>
                        <img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/leadership')->ID); ?>" alt="Image of testimonial writer" />
                    <?php } ?>
                    <?php the_title( sprintf( '<h3 class="post-name">', esc_url( get_permalink() ) ), '</h3>' ); ?>
                </div><!-- .post-thumbnail -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

        <a href="<?php echo esc_url( home_url( '/testimonials' ) ); ?>" class="blue-btn">Add Testimonial</a>
		
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
