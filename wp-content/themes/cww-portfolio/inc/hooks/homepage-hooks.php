<?php
/**
* Functions & definations for homepage
*
*
*/

add_action('cww_portfolio_social_icons','cww_portfolio_social_icons');
if( ! function_exists('cww_portfolio_social_icons')):
	function cww_portfolio_social_icons(){
		
		$default 				= cww_portfolio_customizer_defaults();
		$cww_icon_fb 			= get_theme_mod( 'cww_icon_fb', $default['cww_icon_fb'] );
		$cww_icon_insta 		= get_theme_mod( 'cww_icon_insta', $default['cww_icon_insta'] );
		$cww_icon_twitter       = get_theme_mod( 'cww_icon_twitter', $default['cww_icon_twitter'] );
		$cww_icon_lnkedin 		= get_theme_mod( 'cww_icon_lnkedin', $default['cww_icon_lnkedin'] );

		if( $cww_icon_fb || $cww_icon_insta || $cww_icon_twitter || $cww_icon_lnkedin ){

			?>
			<div class="social-icon-wrapp">
				
				<?php if($cww_icon_fb){ ?>
				<a href="<?php echo esc_url($cww_icon_fb) ?>">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<?php } ?>

				<?php if($cww_icon_insta){ ?>
				<a href="<?php echo esc_url($cww_icon_insta) ?>">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<?php } ?>

				<?php if($cww_icon_twitter){ ?>
				<a href="<?php echo esc_url($cww_icon_twitter) ?>">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<?php } ?>

				<?php if($cww_icon_lnkedin){ ?>
				<a href="<?php echo esc_url($cww_icon_lnkedin) ?>">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<?php } ?>
			</div>
		<?php } 
		 
	}
endif;

//companion plugin is needed for displaying customizer homepage
if( ! class_exists('CWW_Companion')){
	return;
}

add_action('cww_portfolio_home','cww_portfolio_banner', 10 );
if( ! function_exists('cww_portfolio_banner')):
	function cww_portfolio_banner(){

		$default 					= cww_portfolio_customizer_defaults();
		
		$cww_banner_image 			= get_theme_mod('cww_banner_image', $default['cww_banner_image']);
		$cww_banner_text_sm 		= get_theme_mod('cww_banner_text_sm', $default['cww_banner_text_sm']);
		$cww_banner_text_lg 		= get_theme_mod('cww_banner_text_lg', $default['cww_banner_text_lg']);
		$cww_banner_text_sm2 		= get_theme_mod( 'cww_banner_text_sm2', $default['cww_banner_text_sm2']);
		$cww_banner_btn_text 		= get_theme_mod( 'cww_banner_btn_text', $default['cww_banner_btn_text']);
		$cww_banner_btn_url 		= get_theme_mod( 'cww_banner_btn_url', $default['cww_banner_btn_url'] );
		$cww_banner_btn_text_sec 	= get_theme_mod( 'cww_banner_btn_text_sec', $default['cww_banner_btn_text_sec'] );
		$cww_banner_btn_url_sec 	= get_theme_mod('cww_banner_btn_url_sec', $default['cww_banner_btn_url_sec'] );

		?>
		<section id="cww-banner-section" class="cww-main-banner">
			<div class="container">
			<div class="animated-bg"></div> 

			<div class="cotent-wrapp-banner cww-flex">
     		<div class="img-wrapp">
				<img src="<?php echo esc_url($cww_banner_image)?>" alt="<?php the_title_attribute()?>">
			</div>
			
			
			<div class="content-wrapp">
				<h5><?php echo esc_html($cww_banner_text_sm); ?></h5>
				<h2><?php echo esc_html($cww_banner_text_lg);?></h2>
				<p><?php echo esc_html($cww_banner_text_sm2);?></p>

				<div class="button-wrapp cww-flex">
					<div class="btn-primary">
						<a href="<?php echo esc_url($cww_banner_btn_url)?>"> 
							<span><?php echo esc_html($cww_banner_btn_text); ?> </span>
						</a>
					</div>
					<div class="btn-secondary">
						<a href="<?php echo esc_url($cww_banner_btn_url_sec)?>" class="cww-flex">
						 <span><?php echo esc_html($cww_banner_btn_text_sec); ?> </span>
						 <?php echo cww_companion_get_icon_svg( 'arrow_down',14 ); ?>
						</a>
					</div>
				</div>

			</div>

			</div>
			

			<div class="bottom-style">
				<?php do_action('cww_portfolio_social_icons'); ?>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400.6 1226.4" enable-background="new 0 0 1400.6 1226.4">
		            <path fill="currentColor" d="M1384.4,488c-49.2-80.5-218.1-104.6-341.5-187.7C920.4,218,845.3,76.7,731.8,24C618.3-27.9,466.3,8.8,342,91    C217.8,173.3,120.4,301.1,59.6,449.5C-0.3,597.9-23.6,766.9,30.1,905.4c52.7,138.6,182.4,246.7,318.2,292.3    c135.9,46.5,278,29.5,397.8-1.8c119.8-32.2,216.3-78.7,303-141.2c86.7-61.7,163.6-137.7,238.7-244C1362,704.3,1433.6,568.4,1384.4,488z"></path>
		        </svg>
			</div>
		</div>
		</section>
		<?php 
	}
