/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 /**
 * Dynamic Internal/Embedded Style for a Control
 */
function cww_portfolio_dynamic_css( control, style ) {
	control = control.replace( '[', '-' );
	control = control.replace( ']', '' );
	jQuery( 'style#' + control ).remove();

	jQuery( 'head' ).append(
		'<style id="' + control + '">' + style + '</style>'
	);
}



( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );


	/**
	* Header cta button
	*
	*/
	wp.customize( 'cww_header_cta_text', function( value ) {
		value.bind( function( to ) {
			$( '.header-cta-wrapp a span' ).text( to );
		} );
	} );

	wp.customize( 'cww_header_cta_url', function( value ) {
		value.bind( function( to ) {
			$( '.header-cta-wrapp a' ).attr('href', to );
		} );
	} );

	wp.customize( 'cww_header_cta_bg', function( value ) {
		value.bind( function( to ) {
			$( '.header-cta-wrapp a' ).css({
				'background-color': to ,
			});
		} );
	} );
	
	

	//header bg color
	wp.customize( 'cww_header_bg', function( value ) {
		value.bind( function( to ) {
			$( 'header.site-header' ).css({
				'background': to ,
			});
		} );
	} );

	//Menu link color
	wp.customize( 'cww_menu_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a' ).css({
				'color': to ,
			});
		} );
	} );

	
	wp.customize( 'cww_menu_link_color_hover', function( value ) {
		value.bind( function( color ) {
			if (color == '') {
				wp.customize.preview.send( 'refresh' );
			}
			if ( color ) {
				var	dynamicStyle = '.main-navigation a:hover { color: ' + color + '; } ';                
				cww_portfolio_dynamic_css( 'cww_menu_link_color_hover', dynamicStyle );
			}

		} );
	} );


	/**
	* Main Banner 
	*/
	
	wp.customize( 'cww_banner_bg', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner' ).css({
				'background': to ,
			});
		} );
	} );


	wp.customize( 'cww_banner_animated_color', function( value ) {
		value.bind( function( color ) {
			if (color == '') {
				wp.customize.preview.send( 'refresh' );
			}
			if ( color ) {
				var	dynamicStyle = 'section.cww-main-banner .animated-bg { background: ' + color + '; } ';                
				cww_portfolio_dynamic_css( 'cww_banner_animated_color', dynamicStyle );
			}

		} );
	} );


	/**
	 *  Banner contents
	 * 
	 */

	//banner for user image
	wp.customize( 'cww_banner_image', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .img-wrapp img' ).attr('src', to );
		} );
	} );

	
	wp.customize( 'cww_banner_text_sm', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .content-wrapp h5' ).text( to );
		} );
	} );

	wp.customize( 'cww_banner_text_lg', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .content-wrapp h2' ).text( to );
		} );
	} );

	wp.customize( 'cww_banner_text_sm2', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .content-wrapp p' ).text( to );
		} );
	} );

	wp.customize( 'cww_banner_btn_text', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .button-wrapp .btn-primary a span' ).text( to );
		} );
	} );

	wp.customize( 'cww_banner_btn_url', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .button-wrapp .btn-primary a' ).attr('href', to );
		} );
	} );


	wp.customize( 'cww_banner_btn_text_sec', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .button-wrapp .btn-secondary a span' ).text( to );
		} );
	} );

	wp.customize( 'cww_banner_btn_url_sec', function( value ) {
		value.bind( function( to ) {
			$( 'section.cww-main-banner .button-wrapp .btn-secondary a' ).attr('href', to );
		} );
	} );


	/**
	 * About us section 
	 * 
	 * 
	 */
	wp.customize( 'cww_about_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .section-title-wrapp h3' ).text( to );
		} );
	} );

	wp.customize( 'cww_about_sub_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .section-title-wrapp p' ).text( to );
		} );
	} );

	wp.customize( 'cww_about_image', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .img-wrapp img' ).attr('src', to );
		} );
	} );

	wp.customize( 'cww_about_counter_value_first', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .count-item-wrapp:first-child .count-val' ).text( to );
		} );
	} );

	wp.customize( 'cww_about_counter_text_first', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .count-item-wrapp:first-child p' ).text( to );
		} );
	} );

	wp.customize( 'cww_about_counter_value_sec', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .count-item-wrapp:second-child .count-val' ).text( to );
		} );
	} );

	wp.customize( 'cww_about_counter_text_sec', function( value ) {
		value.bind( function( to ) {
			$( '.cww-about-section .count-item-wrapp:second-child p' ).text( to );
		} );
	} );

	/**
	 * Service section 
	 * 
	 * 
	 */
	wp.customize( 'cww_service_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-service-section .section-title-wrapp h3' ).text( to );
		} );
	} );

	wp.customize( 'cww_service_sub_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-service-section .section-title-wrapp p' ).text( to );
		} );
	} ); 


	/**
	 * Portfolio section 
	 * 
	 * 
	 */
	wp.customize( 'cww_portfolio_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-portfolio-section .section-title-wrapp h3' ).text( to );
		} );
	} );

	wp.customize( 'cww_portfolio_sub_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-portfolio-section .section-title-wrapp p' ).text( to );
		} );
	} ); 


	/**
	 * Blog section 
	 * 
	 * 
	 */
	wp.customize( 'cww_blog_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-blog-section .section-title-wrapp h3' ).text( to );
		} );
	} );

	wp.customize( 'cww_blog_sub_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-blog-section .section-title-wrapp p' ).text( to );
		} );
	} ); 




	/**
	 * Contact section 
	 * 
	 * 
	 */
	wp.customize( 'cww_contact_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-contact-section .section-title-wrapp h3' ).text( to );
		} );
	} );

	wp.customize( 'cww_contact_sub_title', function( value ) {
		value.bind( function( to ) {
			$( '.cww-contact-section .section-title-wrapp p' ).text( to );
		} );
	} ); 

}( jQuery ) );
