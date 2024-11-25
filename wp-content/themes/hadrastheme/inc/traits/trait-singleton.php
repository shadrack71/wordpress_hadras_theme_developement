<?php
/**
 * traits for theme.
 *
 * @package hadrastheme
 */

namespace HADRASTHEME\Inc\Traits;

trait singleton{
	public function __construct() {
	}
	public function __clone() {
		// TODO: Implement __clone() method.
	}

	final public static function get_instance(){
		static $instance = [];
		$called_class = get_called_class();
		if(! isset($instance[$called_class])){
			$instance[$called_class] = new $called_class();
			do_action(sprintf('hadras_theme_singleton_init%s',$called_class));
		}
		return $instance[$called_class];

	}
}
