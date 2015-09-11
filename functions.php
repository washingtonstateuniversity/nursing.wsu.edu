<?php

class WSU_Nursing {
	/**
	 * Setup the hooks used by the theme.
	 */
	public function __construct() {
		add_action( 'widgets_init', array( $this, 'setup_sidebars' ), 10 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
	}

	/**
	 * Setup a fat footer area in which widgets can be used for navigation, text areas, etc...
	 */
	public function setup_sidebars() {
		$fat_footer_args = array(
			'name'          => 'Fat Footer Area',
			'id'            => 'fat-footer',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
		);
		register_sidebar( $fat_footer_args );
	}

	public function enqueue_scripts() {
		wp_enqueue_script( 'wsu-nursing-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array( 'jquery', 'backbone' ), spine_get_script_version(), true );
		wp_enqueue_script( 'wsu-nursing-primary', get_stylesheet_directory_uri() . '/js/primary.js', array( 'wsu-nursing-navigation' ), spine_get_script_version(), true );
	}
}
new WSU_Nursing();