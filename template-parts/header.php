<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woosta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woosta' ); ?></a>
	<?php dynamic_sidebar( 'preheader' ); ?>
			
<section>
	<div class="alignfull nav-trad">
		<div class="wp-block-columns are-vertically-aligned-center column-width is-not-stacked-on-mobile">
		
			<div class="wp-block-column is-vertically-aligned-center logo-col" style="flex-basis:220px">
				<a href="https://www.clarku.edu/">
					<figure><img decoding="async" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/media/clark-horizontal.png" alt="Clark University"></figure>
				</a>
			</div>

			<div class="wp-block-column is-vertically-aligned-center menu-col">				
				<nav id="site-navigation" class="main-nav">
					<button class="menu-toggle" aria-controls="navigation-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'woosta' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location'	=> 'navigation-menu',
							'menu_id'					=> 'header-navigation',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>

		</div>
	</div>

</section>