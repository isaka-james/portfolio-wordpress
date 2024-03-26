<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CWW_Portfolio
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
<a class="skip-link screen-reader-text" href="#cww-site-content"><?php esc_html_e( 'Skip to content', 'smart-portfolio' ); ?></a>
<div id="page" class="site">

<header id="masthead" class="site-header">
	<div class="item-wrapper">
		<?php do_action('cww_portfolio_logo'); ?>
		<?php  do_action('cww_portfolio_social_icons'); ?>
		<div class="menu-wrapp">
			<?php do_action('cww_portfolio_mobile_menu'); ?>
			<div class="cww-menu-outer-wrapp">
				<nav id="site-navigation" class="main-navigation">
					
					<?php
					wp_nav_menu(
						array(
							'theme_location' 	=> 'menu-1',
							'menu_id'        	=> 'primary-menu',
							'menu_class' 	 	=> 'cww-main-nav',
							'container_class' 	=> 'cww-nav-container'
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<?php do_action('cww_portfolio_header_button'); ?>
				<div class="menu-last-focus-item"></div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->

<div id="cww-site-content" class="cww-site-content">