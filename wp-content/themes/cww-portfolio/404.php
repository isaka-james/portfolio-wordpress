<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CWW_Portfolio
 */

get_header();

wp_print_styles( array( 'cww-portfolio-404' ) );
?>

	<main id="primary" class="site-main">
	<div class="container">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops!', 'cww-portfolio' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'That page can&rsquo;t be found.', 'cww-portfolio' ); ?></p>
			</div><!-- .page-content -->
			<div class="button-wrapp">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span><?php esc_html_e('Go To Home','cww-portfolio'); ?></span>
					
						
					</a>
			</div>
		</section><!-- .error-404 -->
	</div>	
	</main><!-- #main -->

<?php
get_footer();
