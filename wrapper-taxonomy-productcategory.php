<?php
/**
 * Main Wrapper template that handles loading the header footer and sidebar bits to keep other template files less mucked up
 */
?>

<?php get_header( ransom_template_base() ); ?>

	<div id="main" class="content-wrap no-sidebar site-main" role="main">

		<div class="article-wrap">

			<?php include ransom_template_path(); ?>

		</div>

	</div>

<?php get_footer( ransom_template_base() ); ?>
