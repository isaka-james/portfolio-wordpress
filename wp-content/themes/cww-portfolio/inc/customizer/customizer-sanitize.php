<?php
/**
* Customizer sanitize functions
* 
* @package CWW Portfolio
* 
* 
*/





/**
* sanitize select
*
*/
if( ! function_exists('cww_portfolio_sanitize_select')):
	function cww_portfolio_sanitize_select( $input, $setting ) {
		// Ensure input is a slug.
		$input = sanitize_key( $input );
		
		// Get list of choices from the control associated with the setting.
		$choices = $setting->manager->get_control( $setting->id )->choices;
		
		// If the input is a valid key, return it; otherwise, return the default.
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
endif;

/** Checkbox Sanitization Callback 
 * 
 * Sanitization callback for 'checkbox' type controls.
 * This callback sanitizes $input as a Boolean value, either
 * TRUE or FALSE.
 */
if( ! function_exists('cww_portfolio_sanitize_checkbox')):
	function cww_portfolio_sanitize_checkbox( $input ) {
		// Boolean check 
		return ( ( isset( $input ) && true == $input ) ? true : false );
	}
endif;


/**
 * Color sanitization callback
 *
 */
if( ! function_exists('cww_portfolio_sanitize_color')):
	function cww_portfolio_sanitize_color( $color ) {
	    if ( empty( $color ) || is_array( $color ) ) {
	        return '';
	    }

	    // If string does not start with 'rgba', then treat as hex.
		// sanitize the hex color and finally convert hex to rgba
	    if ( false === strpos( $color, 'rgba' ) ) {
	        return sanitize_hex_color( $color );
	    }

	    // By now we know the string is formatted as an rgba color so we need to further sanitize it.
	    $color = str_replace( ' ', '', $color );
	    sscanf( $color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );

	    return 'rgba('.$red.','.$green.','.$blue.','.$alpha.')';
	}
endif;


/**
 * Number sanitization callback
 *
 */
function cww_portfolio_sanitize_number( $val ) {
	return is_numeric( $val ) ? $val : 0;
}