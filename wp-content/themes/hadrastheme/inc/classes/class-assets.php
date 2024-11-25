<?php
/**
 *
 *Enqueue theme assets
 * @package hadrastheme
 *
 */

namespace HADRASTHEME\Inc;
use HADRASTHEME\Inc\Traits\singleton;

class Assets {
	use singleton;

	protected function __construct() {
		// load classes

		$this->setup_hooks();
	}
	protected function setup_hooks(){
		// action and filters
		add_action( 'wp_enqueue_scripts', [$this,'register_styles'] );
		add_action( 'wp_enqueue_scripts', [$this,'register_scripts'] );
	}

	public function register_styles(){

		wp_register_style( 'stylesheet', get_stylesheet_uri(),[],filemtime(HADRASTHEME_DIR_PATH."/style.css"),'all');
		wp_register_style( 'boostrap-css', HADRASTHEME_DIR_URI . "/assets/src/library/css/bootstrap.min.css",[],'all');
		wp_register_style( 'aos-css', HADRASTHEME_DIR_URI . "/assets/src/vendor/aos/aos.css",[],'all');
		wp_register_style( 'boostrap-icon', HADRASTHEME_DIR_URI. "/assets/src/vendor/bootstrap-icons/bootstrap-icons.css",[],'all');
		wp_register_style( 'boxicons', HADRASTHEME_DIR_URI . "/assets/src/vendor/boxicons/css/boxicons.min.css",[],'all');
		wp_register_style( 'glightbox', HADRASTHEME_DIR_URI . "/assets/src/vendor/glightbox/css/glightbox.min.css",[],'all');
		wp_register_style( 'remixicon', HADRASTHEME_DIR_URI . "/assets/src/vendor/remixicon/remixicon.css",[],'all');
		wp_register_style( 'swiper', HADRASTHEME_DIR_URI . "/assets/src/vendor/swiper/swiper-bundle.min.css",[],'all');
		wp_enqueue_style('boostrap-css');
		wp_enqueue_style('stylesheet');
		wp_enqueue_style('aos-css');
		wp_enqueue_style('boostrap-icon');
		wp_enqueue_style('boxicons');
		wp_enqueue_style('glightbox');
		wp_enqueue_style('remixicon');
		wp_enqueue_style('swiper');
	}
	public function register_scripts(){
		wp_register_script( 'mainjs', HADRASTHEME_DIR_URI . '/assets/main.js', array(), filemtime( HADRASTHEME_DIR_PATH . "/assets/main.js"),'all', true );
		wp_register_script( 'boostrap-js', HADRASTHEME_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], 'all', true );
		wp_register_script( 'aos-js', HADRASTHEME_DIR_URI. "/assets/src/vendor/aos/aos.js",[],'all',true);
		wp_register_script( 'purecounter-js', HADRASTHEME_DIR_URI . "/assets/src/vendor/purecounter/purecounter_vanilla.js",[],'all',true);

		wp_register_script( 'glightbox-js', HADRASTHEME_DIR_URI . "/assets/src/vendor/glightbox/js/glightbox.min.js",[],'all',true);
		wp_register_script( 'isotope-js', HADRASTHEME_DIR_URI . "/assets/src/vendor/isotope-layout/isotope.pkgd.min.js",[],'all',true);
		wp_register_script( 'swiper-js', HADRASTHEME_DIR_URI. "/assets/src/vendor/swiper/swiper-bundle.min.js",[],'all',true);

		wp_enqueue_script('mainjs');
		wp_enqueue_script('boostrap-js');
		wp_enqueue_script('aos-js');
		wp_enqueue_script('purecounter-js');
		wp_enqueue_script('glightbox-js');
		wp_enqueue_script('isotope-js');
		wp_enqueue_script('swiper-js');
	}




}