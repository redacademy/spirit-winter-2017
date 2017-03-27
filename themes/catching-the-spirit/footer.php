<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

		</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
				</div>
				<div class="footer-contact-mobile">
					<p><a href="tel:6045441622">(604) 544-1622</a> - <a href="mailto:<?php echo antispambot( 'info@catchingthespirit.com' ); ?>"><?php echo antispambot( 'info@catchingthespirit.com' ); ?></a></p>
					<p>6825 Cariboo Rd, Burnaby, BC</p>
				</div>
				<div class="social-icon-footer">
					<a href="https://www.facebook.com/Catching-the-Spirit-Youth-Society-54652314785/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/catchingthespirit"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/CTSProgram"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				</div>
				<div class="footer-contact-desk">
					<p><a href="tel:6045441622">(604) 544-1622</a></p>
					<a href="mailto:<?php echo antispambot( 'info@catchingthespirit.com' ); ?>"><?php echo antispambot( 'info@catchingthespirit.com' ); ?></a>
					<p>6825 Cariboo Rd, Burnaby</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
