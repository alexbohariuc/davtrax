<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Davtrax
 * @since Davtrax 1.0.0
 */

get_header(); ?>

	<div class="grid-container">
		<main class="grid-x">
			<div class="cell small-12">
				<div class="main-title">
					<h1>
						<mark>ARTICOLE</mark>
					</h1>
				</div>
			</div>
			<?php if (have_posts()) : ?>

				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content-post'); ?>
				<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<div class="cell small-12">
				<?php
				if (function_exists('davtrax_pagination')) :
					davtrax_pagination();
				elseif (is_paged()) :
					?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'davtrax')); ?></div>
						<div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'davtrax')); ?></div>
					</nav>
				<?php endif; ?>
			</div>
		</main>

	</div>

<?php get_footer();
