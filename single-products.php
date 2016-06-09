<?php
/**
 * The Template for displaying all single posts
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
		<h2><?php the_title(); ?></h2>

		<?php the_post_thumbnail( 'large' ); ?>

		<?php the_content(); ?>

		<?php echo do_shortcode('[wp_cart_button name="' . get_the_title() . '"  price="' . get_field('price') . '"]'); ?>

		<?php if( have_rows('q_and_a') ): ?>

			<dl class="q_and_a">

				<h4>Frequently Asked Questions</h4>

				<?php while( have_rows('q_and_a') ): the_row(); ?>

					<dd class="question">
						<em>Q:</em> <?php the_sub_field('question'); ?>
					</dd>
					<dt class="answer">
						<em>A:</em> <?php the_sub_field('answer'); ?>
					</dt>

				<?php endwhile; ?>

			</dl>

		<?php endif; ?>

	</article>
	<aside class="comments">
		<span class="comments-link">
			<?php echo comments_popup_link( esc_html__( 'Leave a comment', '_s' ), esc_html__( '1 Comment', '_s' ), esc_html__( '% Comments', '_s' ) ); ?>
		</span>
		<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</aside>

<?php endwhile; ?>
