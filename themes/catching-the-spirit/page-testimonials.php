<?php
/**
 * Template Name: Testimonials Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

            <section class="testimonials">
                <h2>Here's what other people are saying about us:</h2>
                <ul>
                <?php
                    //global $post;
                    $args = array( 
                        'post_type' => 'testimonial',
                        'posts_per_page' => 4, 
                        'order'=> 'DSC', 
                        'orderby' => 'post_date' 
                    );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ):
                        setup_postdata( $post ); ?> 
                            <li class="latest-posts">
                                <div class="post-thumbnail">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('large');
                                    } else { ?>
                                    <img src="<?php echo CFS()->get('program_image', get_page_by_path('programs/leadership')->ID); ?>" alt="Image of testimonial writer" />
                                    <?php } ?>
                                    <h3 class="post-name"><?php the_title(); ?></h3>
                                </div>                                    
                                <div class="entry-content">
                                <?php the_content(); ?>
                                </div><!-- .entry-content -->              
                            </li> <!-- latest-posts-->
                <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div> <!-- testimonials -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
