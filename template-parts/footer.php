<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woosta
 */

?>

	<footer id="colophon" class="site-footer">

		<section class="footer-sf">
			<div class="alignfull">
				<div class="column-width">
					<h2><span class="big">ClarkNext:</span><br>A Framework for Our Future</h2>
					<figure class="aligncenter is-resized"><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri() . '/media/clark-logo-tagline-w.png'; ?>" alt="Clark University.  Challenge convention. Change our world." width="205" height="248"></figure>
				</div>
			</div>
		</section>
		
		<section class="footer-some">
			<h3>Follow Clark on social media</h3>

			<div class="some">
				<figure><a href="https://www.instagram.com/clarkuniversity/"><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/media/instagram.png" alt="instagram"></a></figure>

				<figure><a href="https://www.facebook.com/ClarkUniversityWorcester"><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/media/facebook.png" alt="facebook"></a></figure>

				<figure><a href="https://twitter.com/clarkuniversity"><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/media/twitter.png" alt="twitter"></a></figure>

				<figure><a href="https://www.youtube.com/clarkuniversity"><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/media/youtube.png" alt="youtube"></a></figure>

				<figure><a href="https://www.linkedin.com/school/clark-university/"><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/media/linkedin.png" alt="linkedin"></a></figure>
			</div>
		</section>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>



