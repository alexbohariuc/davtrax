<div class="front-featured">
	<img class="front-featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
	<div class="front-featured-content">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x large-padding-collapse large-margin-collapse">
				<div class="cell small-12 medium-5">
					<div class="front-featured-content-title">
						<h1><?php the_field('featured_title'); ?></h1>
					</div>
					<div class="front-featured-content-subtitle">
						<?php the_field('featured_subtitle'); ?>
					</div>
					<a class="button button-primary" href="/contact">cere o ofertă</a>
				</div>
			</div>
		</div>
	</div>
</div>

