<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
				<div class="header-desktop">
					<div class="container-desk">
						<a href="<?php  echo esc_url( home_url( '/' ) ); ?>"><img src ="<?php echo get_template_directory_uri();?>/images/logo/logo.png" class ="header-logo"/> </a>
						<div class="title-desktop">
							<h1>Catching the Spirit Youth Society</h1>
							<span>For Youth By Youth</span>
						</div>
						<div class="info-text">
							<p class="contact-us">Contact Us: 604-544-1622</p>
							<p class="follow-us">Follow Us:
								<a href="https://www.facebook.com/Catching-the-Spirit-Youth-Society-54652314785/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
								<a href="https://www.instagram.com/catchingthespirit"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href="https://twitter.com/CTSProgram"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							</p>
						</div>
					</div>
					
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="nav-mobile">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<a href="<?php  echo esc_url( home_url( '/' ) ); ?>"><img src ="<?php echo get_template_directory_uri();?>/images/logo/logo.png" class ="header-logo"/> </a>
						<a href="tel:6045441622"><i class="fa fa-phone" aria-hidden="true"></i></a>
					</div>
					<div class="nav-desktop">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'div', 'container_class' => 'menu-header', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', ) ); ?>
					</div>
					<div class="responsive-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'div', 'container_class' => 'menu-header', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', ) ); ?>
						<a href="https://www.facebook.com/Catching-the-Spirit-Youth-Society-54652314785/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/catchingthespirit"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://twitter.com/CTSProgram"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content"></div>
