<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 */

 // Testing
?>

	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', get_post_format()); ?>
	<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1) : ?>
	  <nav class="post-nav">
	    <ul class="pager">
	      <li class="previous"><?php next_posts_link(__('&larr; Older posts')); ?></li>
	      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;')); ?></li>
	    </ul>
	  </nav>
	<?php endif; ?>
