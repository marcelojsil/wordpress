<?php
function crowl_css() {
	$parent_style = 'owlpress-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'crowl-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('crowl-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('owlpress-media-query');

}
add_action( 'wp_enqueue_scripts', 'crowl_css',999);
 

function crowl_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'owlpress_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '151111',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'owlpress_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'crowl_custom_header_setup' );


/**
 * Import Options From Parent Theme
 *
 */
function crowl_parent_theme_options() {
	$owlpress_mods = get_option( 'theme_mods_owlpress' );
	if ( ! empty( $owlpress_mods ) ) {
		foreach ( $owlpress_mods as $owlpress_mod_k => $owlpress_mod_v ) {
			set_theme_mod( $owlpress_mod_k, $owlpress_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'crowl_parent_theme_options' );


require( get_stylesheet_directory() . '/inc/customizer/customizer-pro/class-customize.php');