<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if (has_post_thumbnail($post->ID)) : ?>
		<div class="featured-hero-product">
			<img class="featured-hero-product" role="banner"
					 data-interchange="[<?php the_post_thumbnail_url('featured-small'); ?>, small], [<?php the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php the_post_thumbnail_url('featured-large'); ?>, large], [<?php the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
<div class="featured-hero-product-overlayer"></div>
			<div class="featured-hero-product-content">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">

					<div class="main-title cell small-12">
						<h1><?php the_title(); ?></h1>
					</div>

					<div class="featured-hero-product-content-properties cell small-12">
						<div class="grid-x">
							<?php
							$field = get_field_object('product_applications');
							$properties = $field[value];
							foreach ($properties as $property) : ?>
								<div class="featured-hero-product-content-properties-property cell small-6 medium-3">
									<div class="grid-x grid-margin-x">
										<div class="cell small-3 align-middle">
											<img
												src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/product-properties/<?php echo $property[value]; ?>.svg">

										</div>
										<div class="cell small-9">
											<?php echo $property[label]; ?>
										</div>

									</div>

								</div>
							<?php endforeach; ?>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

<?php endif;
