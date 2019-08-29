<?php
/**
 * Display all webart functions and definitions
 *
 * @package Theme Freesia
 * @subpackage Webart
 * @since Webart 1.0
 */

add_action( 'wp_enqueue_scripts', 'webart_enqueue_styles' );

function webart_enqueue_styles() {

	wp_enqueue_style( 'webart-parent-style', trailingslashit(get_template_directory_uri() ) . '/style.css' );

}

function webart_admin_css (){

  wp_enqueue_style( 'webart-admin-css', get_stylesheet_directory_uri() . '/css/admin/admin.css' );

}

add_action( 'admin_enqueue_scripts', 'webart_admin_css' );
?>