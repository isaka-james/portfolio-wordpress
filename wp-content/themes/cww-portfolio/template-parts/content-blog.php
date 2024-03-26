<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CWW Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php cww_portfolio_post_thumbnail(); ?>
	<div class="content-wrapp">
		<header class="post-header">
			
			<div class="entry-meta">
				<?php
				cww_portfolio_posted_by();
				cww_portfolio_posted_on();
				cww_portfolio_post_comment_count();
				?>
			</div><!-- .entry-meta -->
			<div class="single-separator"></div>
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
				
		</header><!-- .entry-header -->


		<div class="entry-content">
			<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cww-portfolio' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<div class="add-readmore-btn-wrapp">
			<a href="<?php the_permalink();?>" class="read-more">
				<?php esc_html_e('Continue Reading','cww-portfolio'); ?>
			</a>

		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
