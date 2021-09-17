<?php
/**
* Register menus
*
* @package Wpcity
*/
namespace Wpcity_Theme\Inc;

use WPCITY_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {


       //load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		
		/*
		* Actions.
		*/

		add_action('wp_enqueue_scripts', [ $this, 'register_styles' ] );
     

	}

	
	
	}