<?php
/*
Template Name: About
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="grid-container">
		<main class="grid-x">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/front/front-who' ); ?>
			<?php endwhile; ?>
		</main>
</div>
<?php
get_footer();
