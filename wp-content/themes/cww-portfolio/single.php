<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CWW_Portfolio
 */

get_header();

wp_print_styles( array( 'cww-portfolio-single-blog' ) );
?>

<div id="primary" class="content-area container-wide">
		<main id="main" class="site-main">
		<div class="container inner-container">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'post' );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'cww-portfolio' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'cww-portfolio' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->
</div>

<?php
get_footer();
