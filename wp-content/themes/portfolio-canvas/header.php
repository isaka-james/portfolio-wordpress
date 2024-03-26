<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio Canvas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'portfolio-canvas'); ?></a>
		<header id="masthead" class="site-header px-hstyle1">
			<?php if (has_header_image()) : ?>
				<div class="header-img">
					<?php the_header_image_tag(); ?>
				</div>
			<?php endif; ?>
			<?php do_action('portfolio_canvas_mobile_menu'); ?>
			<?php
			$portfolio_canvas_main_menu_style = get_theme_mod('portfolio_canvas_main_menu_style', 'style1');

			if ($portfolio_canvas_main_menu_style == 'style1') {
				do_action('portfolio_canvas_header_style_one');
			} else {
				do_action('portfolio_canvas_header_style_two');
			}
			?>
		</header><!-- #masthead -->

		<?php
		if (is_home() || is_front_page()) {
			do_action('portfolio_canvas_profile_intro');
		}

		?>