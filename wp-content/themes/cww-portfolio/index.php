<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CWW_Portfolio
 */

get_header();

wp_print_styles( array( 'cww-portfolio-blog-archive' ) );

?>
	<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container inner-container">

		<?php
		if ( have_posts() ) :

			
			?>
			<div class="inner-blog-wrapp">
			<?php 
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'blog' );

			endwhile;
			?>
			</div>
			<?php 
			cww_portfolio_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
	</main><!-- #main -->
	</div>
<?php

get_footer();
