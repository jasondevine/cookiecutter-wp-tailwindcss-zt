<?php

/**
 * @Author: jasondevine
 * @Date:   2020-11-20 13:21:45
 * @Last Modified by:   jasondevine
 * @Last Modified time: 2020-11-23 09:55:32
 * Enqueue scripts and styles.
 */

function tailwind_demo_scripts() {
	wp_enqueue_style( 'tailwind-demo-style', get_theme_file_uri() . '/dist/css/main.css', array() );
	wp_enqueue_style( 'tailwind-core-style', get_theme_file_uri() . '/dist/css/tailwind.css', array() );
}
add_action( 'wp_enqueue_scripts', 'tailwind_demo_scripts' );


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

?>


