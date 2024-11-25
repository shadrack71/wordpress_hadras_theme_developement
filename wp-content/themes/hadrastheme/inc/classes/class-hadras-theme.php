<?php
/**
 * Boostrap the Theme
 *
 * @package Hadrastheme
 */
namespace HADRASTHEME\Inc;

use HADRASTHEME\Inc\Traits\singleton;

class HADRAS_THEME {
	use singleton;
	protected function __construct() {
		// load classes
		Assets::get_instance();

		$this->setup_hooks();
	}
	protected function setup_hooks() {
		// action and filters

		add_action('after_setup_theme',[$this,'setup_theme']);


	}
	public function setup_theme() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo',[
			'header-text'          => ['site-title', 'site-description' ],
			'height'               => 100,
			'width'                => 100,
			'flex-height'          => true,
			'flex-width'           => true,

			'unlink-homepage-logo' => true,


		] );
		add_theme_support(
			'custom-background',
			[
				'default-color' => '#fff',
				'default-image' => '',
				'default-repeat' => 'no-repeat',
			]
		);



	}
}