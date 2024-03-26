<?php

/**
 * The file for header all actions
 *
 *
 * @package Go Portfolio
 */


function go_portfolio_header_logo_output()
{
	$go_portfolio_site_tagline_show = get_theme_mod('go_portfolio_site_tagline_show');

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
				$go_portfolio_description = get_bloginfo('description', 'display');
				if (($go_portfolio_description || is_customize_preview()) && empty($go_portfolio_site_tagline_show)) :
				?>
					<p class="site-description"><?php echo $go_portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			<?php endif; ?>

		</div><!-- .site-branding -->
	<?php endif; ?>

<?php
}
add_action('go_portfolio_header_logo', 'go_portfolio_header_logo_output');




// header style one
function go_portfolio_header_style_one()
{
?>
	<div class="pxm-style1">
		<div class="navigation">
			<div class="d-flex">
				<div class="pxms1-logo">
					<?php do_action('go_portfolio_header_logo'); ?>
				</div>
				<div class="pxms1-menu ms-auto">
					<?php do_action('go_portfolio_main_menu'); ?>
				</div>
			</div>
		</div>
	</div>


<?php
}
add_action('go_portfolio_header_style_one', 'go_portfolio_header_style_one');

// header style one
function go_portfolio_header_style_two()
{

?>
	<div class="go-portfolio-logo-section">
		<div class="container">
			<div class="head-logo-sec">
				<?php do_action('go_portfolio_header_logo'); ?>
			</div>
		</div>
	</div>

	<div class="menu-bar text-center">
		<div class="container">
			<div class="go-portfolio-container menu-inner">
				<?php do_action('go_portfolio_main_menu'); ?>
			</div>
		</div>
	</div>
<?php
}
add_action('go_portfolio_header_style_two', 'go_portfolio_header_style_two');

// Go Portfolio mene style
function go_portfolio_header_menu_output()
{
?>
	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'main-menu',
			'menu_id'        => 'go-portfolio-menu',
			'menu_class'        => 'go-portfolio-menu',
		));
		?>
	</nav><!-- #site-navigation -->
<?php
}
add_action('go_portfolio_main_menu', 'go_portfolio_header_menu_output');

// Go Portfolio mobile mene style
function go_portfolio_mobile_menu_output()
{
?>
	<div class="mobile-menu-bar">
		<div class="container">
			<div class="mbar-inner">
				<div class="mlogo">
					<?php do_action('go_portfolio_header_logo'); ?>
				</div>
				<nav id="mobile-navigation" class="mobile-navigation">
					<button id="mmenu-btn" class="menu-btn" aria-expanded="false">
						<span class="mopen"><?php esc_html_e('Menu', 'go-portfolio'); ?></span>
						<span class="mclose"><?php esc_html_e('Close', 'go-portfolio'); ?></span>
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
	</div>

<?php
}
add_action('go_portfolio_mobile_menu', 'go_portfolio_mobile_menu_output');
