<?php
/**
 * The template for displaying archive pages
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

			if ( is_home() && ! is_front_page() ) :
				?>
				<header class="entry-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
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
