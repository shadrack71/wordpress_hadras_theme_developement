<?php
/**
 *
 * Theme Functions
 *
 * @package Hadras Theme
 */


/**
 * Proper way to enqueue scripts and styles
 */
if (!defined('HADRASTHEME_DIR_PATH')){
	define('HADRASTHEME_DIR_PATH',untrailingslashit(get_template_directory()));

}
if (!defined('HADRASTHEME_DIR_URI')){

	define('HADRASTHEME_DIR_URI',untrailingslashit(get_template_directory_uri()));
}


require_once HADRASTHEME_DIR_PATH . '/inc/helper/autoloader.php';
function hadras_get_theme_instance(){
	\HADRASTHEME\Inc\HADRAS_THEME::get_instance();
}
hadras_get_theme_instance();

//function hadras_enqueue_scripts() {
//
//
//}
//add_action( 'wp_enqueue_scripts', 'hadras_enqueue_scripts' );