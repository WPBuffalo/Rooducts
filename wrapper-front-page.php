<?php
/**
 * Main Wrapper template that handles loading the header footer and sidebar bits to keep other template files less mucked up
 */
?>

<?php get_header( ransom_template_base() ); ?>

<?php include ransom_template_path(); ?>

	<div id="main" class="content-wrap content-wrap-home site-main" role="main">

		<div class="browse-vehicles home-ribbon">


			<h4>Browse By Vehicle</h4>
			<ul class="supported-models">

				<?php

					$terms = get_terms("productcategory");


					if( $terms )
					{
						foreach( $terms as $term )
						{
							$value = get_field('show_on_homepage', 'productcategory_'.$term->term_id);
							$image = get_field('product_type_image', $term);
							if( $value == "yes" ) { ?>
								<li>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php echo '<a href="' . get_term_link( $term->slug, 'productcategory' ) . '">' . esc_html( $term->name ) . '</a>';  ?>
								</li>
							<?php }
						}
					}

				 ?>

<!--
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/impreza-15.png" alt="Subaru Impreza 2015+" />
						2015+ Impreza
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/impreza-14.png" alt="Subaru Impreza 2008-2014" />
						2008-14 Impreza
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/brz.png" alt="Subaru BRZ and Toyota FRS" />
						BRZ (and Toyota FRS)
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/350z.png" alt="Nissan 350z" />
						Nissan 350Z
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/rsx.png" alt="Acura RSX" />
						Acura RSX
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/mustang.png" alt="Ford Mustang" />
						Ford Mustang
					</a>
				</li> -->
			</ul>

		</div>

		<div class="featured-cars home-ribbon">

			<h4 class="home-heading">Some of our Customers Cars</h4>

			<?php

				$images = get_field('customer_cars');

				if( $images ): ?>
		    <ul class="featured-cars-list">
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <a href="<?php echo $image['url']; ?>">
		                     <img src="<?php echo $image['sizes']['customer-thumb']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		            </li>
		        <?php endforeach; ?>
		    </ul>
			<?php endif; ?>

		</div>

		<div class="home-news home-ribbon">

			<h4 class="home-heading">RooDucts News</h4>

		</div>


	</div>

<?php get_footer( ransom_template_base() ); ?>
