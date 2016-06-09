<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
?>

<?php if ( have_posts() ): ?>

	<ol class="product-list">
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<?php the_post_thumbnail( 'medium' ); ?>
				<div class="padder">
					<h2 class="product-title-sm"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a href="#" class="button">More Info</a>
				</div>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
	<?php else: ?>
	<h2>No posts to display</h2>

<?php endif; ?>