endif;





/**
* About Section
*
*/
add_action('cww_portfolio_home','cww_portfolio_about', 20 );
if( ! function_exists('cww_portfolio_about')):
	function cww_portfolio_about(){

		$default 						= cww_portfolio_customizer_defaults();
		$cww_about_enable           	= get_theme_mod('cww_about_enable', $default['cww_about_enable']);
		$cww_about_title 				= get_theme_mod('cww_about_title', $default['cww_about_title']);
		$cww_about_sub_title 			= get_theme_mod('cww_about_sub_title', $default['cww_about_sub_title']);
		$cww_about_image 				= get_theme_mod('cww_about_image', $default['cww_about_image']);
		$customizer_page_editor 		= get_theme_mod('customizer_page_editor');
		$cww_about_counter_value_first 	= get_theme_mod('cww_about_counter_value_first', $default['cww_about_counter_value_first']);
		$cww_about_counter_text_first  	= get_theme_mod('cww_about_counter_text_first', $default['cww_about_counter_text_first']);
		$cww_about_counter_value_sec 	= get_theme_mod('cww_about_counter_value_sec', $default['cww_about_counter_value_sec']);
		$cww_about_counter_text_sec 	= get_theme_mod('cww_about_counter_text_sec', $default['cww_about_counter_text_sec']);

		wp_print_scripts( array( 'jquery-waypoints','jquery-counterup' ) );
		if( $cww_about_enable == 0 ){
            return;
        }

		

		?>
		<section id="cww-about-section" class="cww-about-section">
			<div class="container">
				<div class="left-wrapp">
					<div class="img-wrapp">
						<img src="<?php echo esc_url($cww_about_image)?>" alt="<?php the_title_attribute()?>">
					</div>
				</div>
				<div class="right-wrapp">
					<div class="section-title-wrapp">
						<h3><?php echo esc_html($cww_about_title); ?></h3>
						<p><?php echo esc_html($cww_about_sub_title); ?></p>
					</div>
					<div class="desc-wrapp">
						<?php echo wp_kses_post($customizer_page_editor); ?>
					</div>
					<div class="counter-wrapp cww-flex">
						<?php if($cww_about_counter_value_first):?>
						<div class="count-item-wrapp">
							<div class="count-val"><?php echo esc_html($cww_about_counter_value_first); ?></div>
							<p><?php echo esc_html($cww_about_counter_text_first); ?></p>
						</div>
						<?php endif; ?>

						<?php if($cww_about_counter_value_sec): ?>
						<div class="count-item-wrapp">
							<div class="count-val"><?php echo esc_html($cww_about_counter_value_sec); ?></div>
							<p><?php echo esc_html($cww_about_counter_text_sec); ?></p>
						</div>
					<?php endif;?>

					</div>
				</div>
			</div>
		</section>
		<?php
	}
endif;


/**
* Service Section
*
*/
add_action('cww_portfolio_home','cww_portfolio_service', 40 );

if( ! function_exists('cww_portfolio_service')):
	function cww_portfolio_service(){

		$default 						= cww_portfolio_customizer_defaults();
		$cww_service_enable         	= get_theme_mod('cww_service_enable',$default['cww_service_enable']);
		$cww_service_title 				= get_theme_mod('cww_service_title', $default['cww_service_title']);
		$cww_service_sub_title 			= get_theme_mod('cww_service_sub_title', $default['cww_service_sub_title']);
		$cww_service_features 			= get_theme_mod('cww_service_features');
		$cww_service_features 			= json_decode($cww_service_features);
		
		if( $cww_service_enable == 0 ){
            return;
        }
		?>
		<section id="cww-service-section" class="cww-service-section">
			<div class="container">
				<div class="service-title-wrapper">
				<div class="section-title-wrapp">
					<h3><?php echo esc_html($cww_service_title); ?></h3>
					<p><?php echo esc_html($cww_service_sub_title); ?></p>
				</div>
				</div>

				<?php if( $cww_service_features ): ?>
				<div class="service-wrapper-outer cww-flex">
					<?php 
					$counter = 1;
					foreach( $cww_service_features as $cww_service_feature ){
						$service_icon = $cww_service_feature->service_icon;
						$service_text = $cww_service_feature->service_text;
						$service_desc = $cww_service_feature->service_desc;

						?>
						<div class="service-wrapp">
							<div class="service-inner-wrapp">
								<div class="counter">0<?php echo esc_html($counter); ?></div>
								<div class="icon"><i class="fa <?php echo esc_attr($service_icon); ?>"></i></div>
								
								<h4><?php echo esc_html($service_text); ?></h4>
								<p><?php echo wp_kses_post($service_desc); ?></p>	
								
							</div>

						</div>
						<?php
						$counter++; 
					}
					 ?>
					
				</div>
				<?php endif; ?>
			</div>
		</section>
		<?php 
	}
