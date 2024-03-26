<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Go Portfolio
 */

?>

<footer id="colophon" class="site-footer pt-3 pb-3">
	<div class="container">
		<div class="site-info text-center">
			<a href="<?php echo esc_url(__('https://isaka-james.vercel.app/', 'go-portfolio')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf(esc_html__('masterplan |   %s', 'go-portfolio'), 'isaka-james');
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('2024.', 'go-portfolio'), '<a href="https://isaka-james.vercel.app/">Isaka James</a>', 'isaka-james');
			?>

		</div><!-- .site-info -->
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
