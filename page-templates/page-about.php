<?php
/*
Template Name: About
*/

get_header(); ?>


<?php get_template_part('template-parts/featured-image'); ?>
	<div class="front-who">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 large-5 front-who-content">
					<div class="main-title main-title-left">
						<h1>
							<mark><?php the_title();?></mark>
						</h1>
					</div>
				</div>
				<div class="cell small-12 large-4 large-offset-1 front-who-image">
					<img src="<?php the_field('front_who_img'); ?>">
				</div>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<main class="grid-x align-center">
			<div class="cell small-12 medium-8">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
		</main>
	</div>

<?php get_template_part( 'template-parts/front/front-applications' ); ?>

<?php
get_footer();
