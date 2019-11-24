<?php

if ( ! function_exists( 'davtrax_gutenberg_support' ) ) :
	function davtrax_gutenberg_support() {

    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary Color', 'davtrax' ),
            'slug' => 'primary',
            'color' => '#1779ba',
        ),
        array(
            'name' => __( 'Secondary Color', 'davtrax' ),
            'slug' => 'secondary',
            'color' => '#767676',
        ),
        array(
            'name' => __( 'Success Color', 'davtrax' ),
            'slug' => 'success',
            'color' => '#3adb76',
        ),
        array(
            'name' => __( 'Warning color', 'davtrax' ),
            'slug' => 'warning',
            'color' => '#ffae00',
        ),
        array(
            'name' => __( 'Alert color', 'davtrax' ),
            'slug' => 'alert',
            'color' => '#cc4b37',
        )
    ) );

	}

	add_action( 'after_setup_theme', 'davtrax_gutenberg_support' );
endif;
