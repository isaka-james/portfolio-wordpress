<?php

/**
 * About setup
 *
 * @package Portfolio Canvas
 */

require_once trailingslashit(get_template_directory()) . 'inc/about/class.about.php';

if (!function_exists('portfolio_canvas_about_setup')) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function portfolio_canvas_about_setup()
	{
		$theme = wp_get_theme();
		$xtheme_name = $theme->get('Name');
		$xtheme_domain = $theme->get('TextDomain');
		if ($xtheme_domain == 'x-magazine') {
			$theme_slug = $xtheme_domain;
		} else {
			$theme_slug = 'portfolio-canvas';
		}



		$config = array(
			// Menu name under Appearance.
			'menu_name'               => esc_html__('Portfolio Info', 'portfolio-canvas'),
			// Page title.
			'page_name'               => esc_html__('Portfolio Info', 'portfolio-canvas'),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'portfolio-canvas'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'portfolio-canvas'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'portfolio-canvas'),
				'recommended_actions' => esc_html__('Recommended Actions', 'portfolio-canvas'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'portfolio-canvas'),
				'free_pro'  => esc_html__('Free Vs Pro', 'portfolio-canvas'),
			),

			// Quick links.
			'quick_links' => array(
				'xmagazine_url' => array(
					'text'   => esc_html__('UPGRADE Portfolio Canvas PRO', 'portfolio-canvas'),
					'url'    => 'https://wpthemespace.com/product/portfolio-canvas-pro/?add-to-cart=6998',
					'button' => 'danger',
				),
				'update_url' => array(
					'text'   => esc_html__('Portfolio Canvas PRO Video', 'portfolio-canvas'),
					'url'    => 'https://www.youtube.com/watch?v=Y5a4KRQ7uNY',
					'button' => 'danger',
				),

			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Demo Content', 'portfolio-canvas'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'portfolio-canvas'), esc_html__('One Click Demo Import', 'portfolio-canvas')),
					'button_text' => esc_html__('UPGRADE For  Demo Content', 'portfolio-canvas'),
					'button_url'  => 'https://wpthemespace.com/product/portfolio-canvas-pro/?add-to-cart=6998',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),

				'two' => array(
					'title'       => esc_html__('Theme Options', 'portfolio-canvas'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'portfolio-canvas'),
					'button_text' => esc_html__('Customize', 'portfolio-canvas'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'portfolio-canvas'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show Portfolio Canvas short video for better understanding', 'portfolio-canvas'), esc_html__('One Click Demo Import', 'portfolio-canvas')),
					'button_text' => esc_html__('Show video', 'portfolio-canvas'),
					'button_url'  => 'https://www.youtube.com/watch?v=Y5a4KRQ7uNY',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'portfolio-canvas'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'portfolio-canvas'),
					'button_text' => esc_html__('Add Widgets', 'portfolio-canvas'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'portfolio-canvas'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'portfolio-canvas'),
					'button_text' => esc_html__('View Demo', 'portfolio-canvas'),
					'button_url'  => 'https://px.wpteamx.com/demos',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'portfolio-canvas'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'portfolio-canvas'),
					'button_text' => esc_html__('Contact Support', 'portfolio-canvas'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'portfolio-canvas'),
				'already_activated_message' => esc_html__('Already activated', 'portfolio-canvas'),
				'version_label' => esc_html__('Version: ', 'portfolio-canvas'),
				'install_label' => esc_html__('Install and Activate', 'portfolio-canvas'),
				'activate_label' => esc_html__('Activate', 'portfolio-canvas'),
				'deactivate_label' => esc_html__('Deactivate', 'portfolio-canvas'),
				'content'                   => array(
					array(
						'slug' => 'magical-addons-for-elementor',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-products-display'
					),
					array(
						'slug' => 'magical-posts-display'
					),
					array(
						'slug' => 'click-to-top'
					),
					array(
						'slug' => 'gallery-box',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-blocks'
					),
					array(
						'slug' => 'easy-share-solution',
						'icon' => 'svg',
					),
					array(
						'slug' => 'wp-edit-password-protected',
						'icon' => 'svg',
					),
				),
			),
			// Required actions array.
			'recommended_actions'        => array(
				'install_label' => esc_html__('Install and Activate', 'portfolio-canvas'),
				'activate_label' => esc_html__('Activate', 'portfolio-canvas'),
				'deactivate_label' => esc_html__('Deactivate', 'portfolio-canvas'),
				'content'            => array(
					'magical-blocks' => array(
						'title'       => __('Magical Posts Display', 'portfolio-canvas'),
						'description' => __('Now you can add or update your site elements very easily by Magical Products Display. Supercharge your Elementor block with highly customizable Magical Blocks For WooCommerce.', 'portfolio-canvas'),
						'plugin_slug' => 'magical-products-display',
						'id' => 'magical-posts-display'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/portfolio-canvas-pro/?add-to-cart=6998">' . __('UPGRADE Portfolio Canvas PRO', 'portfolio-canvas') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'portfolio-canvas'),
						//'plugin_slug' => 'x-instafeed',
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $xtheme_name,
				'pro_theme_name'      => $xtheme_name . __(' Pro', 'portfolio-canvas'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/portfolio-canvas-pro',
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'portfolio-canvas'), 'Portfolio Canvas Pro'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'portfolio-canvas'),
						'description' => esc_html__('Portfolio Canvas\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'portfolio-canvas'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'portfolio-canvas'),
						'description' => esc_html__('Portfolio Canvas makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'portfolio-canvas'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'portfolio-canvas'),
						'description' => esc_html__('Portfolio Canvas gives you extra slider feature. You can create awesome home slider in this theme.', 'portfolio-canvas'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'portfolio-canvas'),
						'description' => esc_html__('Portfolio Canvas comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'portfolio-canvas'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Auto Set-up Feature', 'portfolio-canvas'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'portfolio-canvas'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'portfolio-canvas'),
						'description' => esc_html__('Portfolio Canvas gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'portfolio-canvas'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'portfolio-canvas'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'portfolio-canvas'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Extra Drag and drop support', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advanced Portfolio Filter', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Testimonial Carousel', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Diffrent Style Blog', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Pro Service Section', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Animation Home Text', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'portfolio-canvas'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'portfolio-canvas'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'portfolio-canvas'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),

					array(
						'title'       => esc_html__('Premium Support and Assistance', 'portfolio-canvas'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'portfolio-canvas'),
						'description' => esc_html__('You can easily remove the Theme: Portfolio Canvas by Portfolio Canvas copyright from the footer area and make the theme yours from start to finish.', 'portfolio-canvas'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

		);

		portfolio_canvas_About::init($config);
	}

endif;

add_action('after_setup_theme', 'portfolio_canvas_about_setup');


/**
 * Pro notice text
 *
 */
function portfolio_canvas_pnotice_output()
{

?>
	<div class="mgadin-hero">
		<div class="mge-info-content">
			<div class="mge-info-hello">
				<?php
				$current_theme = wp_get_theme();
				$current_theme_name = $current_theme->get('Name');
				$current_user = wp_get_current_user();

				$demo_link = esc_url('https://wpthemespace.com/product/portfolio-canvas-pro/');
				$pro_link = esc_url('https://wpthemespace.com/product/portfolio-canvas-pro/?add-to-cart=6998');


				esc_html_e('Hello, ', 'portfolio-canvas');
				echo esc_html($current_user->display_name);
				?>

				<?php esc_html_e('👋🏻', 'portfolio-canvas'); ?>
			</div>
			<div class="mge-info-desc">
				<div><?php printf(esc_html__('Attention, You are using the free verion! 🚨  upgrade the Portfolio Canvas Pro theme to get the next level of experience.  Enjoy SEO-friendly and lightweight design, lightning-fast speed optimization, more secure, premade demos, effortless one-click demo imports, and exclusive custom Elementor premium widgets. With the pro version, you can take your website to the next level and truly stand out from the competition.', 'portfolio-canvas'), $current_theme_name); ?></div>
				<div class="mge-offer"><?php printf(esc_html__('Don\'t miss out on these incredible features - upgrade to Portfolio Canvas Pro now! ', 'portfolio-canvas'), $current_theme_name); ?></div>
			</div>
			<div class="mge-info-actions">
				<a href="<?php echo esc_url($pro_link); ?>" target="_blank" class="button button-primary upgrade-btn">
					<?php esc_html_e('Upgrade Pro', 'portfolio-canvas'); ?>
				</a>
				<a href="<?php echo esc_url($demo_link); ?>" target="_blank" class="button button-primary demo-btn">
					<?php esc_html_e('View Details', 'portfolio-canvas'); ?>
				</a>
				<button class="button button-info btnend"><?php esc_html_e('Dismiss this notice', 'portfolio-canvas') ?></button>
			</div>

		</div>

	</div>
<?php
}
//Admin notice 
function portfolio_canvas_new_optins_texts()
{
	$hide_date = get_option('portfolio_caninfo');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 25) {
			return;
		}
	}
?>
	<div class="mgadin-notice notice notice-info mgadin-theme-dashboard mgadin-theme-dashboard-notice mge is-dismissible meis-dismissible">
		<?php portfolio_canvas_pnotice_output(); ?>
	</div>
<?php

}
add_action('admin_notices', 'portfolio_canvas_new_optins_texts');

function portfolio_canvas_new_optins_texts_init()
{
	if (isset($_GET['xbnotice']) && $_GET['xbnotice'] == 1) {
		update_option('portfolio_caninfo', current_time('mysql'));
	}
}
add_action('init', 'portfolio_canvas_new_optins_texts_init');
