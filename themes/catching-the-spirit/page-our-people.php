<?php
/**
 * Template Name: Our People Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <h1>Our People</h2>

            <div class="youth-council bloc">
                <h2>Youth Council</h2>
                <p><?php echo CFS()->get('our_people_youth_council'); ?></p>
                <div class="youth-council-image">
                <img src="<?php echo CFS()->get( 'our_people_youth_council_image' ); ?>"/>
                </div>
                <a href="" class="blue-btn">Learn More</a>
            </div>

            <div class="board-directors bloc">
                <h2>Board of Directors</h2>
                <p><?php echo CFS()->get('our_people_board_of_directors'); ?></p>
                <div class="board-directors-image">
                <img src="<?php echo CFS()->get( 'our_people_board_of_directors_image' ); ?>"/>
                </div>
                <a href="<?php echo home_url( '/board' ); ?>" class="blue-btn">Learn More</a>
            </div>

            <div class="peer-leaders bloc">
                <h2>Peer Leaders</h2>
                <p><?php echo CFS()->get('our_people_peer_leaders'); ?></p>
                <div class="peer-leaders-image">
                <img src="<?php echo CFS()->get( 'our_people_peer_leaders_image' ); ?>"/>
                </div>
                <div class= "btns"><a href="<?php echo home_url( '/leadership' ); ?>" class="blue-btn">Learn More</a><a href="" class="red-btn">Apply</a></div>
            </div>

            <div class="supervisors bloc">
                <h2>Supervisors</h2>
                <p><?php echo CFS()->get('our_people_supervisors'); ?></p>
                <div class="supervisors-image">
                <img src="<?php echo CFS()->get( 'our_people_supervisors_image' ); ?>"/>
                </div>
                <div class="btns"><a href="<?php echo home_url( '/leadership' ); ?>" class="blue-btn">Learn More</a><a href="" class="red-btn">Apply</a></div>
            </div>
            
	

        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>