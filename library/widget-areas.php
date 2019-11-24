<?php
/**
 * Register widget areas
 *
 * @package Davtrax
 * @since Davtrax 1.0.0
 */

if ( ! function_exists( 'davtrax_sidebar_widgets' ) ) :
	function davtrax_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'davtrax' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'davtrax' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'davtrax' ),
				'description'   => __( 'Drag widgets to this footer container', 'davtrax' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
	}

	add_action( 'widgets_init', 'davtrax_sidebar_widgets' );
endif;
