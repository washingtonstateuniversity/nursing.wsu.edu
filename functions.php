<?php

class WSU_Nursing {
	/**
	 * Setup the hooks used by the theme.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'register_menus' ), 10 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
	}

	/**
	 * Register the menus used by the College of Nursing.
	 */
	public function register_menus() {
		// The top menu on the home page, above the mega menu.
		register_nav_menu( 'top-menu', 'Top Menu' );

		// The primary portion of the Mega Menu at the top of the home page.
		register_nav_menu( 'mega-menu', 'Mega Menu' );

		// A section of the Mega Menu, visible when expanded, highlighting signature links.
		register_nav_menu( 'signature-menu', 'Signature Menu' );

		// The fat footer menu displayed on the bottom of every page.
		register_nav_menu( 'fat-footer', 'Fat Footer' );
	}

	public function enqueue_scripts() {
		if ( is_front_page() ) {
			wp_enqueue_script( 'wsu-nursing-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array( 'jquery', 'backbone' ), spine_get_script_version(), true );
			wp_enqueue_script( 'wsu-nursing-primary', get_stylesheet_directory_uri() . '/js/primary.js', array( 'wsu-nursing-navigation' ), spine_get_script_version(), true );
		}
	}
}
new WSU_Nursing();