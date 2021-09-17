<?php
/*
 * Theme Functions.
 * @package wpcity

*/
if ( ! defined('WPCITY_DIR_PATH' ) ) {
	define( 'WPCITY_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'WPCITY_DIR_URI' ) ) {
    define( 'WPCITY_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once WPCITY_DIR_PATH . '/inc/helpers/autoloader.php';

function wpcity_get_theme_instance() {
	\WPCITY_THEME\Inc\WPCITY_THEME::get_instance();
}

wpcity_get_theme_instance();


function wpcity_enqueue_scripts() {
  



    

    
 }

add_action('wp_enqueue_scripts','wpcity_enqueue_scripts' );


?>