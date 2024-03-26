<?php

/**
 * The file for header all actions
 *
 *
 * @package Portfolio Canvas
 */


function portfolio_canvas_header_logo_output()
{
	$portfolio_canvas_site_tagline_show = get_theme_mod('portfolio_canvas_site_tagline_show');

?>

	<?php if (has_custom_logo()) : ?>
		<div class="site-branding brand-logo">
			<?php
			the_custom_logo();
			?>
		</div>
	<?php endif; ?>
	<?php
	if (display_header_text() == true || (display_header_text() == true && is_customize_preview())) : ?>
		<div class="site-branding brand-text">
			<?php if (display_header_text() == true || (display_header_text() == true && is_customize_preview())) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				$portfolio_canvas_description = get_bloginfo('description', 'display');
				if (($portfolio_canvas_description || is_customize_preview()) && empty($portfolio_canvas_site_tagline_show)) :
				?>
					<p class="site-description"><?php echo $portfolio_canvas_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			<?php endif; ?>

		</div><!-- .site-branding -->
	<?php endif; ?>

<?php
}
add_action('portfolio_canvas_header_logo', 'portfolio_canvas_header_logo_output');




// header style one
function portfolio_canvas_header_style_one()
{
?>
	<div class="container-fluid pxm-style1">
		<div class="navigation mx-4">
			<div class="d-flex">
				<div class="pxms1-logo">
					<?php do_action('portfolio_canvas_header_logo'); ?>
				</div>
				<div class="pxms1-menu ms-auto">
					<?php do_action('portfolio_canvas_main_menu'); ?>
				</div>
			</div>
		</div>
	</div>


<?php
}
add_action('portfolio_canvas_header_style_one', 'portfolio_canvas_header_style_one');

// header style one
function portfolio_canvas_header_style_two()
{

?>
	<div class="portfolio-canvas-logo-section">
		<div class="container">
			<div class="head-logo-sec">
				<?php do_action('portfolio_canvas_header_logo'); ?>
			</div>
		</div>
	</div>

	<div class="menu-bar text-center">
		<div class="container">
			<div class="portfolio-canvas-container menu-inner">
				<?php do_action('portfolio_canvas_main_menu'); ?>
			</div>
		</div>
	</div>
<?php
}
add_action('portfolio_canvas_header_style_two', 'portfolio_canvas_header_style_two');

// Portfolio Canvas mene style
function portfolio_canvas_header_menu_output()
{
?>
	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'main-menu',
			'menu_id'        => 'portfolio-canvas-menu',
			'menu_class'        => 'portfolio-canvas-menu',
		));
		?>
	</nav><!-- #site-navigation -->
<?php
}
add_action('portfolio_canvas_main_menu', 'portfolio_canvas_header_menu_output');

// Portfolio Canvas mobile mene style
function portfolio_canvas_mobile_menu_output()
{
?>
	<div class="mobile-menu-bar">
		<div class="container">
			<nav id="mobile-navigation" class="mobile-navigation">
				<button id="mmenu-btn" class="menu-btn" aria-expanded="false">
					<span class="mopen"><?php esc_html_e('Menu', 'portfolio-canvas'); ?></span>
					<span class="mclose"><?php esc_html_e('Close', 'portfolio-canvas'); ?></span>
				</button>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'wsm-menu',
					'menu_class'        => 'wsm-menu',
				));
				?>
			</nav><!-- #site-navigation -->
		</div>
	</div>

<?php
}
add_action('portfolio_canvas_mobile_menu', 'portfolio_canvas_mobile_menu_output');
