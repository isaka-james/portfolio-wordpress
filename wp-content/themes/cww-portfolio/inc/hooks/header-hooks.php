<?php
/**
* Functions & definations for theme header
*
*
*/
add_action( 'cww_portfolio_logo' , 'cww_portfolio_logo', 10 );
if( ! function_exists('cww_portfolio_logo')):
	function cww_portfolio_logo(){
		?>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cww_portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $cww_portfolio_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo esc_html($cww_portfolio_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php 
	}
endif;



add_action('cww_portfolio_nav','cww_portfolio_nav');

if( ! function_exists('cww_portfolio_nav')):
	function cww_portfolio_nav(){

		?>
		<header id="masthead" class="site-header">
			<div class="container cww-flex">
				<?php do_action('cww_portfolio_logo'); ?>
				<div class="menu-wrapp">
					<?php do_action('cww_portfolio_mobile_menu'); ?>
					<div class="cww-menu-outer-wrapp cww-flex">
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
		<?php 
	}
endif;


add_action('cww_portfolio_header_button','cww_portfolio_header_button');
if( ! function_exists('cww_portfolio_header_button')):
	function cww_portfolio_header_button(){

		$default 					= cww_portfolio_customizer_defaults();
		$cww_header_cta_enable 		= get_theme_mod('cww_header_cta_enable', $default['cww_header_cta_enable'] );
		$cww_header_cta_text 		= get_theme_mod('cww_header_cta_text', $default['cww_header_cta_text'] );
		$cww_header_cta_url 		= get_theme_mod('cww_header_cta_url', $default['cww_header_cta_url']);
		$cww_header_cta_new_tab 	= get_theme_mod('cww_header_cta_new_tab', $default['cww_header_cta_new_tab']);

		if( empty($cww_header_cta_enable)){
			return;
		}
		
		$cww_header_cta_new_tab = ($cww_header_cta_new_tab == 1 ) ? 'target="_blank"' : '' ;

		?>
		<div class="header-cta-wrapp">
			<a href="<?php echo esc_url($cww_header_cta_url);?>" <?php echo $cww_header_cta_new_tab;?>>
				<span>
				<?php echo esc_html($cww_header_cta_text); ?>
				</span>	
			</a>
		</div>
		<?php 
	}
endif;


/**
* Mobile menu
*
*/
add_action('cww_portfolio_mobile_menu','cww_portfolio_mobile_menu');
if(! function_exists('cww_portfolio_mobile_menu')):
	function cww_portfolio_mobile_menu(){
		?>
		<button class="button is-text" id="mob-toggle-menu-button">
            <span class="button-inner-wrapper">
                <span class="icon menu-icon"></span>
			</span>
        </button>
		<?php 
	}
endif;