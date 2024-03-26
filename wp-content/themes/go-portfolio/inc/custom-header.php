<?php

/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Go Portfolio
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses go_portfolio_header_style()
 */
function go_portfolio_custom_header_setup()
{
	add_theme_support(
		'custom-header',
		apply_filters(
			'go_portfolio_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1800,
				'height'             => 250,
				'flex-height'        => true,
			)
		)
	);
}
add_action('after_setup_theme', 'go_portfolio_custom_header_setup');
