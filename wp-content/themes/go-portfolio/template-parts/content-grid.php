<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Go Portfolio
 */
$go_portfolio_categories = get_the_category();
if ($go_portfolio_categories) {
	$go_portfolio_category = $go_portfolio_categories[mt_rand(0, count($go_portfolio_categories) - 1)];
} else {
	$go_portfolio_category = '';
}
?>
<div class="col-lg-4 mb-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('go-portfolio-list-item'); ?>>
		<div class="grid-blog-item p-3">
			<?php if (has_post_thumbnail()) : ?>
				<div class="grid-img">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			<?php endif; ?>
			<div class="grid-deatls pb-3">
				<div class="row pt-3">
					<?php if ('post' === get_post_type() && !empty($go_portfolio_category)) : ?>
						<div class="col-md-6 grid-meta">
							<a class="blog-categrory" href="<?php echo esc_url(get_category_link($go_portfolio_category)); ?>"><?php echo esc_html($go_portfolio_category->name); ?></a>
						</div>
					<?php endif; ?>
					<div class="col-md-6 me-auto text-end grid-meta">
						<p><?php echo esc_html(get_the_date('M j Y')); ?></p>
					</div>
				</div>

				<?php the_title('<h2 class="entry-title grid-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
				<?php the_excerpt(); ?>

				<a class="read-more-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More ', 'go-portfolio'); ?></a>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>