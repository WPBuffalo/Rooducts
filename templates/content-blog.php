		<article <?php post_class(); ?>>
		  <header>
		    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<p class="entry-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>

		  </header>
		  <div class="entry-summary">
		    <?php the_excerpt(); ?>
		  </div>
		</article>
