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
				<div class="top-bar-left cell shrink">
					<div class="grid-x grid-margin-x">
						<div class="cell shrink top-bar-left-item top-bar-left-phone">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M15.6413 12.6266L13.1704 10.1554C12.6782 9.6652 11.8632 9.68009 11.3538 10.1896L10.109 11.4342C10.0303 11.3908 9.94891 11.3456 9.86332 11.2975C9.07719 10.8619 8.00124 10.2649 6.86903 9.13189C5.73347 7.99647 5.1359 6.91886 4.69898 6.13223C4.65288 6.04889 4.6087 5.96854 4.56508 5.89224L5.40057 5.05799L5.81133 4.64672C6.32143 4.13649 6.33549 3.32168 5.84448 2.83006L3.37353 0.358561C2.88251 -0.132366 2.0671 -0.117473 1.55701 0.39276L0.860608 1.09316L0.879638 1.11205C0.646127 1.41001 0.450997 1.75366 0.305788 2.12424C0.171932 2.47699 0.0885942 2.81361 0.0504876 3.15091C-0.275785 5.85579 0.960265 8.32784 4.31474 11.6824C8.95165 16.319 12.6884 15.9687 12.8496 15.9516C13.2007 15.9096 13.5372 15.8257 13.8791 15.6929C14.2465 15.5494 14.5899 15.3546 14.8877 15.1216L14.9029 15.1351L15.6084 14.4442C16.1174 13.9341 16.1321 13.119 15.6413 12.6266Z"
									fill="#E64B4D"/>
							</svg>
							<a href="tel:0799941300">0799 941 300</a> / <a href="tel:0745357216">0745 357 216</a> / <a
								href="tel:0744511113">0744 511 113</a>
						</div>
						<div class="cell shrink top-bar-left-item top-bar-left-email">
							<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M1.53568 3.87498C1.73808 4.0178 2.34818 4.44199 3.36601 5.14731C4.38388 5.85264 5.16364 6.39572 5.70531 6.77659C5.76482 6.81834 5.89126 6.90909 6.08468 7.04898C6.27814 7.18895 6.43888 7.30207 6.56678 7.38835C6.69478 7.4746 6.84952 7.57136 7.03115 7.67847C7.21272 7.78548 7.38388 7.86598 7.54459 7.91927C7.70533 7.973 7.85413 7.99961 7.99101 7.99961H7.99998H8.00899C8.14587 7.99961 8.29473 7.97296 8.45547 7.91927C8.61612 7.86598 8.78743 7.78539 8.96885 7.67847C9.15035 7.57123 9.30509 7.47457 9.43309 7.38835C9.56109 7.30207 9.72171 7.18895 9.91522 7.04898C10.1086 6.90897 10.2352 6.81834 10.2947 6.77659C10.8422 6.39572 12.2352 5.42842 14.4732 3.87479C14.9077 3.57135 15.2707 3.20521 15.5624 2.77662C15.8542 2.34821 16 1.89879 16 1.4286C16 1.03569 15.8585 0.699353 15.5758 0.419618C15.293 0.139821 14.9581 0 14.5714 0H1.42851C0.970207 0 0.617512 0.154738 0.370489 0.464213C0.123496 0.773751 0 1.16066 0 1.6249C0 1.99989 0.163744 2.40625 0.491076 2.84373C0.818377 3.28123 1.16669 3.62502 1.53568 3.87498Z"
									fill="#E64B4D"/>
								<path
									d="M15.107 4.83022C13.1548 6.15153 11.6725 7.1784 10.6607 7.91062C10.3215 8.16052 10.0462 8.3556 9.83485 8.49539C9.62348 8.63527 9.34237 8.77813 8.99111 8.92389C8.63998 9.06987 8.31274 9.14264 8.00912 9.14264H8.00002H7.99104C7.68747 9.14264 7.36005 9.06987 7.00892 8.92389C6.65779 8.77813 6.37649 8.63527 6.16518 8.49539C5.95393 8.3556 5.67861 8.16052 5.33936 7.91062C4.53574 7.32138 3.0566 6.29444 0.901876 4.83022C0.562504 4.60418 0.26191 4.34509 0 4.05347V11.1425C0 11.5356 0.139821 11.8718 0.419618 12.1516C0.699353 12.4314 1.03572 12.5713 1.4286 12.5713H14.5715C14.9643 12.5713 15.3006 12.4314 15.5804 12.1516C15.8602 11.8717 16 11.5357 16 11.1425V4.05347C15.744 4.33905 15.4465 4.59814 15.107 4.83022Z"
									fill="#E64B4D"/>
							</svg>
							<a href="mailto:office@davtrax.com">office@davtrax.com</a>
						</div>
						<div class="cell shrink top-bar-left-item top-bar-left-contact">
							<a href="/contact">CONTACT</a>
						</div>
						<div class="cell shrink top-bar-left-item top-bar-left-lang">
							<?php do_action('wpml_add_language_selector'); ?>
						</div>
						<div class="cell shrink top-bar-left-item top-bar-left-search">
							<a href="#"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.676 14.1136L12.2945 10.7315C13.1164 9.58825 13.5682 8.22213 13.5682 6.78412C13.5682 4.97277 12.8631 3.26927 11.5805 1.98778C10.3006 0.70684 8.59602 0 6.78356 0C4.97166 0 3.26761 0.705181 1.98667 1.98778C0.705734 3.26817 0 4.97222 0 6.78412C0 8.59602 0.705181 10.2995 1.98667 11.5816C3.26761 12.8625 4.97111 13.5693 6.78356 13.5693C8.22103 13.5693 9.58603 13.1197 10.7304 12.2956L14.1119 15.6777C14.3287 15.8939 14.6108 16.0018 14.894 16.0018C15.1777 16.0018 15.4603 15.8939 15.676 15.6777C16.108 15.2452 16.108 14.5455 15.676 14.1136ZM3.55135 10.0169C2.68743 9.15297 2.21233 8.00422 2.21233 6.78356C2.21233 5.56291 2.68743 4.41526 3.55135 3.55135C4.41471 2.68743 5.56236 2.21178 6.78356 2.21178C8.00477 2.21178 9.15297 2.68743 10.0163 3.55135C10.8802 4.41526 11.3559 5.56346 11.3559 6.78412C11.3559 8.00477 10.8808 9.15297 10.0163 10.0174C9.15242 10.8814 8.00532 11.3559 6.78356 11.3559C5.5618 11.3559 4.4136 10.8802 3.55135 10.0169Z" fill="#293B4E"/>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-navigation-secondary">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x large-margin-collapse large-padding-collapse">
					<div class="top-bar-right cell auto">
						<?php davtrax_top_bar_r(); ?>

						<?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
							<?php get_template_part('template-parts/mobile-top-bar'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</nav>

</header>
