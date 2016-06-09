<?php
/**
 * The Front-Page Template, that will load on the Homepage
 */
?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="homepage-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

		</article>

	<?php endwhile; ?>
