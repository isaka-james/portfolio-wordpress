<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CWW Portfolio
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php do_action('add_before_single_post_content'); ?>

	<header class="entry-header">
		<?php do_action('add_post_multiple_category'); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<div class="entry-meta">
			<?php
			cww_portfolio_posted_by();
			cww_portfolio_posted_on();
			cww_portfolio_post_comment_count();
			?>
		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	
		<?php cww_portfolio_post_thumbnail(); ?>
	

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cww-portfolio' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cww-portfolio' ),
			'after'  => '</div>',
		) );
		?>

	<?php do_action('add_after_single_post_content'); ?>
	
	</div><!-- .entry-content -->
	


	<footer class="entry-footer">
		<?php //add_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php 
do_action('add_related_posts');