endif;

/**
* Portfolio(gallery)  section
*
*/
add_action('cww_portfolio_home','cww_portfolio_gallery',50 );
if( ! function_exists('cww_portfolio_gallery')):
	function cww_portfolio_gallery(){

		$default 						= cww_portfolio_customizer_defaults();
		$cww_portfolio_enable       	= get_theme_mod('cww_portfolio_enable', $default['cww_portfolio_enable']);
		$cww_portfolio_post 			= get_theme_mod('cww_portfolio_post', $default['cww_portfolio_post'] );
		$cww_portfolio_title 			= get_theme_mod('cww_portfolio_title', $default['cww_portfolio_title'] );
		$cww_portfolio_sub_title 		= get_theme_mod('cww_portfolio_sub_title', $default['cww_portfolio_sub_title'] );

		if( $cww_portfolio_enable == 0 ){
            return;
        }

		if( ! $cww_portfolio_post ){
			return;
		}
		
		wp_print_styles( array( 'magnific-popup' ) );
		wp_print_scripts( array( 'jquery-magnific-popup' ) );

		?>
		<section id="cww-portfolio-section" class="cww-portfolio-section gallery">
			<div class="container">
				<div class="section-titles-wrapper">
				<div class="section-title-wrapp">
					<h3><?php echo esc_html($cww_portfolio_title); ?></h3>
					<p><?php echo esc_html($cww_portfolio_sub_title); ?></p>
				</div>
				</div>
				<?php 
				$args = array(
						        'post_type' => 'page',
						        'page_id' 		=> $cww_portfolio_post
						    );
						    
			    $qry = new WP_Query( $args );
			    if( $qry->have_posts() ):
				    while( $qry->have_posts() ) {
				      $qry->the_post();
				      the_content();
				  	}
				  	wp_reset_postdata();
				endif;

				?>
			</div>
		</section>
		<?php 
	}
endif;


/**
* CTA section
*
*/
add_action('cww_portfolio_home','cww_portfolio_cta', 30);
if( ! function_exists('cww_portfolio_cta')):
	function cww_portfolio_cta(){

		$default 			= cww_portfolio_customizer_defaults();
		$cww_cta_enable     = get_theme_mod('cww_cta_enable', $default['cww_cta_enable']);
		$cww_cta_bg 		= get_theme_mod('cww_cta_bg');
		$cww_cta_title 		= get_theme_mod('cww_cta_title');
		$cww_cta_sub_title 	= get_theme_mod('cww_cta_sub_title');
		$cww_cta_btn_text 	= get_theme_mod('cww_cta_btn_text');
		$cww_cta_btn_url 	= get_theme_mod('cww_cta_btn_url');

		if( $cww_cta_enable == 0 ){
            return;
        }

		wp_print_scripts( array( 'jarallax' ) );

		?>
		<section id="cww-cta-section" class="cww-cta-section" style="background-image:url(<?php echo esc_url($cww_cta_bg)?>)">
			<div class="container">
				<h3><?php echo esc_html($cww_cta_title); ?></h3>
				<div class="subtitle"><?php echo esc_html($cww_cta_sub_title); ?></div>

				<div class="btn-wrapper">
					<a href="<?php echo esc_url($cww_cta_btn_url); ?>">
						<span>
						<?php echo esc_html($cww_cta_btn_text);?>
						</span>
					</a>
				</div>
			</div>
		</section>
		<?php 
	}
endif;


