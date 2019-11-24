<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package Davtrax
 * @since Davtrax 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
	<?php get_template_part('template-parts/mobile-off-canvas'); ?>
<?php endif; ?>

<header class="site-header" role="banner">
	<div class="site-title-bar title-bar" <?php davtrax_title_bar_responsive_toggle(); ?>>
		<div class="title-bar-left">
			<button aria-label="<?php _e('Main Menu', 'davtrax'); ?>" class="menu-icon" type="button"
							data-toggle="<?php davtrax_mobile_menu_id(); ?>"></button>
			<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				</span>
		</div>
	</div>

	<nav class="site-navigation" role="navigation" id="<?php davtrax_mobile_menu_id(); ?>">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x large-margin-collapse large-padding-collapse align-middle">
				<div class="top-bar-left cell auto">
					<div class="site-desktop-title top-bar-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
								src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo-davtax.png"></a>
					</div>
				</div>
				<div class="cell shrink hide-for-small-only">
					<div class="top-bar-background"></div>
				</div>
				<div class="top-bar-right cell shrink">
					<?php davtrax_top_bar_r(); ?>

					<?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
						<?php get_template_part('template-parts/mobile-top-bar'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</nav>

</header>
