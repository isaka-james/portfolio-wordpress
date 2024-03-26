<?php

/**
 * About setup
 *
 * @package Go Portfolio
 */

require_once trailingslashit(get_template_directory()) . 'inc/about/class.about.php';

if (!function_exists('go_portfolio_about_setup')) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function go_portfolio_about_setup()
	{
		$theme = wp_get_theme();
		$xtheme_name = $theme->get('Name');
		$xtheme_domain = $theme->get('TextDomain');




		$config = array(
			// Menu name under Appearance.
			'menu_name'               => sprintf(esc_html__('%s Info', 'go-portfolio'), $xtheme_name),
			// Page title.
			'page_name'               => sprintf(esc_html__('%s Info', 'go-portfolio'), $xtheme_name),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'go-portfolio'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'go-portfolio'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'go-portfolio'),
				'recommended_actions' => esc_html__('Recommended Actions', 'go-portfolio'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'go-portfolio'),
				'free_pro'  => esc_html__('Free Vs Pro', 'go-portfolio'),
			),

			// Quick links.
			'quick_links' => array(
				'xmagazine_url' => array(
					'text'   => esc_html__('UPGRADE NEWPAPER EYE PRO', 'go-portfolio'),
					'url'    => 'https://wpthemespace.com/product/go-portfolio-pro/?add-to-cart=9915',
					'button' => 'danger',
				),
				'update_url' => array(
					'text'   => esc_html__('View demo', 'go-portfolio'),
					'url'    => 'https://wpthemespace.com/go-portfolio-demo/',
					'button' => 'primery',
				),
				'video_url' => array(
					'text'   => esc_html__('Show Video', 'go-portfolio'),
					'url'    => 'https://www.youtube.com/watch?v=ATu84uap_bc',
					'button' => 'danger',
				),

			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Demo Content', 'go-portfolio'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'go-portfolio'), esc_html__('One Click Demo Import', 'go-portfolio')),
					'button_text' => esc_html__('UPGRADE For  Demo Content', 'go-portfolio'),
					'button_url'  => 'https://wpthemespace.com/product/go-portfolio-pro/?add-to-cart=9915',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),

				'two' => array(
					'title'       => esc_html__('Theme Options', 'go-portfolio'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'go-portfolio'),
					'button_text' => esc_html__('Customize', 'go-portfolio'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'go-portfolio'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show Go Portfolio short video for better understanding', 'go-portfolio'), esc_html__('One Click Demo Import', 'go-portfolio')),
					'button_text' => esc_html__('Show video', 'go-portfolio'),
					'button_url'  => 'https://www.youtube.com/watch?v=ATu84uap_bc',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'go-portfolio'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'go-portfolio'),
					'button_text' => esc_html__('Add Widgets', 'go-portfolio'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'go-portfolio'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'go-portfolio'),
					'button_text' => esc_html__('View Demo', 'go-portfolio'),
					'button_url'  => 'https://wpthemespace.com/go-portfolio-demo/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'go-portfolio'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'go-portfolio'),
					'button_text' => esc_html__('Contact Support', 'go-portfolio'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'go-portfolio'),
				'already_activated_message' => esc_html__('Already activated', 'go-portfolio'),
				'version_label' => esc_html__('Version: ', 'go-portfolio'),
				'install_label' => esc_html__('Install and Activate', 'go-portfolio'),
				'activate_label' => esc_html__('Activate', 'go-portfolio'),
				'deactivate_label' => esc_html__('Deactivate', 'go-portfolio'),
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
				'install_label' => esc_html__('Install and Activate', 'go-portfolio'),
				'activate_label' => esc_html__('Activate', 'go-portfolio'),
				'deactivate_label' => esc_html__('Deactivate', 'go-portfolio'),
				'content'            => array(
					'magical-blocks' => array(
						'title'       => __('Magical Posts Display', 'go-portfolio'),
						'description' => __('Now you can add or update your site elements very easily by Magical Products Display. Supercharge your Elementor block with highly customizable Magical Blocks For WooCommerce.', 'go-portfolio'),
						'plugin_slug' => 'magical-products-display',
						'id' => 'magical-posts-display'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/go-portfolio-pro/?add-to-cart=9915">' . __('UPGRADE NEWPAPER EYE PRO', 'go-portfolio') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'go-portfolio'),
						//'plugin_slug' => 'x-instafeed',
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $xtheme_name,
				'pro_theme_name'      => $xtheme_name . __(' Pro', 'go-portfolio'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/go-portfolio-pro/',
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'go-portfolio'), 'Go Portfolio Pro'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'go-portfolio'),
						'description' => esc_html__('Go Portfolio \'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'go-portfolio'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'go-portfolio'),
						'description' => esc_html__('Go Portfolio makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'go-portfolio'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'go-portfolio'),
						'description' => esc_html__('Go Portfolio gives you extra slider feature. You can create awesome home slider in this theme.', 'go-portfolio'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'go-portfolio'),
						'description' => esc_html__('Go Portfolio comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'go-portfolio'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Auto Set-up Feature', 'go-portfolio'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'go-portfolio'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'go-portfolio'),
						'description' => esc_html__('Go Portfolio gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'go-portfolio'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'go-portfolio'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'go-portfolio'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Extra Drag and drop support', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advanced Portfolio Filter', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Testimonial Carousel', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Diffrent Style Blog', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Pro Service Section', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Animation Home Text', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'go-portfolio'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'go-portfolio'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'go-portfolio'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),

					array(
						'title'       => esc_html__('Premium Support and Assistance', 'go-portfolio'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'go-portfolio'),
						'description' => esc_html__('You can easily remove the Theme: Go Portfolio by Go Portfolio copyright from the footer area and make the theme yours from start to finish.', 'go-portfolio'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

		);

		go_portfolio_About::init($config);
	}

endif;

add_action('after_setup_theme', 'go_portfolio_about_setup');

/**
 * Pro notice text
 *
 */
function go_portfolio_pnotice_output()
{
?>
	<div class="mgadin-hero">
		<div class="mge-info-content">
			<div class="mge-info-hello">
				<?php
				$current_theme = wp_get_theme();
				$current_theme_name = $current_theme->get('Name');
				$current_user = wp_get_current_user();

				$demo_link = esc_url('https://wpthemespace.com/product/go-portfolio-pro/');
				$pro_link = esc_url('https://wpthemespace.com/product/go-portfolio-pro/?add-to-cart=9915');


				esc_html_e('Hello, ', 'go-portfolio');
				echo esc_html($current_user->display_name);
				?>

				<?php esc_html_e('👋🏻', 'go-portfolio'); ?>
			</div>
			<div class="mge-info-desc">
				<div><?php printf(esc_html__('Attention, don\'t miss out Pro version! 🚨 Upgrade to Go Portfolio Pro today and enjoy SEO-friendly and lightweight design, lightning-fast speed optimization, more secure, premade demos, effortless one-click demo imports, and exclusive custom Elementor premium widgets. With the pro version, you can take your website to the next level and truly stand out from the competition.', 'go-portfolio'), $current_theme_name); ?></div>
				<div class="mge-offer"><?php printf(esc_html__('Don\'t miss out on these incredible features - upgrade to Go Portfolio Pro now! ', 'go-portfolio'), $current_theme_name); ?></div>
			</div>
			<div class="mge-info-actions">
				<a href="<?php echo esc_url($pro_link); ?>" target="_blank" class="button button-primary upgrade-btn">
					<?php esc_html_e('Upgrade Pro', 'go-portfolio'); ?>
				</a>
				<a href="<?php echo esc_url($demo_link); ?>" target="_blank" class="button button-primary demo-btn">
					<?php esc_html_e('View Details', 'go-portfolio'); ?>
				</a>
				<button class="button button-info btnend"><?php esc_html_e('Dismiss this notice', 'go-portfolio') ?></button>
			</div>

		</div>

	</div>
<?php
}
//Admin notice 
function go_portfolio_new_optins_texts()
{
	$hide_date = get_option('go_portfolio_infohide');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 25) {
			return;
		}
	}
?>
	<div class="mgadin-notice notice notice-info mgadin-theme-dashboard mgadin-theme-dashboard-notice mge is-dismissible meis-dismissible">
		<?php go_portfolio_pnotice_output(); ?>
	</div>
<?php

}
add_action('admin_notices', 'go_portfolio_new_optins_texts');

function go_portfolio_new_optins_texts_init()
{
	if (isset($_GET['xbnotice']) && $_GET['xbnotice'] == 1) {
		update_option('go_portfolio_infohide', current_time('mysql'));
	}
}
add_action('init', 'go_portfolio_new_optins_texts_init');
