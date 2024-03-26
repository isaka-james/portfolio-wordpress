<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio Canvas
 */

?>

	<footer id="colophon" class="site-footer pt-3 pb-3">
		<div class="container">
			<div class="site-info text-center">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio-canvas' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'portfolio-canvas' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
				<?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf(esc_html__('%1$s by %2$s.', 'portfolio-canvas'), '<a href="https://wpthemespace.com/product/portfolio-canvas/">Portfolio Canvas</a>', 'Wp Theme Space');
                ?>
					
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