/**
* Blog section
*
*
*/
add_action('cww_portfolio_home','cww_portfolio_blog',60);
if( ! function_exists('cww_portfolio_blog')):
	function cww_portfolio_blog(){

		$default 					= cww_portfolio_customizer_defaults();
		$cww_blog_enable            = get_theme_mod('cww_blog_enable',$default['cww_blog_enable']);
		$cww_blog_title 			= get_theme_mod('cww_blog_title');
		$cww_blog_sub_title 		= get_theme_mod('cww_blog_sub_title');
		$cww_blog_excerpts 			= get_theme_mod('cww_blog_excerpts');
		$cww_blog_number 			= empty( get_theme_mod('cww_blog_number') ) ? 3 : get_theme_mod('cww_blog_number');
		$cww_blog_offsets 			= empty( get_theme_mod('cww_blog_offsets') ) ? 0 : get_theme_mod('cww_blog_offsets');


        if( $cww_blog_enable == 0 ){
            return;
        }


		?>
		<section id="cww-blog-section" class="cww-blog-section">
			<div class="container">
				<div class="section-titles-wrapper">
				<div class="section-title-wrapp">
					<h3><?php echo esc_html($cww_blog_title); ?></h3>
					<p><?php echo esc_html($cww_blog_sub_title); ?></p>
				</div>
				</div>

			<div class="blogs-wrapper cww-flex">
			<?php 
			
			    $args = array(
			        'post_type' 			=> 'post',
			        'posts_per_page' 		=> absint($cww_blog_number),
			        'offset' 				=> absint($cww_blog_offsets),
			        'ignore_sticky_posts' 	=> true
			    );
			    $qry = new WP_Query( $args );

			    if( $qry->have_posts() ) :
				    while( $qry->have_posts() ) {
				      $qry->the_post();

				      $image_path = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large', true );
				      ?>
				      <div class="blog-outer-wrapp">
				      <div class="blog-inner-wrapp">
				      	<div class="img-wrapp">
				      		<a href="<?php the_permalink(); ?>" class="post-thumbnail">
				      		<img src="<?php echo esc_url($image_path[0]); ?>" alt="<?php the_title_attribute(); ?>">
				      		</a>
				      	</div>
				      	<div class="post-content">
					      	<div class="entry-meta">
								<?php
								cww_portfolio_posted_on();
								cww_portfolio_posted_by();
								?>
							</div><!-- .entry-meta -->
							<h3>
								<a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a>
							</h3>
							<?php if($cww_blog_excerpts): ?>
							<p>
								<?php echo cww_portfolio_excerpt_content($cww_blog_excerpts); ?>	
							</p>
							<?php endif; ?>
							
							<div class="read-more-link">
								<a href="<?php the_permalink(); ?>"><?php esc_html_e('Continue Reading','cww-portfolio'); ?></a>
							</div>
						</div>
				      </div>
				      </div>
				      <?php 
				  	}
				  	wp_reset_postdata();
			  	endif;

			     
			 ?>
			 </div>
			 </div>
		</section>
		<?php 
	}
endif;


/**
* Contact Section
*
*/
add_action('cww_portfolio_home','cww_portfolio_contact', 70 );

if( ! function_exists('cww_portfolio_contact')):
	function cww_portfolio_contact(){

		$default 					= cww_portfolio_customizer_defaults();
		$cww_contact_enable         = get_theme_mod('cww_contact_enable', $default['cww_contact_enable']);
		$cww_contact_title 			= get_theme_mod('cww_contact_title');
		$cww_contact_sub_title 		= get_theme_mod('cww_contact_sub_title');
		$cww_contact_shortcode 		= get_theme_mod('cww_contact_shortcode');
		$cww_contact_info_title 	= get_theme_mod('cww_contact_info_title');
		$cww_contact_info_sub_title = get_theme_mod('cww_contact_info_sub_title');
		$cww_contact_address 		= get_theme_mod('cww_contact_address');
		$cww_contact_email 			= get_theme_mod('cww_contact_email');
		$cww_contact_mobile 		= get_theme_mod('cww_contact_mobile');

		if( $cww_contact_enable == 0 ){
            return;
        }
		?>
		<section id="cww-contact-section" class="cww-contact-section">
			<div class="container">
				<div class="section-titles-wrapper">
				<div class="section-title-wrapp">
					<h3><?php echo esc_html($cww_contact_title); ?></h3>
					<p><?php echo esc_html($cww_contact_sub_title); ?></p>
				</div>
				</div>

				<div class="contact-wrapp cww-flex">
					<div class="form-wrapp">
						<?php echo do_shortcode($cww_contact_shortcode); ?>
					</div>
					<div class="address-wrap">
						<h4><?php echo esc_html($cww_contact_info_title); ?></h4>
						<p><?php echo esc_html($cww_contact_info_sub_title); ?></p>

						<div class="address-btm">
							<?php if($cww_contact_address): ?>
							<div class="location-wrapp">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<span><?php echo esc_html($cww_contact_address); ?></span>
							</div>
							<?php endif; ?>

							<?php if ($cww_contact_email): ?>
							<div class="email-wrapp">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<a href="mailto:<?php echo esc_attr($cww_contact_email)?>"><?php echo esc_html($cww_contact_email); ?></a>
							</div>
							<?php endif ?>

							<?php if ($cww_contact_mobile): ?>
							<div class="mob-wrapp">
								<i class="fa fa-mobile" aria-hidden="true"></i>
								<a href="tel:<?php echo esc_attr($cww_contact_mobile)?>"><?php echo esc_html($cww_contact_mobile);?></a>
							</div>
							<?php endif ?>
						</div>
						
					</div>
				</div>

			</div>
		</section>
		<?php
	}
endif;