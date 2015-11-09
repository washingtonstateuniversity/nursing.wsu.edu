<?php

class WSU_Nursing {
	/**
	 * Setup the hooks used by the theme.
	 */
	public function __construct() {
		add_action( 'widgets_init', array( $this, 'setup_sidebars' ), 10 );
		add_filter( 'make_the_builder_content', array( $this, 'replace_p_with_figure' ), 99 );
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

	/**
	 * Replace paragraphs wrapped around lone images with figure.
	 *
	 * @param string $content Original content being stored.
	 *
	 * @return string Modified content.
	 */
	public function replace_p_with_figure( $content ) {
		$content = preg_replace('/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<figure class=\"wsu-p-replaced\">$1</figure>', $content);

		return $content;
	}

	public function enqueue_scripts() {
		if ( is_front_page() ) {
			wp_enqueue_script( 'nursing-home', get_stylesheet_directory_uri() . '/js/nursing-home.js', array( 'jquery' ), spine_get_script_version(), true );
		}
	}
}
new WSU_Nursing();