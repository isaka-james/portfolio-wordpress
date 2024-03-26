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
<article id="post-<?php the_ID(); ?>" <?php post_class('go-portfolio-list-item'); ?>>
	<div class="go-portfolio-item go-portfolio-text-list shadow-sm mb-5 <?php if (has_post_thumbnail()) : ?>has-thumbnail<?php endif; ?>">
		<div class="row">
			<?php if (has_post_thumbnail()) : ?>
				<div class="col-lg-6">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium_large'); ?>
					</a>
				</div>
				<div class="col-lg-6">
				<?php else : ?>
					<div class="col-lg-12 pb-3 pt-3">
					<?php endif; ?>
					<div class="go-portfolio-text p-3">
						<div class="go-portfolio-text-inner">
							<div class="grid-head">
								<span class="ghead-meta list-meta">
									<?php if ('post' === get_post_type() && !empty($go_portfolio_category)) : ?>
										<a href="<?php echo esc_url(get_category_link($go_portfolio_category)); ?>"><?php echo esc_html($go_portfolio_category->name . ' / '); ?></a>
									<?php endif; ?>
									<?php echo esc_html(get_the_date()); ?>
								</span>
								<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
								<?php if ('post' === get_post_type()) :
								?>
									<div class="list-meta list-author">
										<?php go_portfolio_posted_by(); ?>
									</div><!-- .entry-meta -->
								<?php endif; ?>
								<?php the_excerpt(); ?>
							</div>
							<a class="go-portfolio-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More ', 'go-portfolio'); ?></a>
						</div>
					</div>
					</div>
				</div>

		</div>
</article><!-- #post-<?php the_ID(); ?> -->