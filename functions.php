<?php

class WSU_Nursing {
	/**
	 * Setup the hooks used by the theme.
	 */
	public function __construct() {
		add_filter( 'spine_child_theme_version', array( $this, 'theme_version' ) );
		add_action( 'widgets_init', array( $this, 'setup_sidebars' ), 10 );
		add_filter( 'make_the_builder_content', array( $this, 'replace_p_with_figure' ), 99 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
		add_action( 'wp_head', array( $this, 'nursing_facebook_pixel' ), 99 );
	}

	/**
	 * Provides a theme version for use in cache busting.
	 *
	 * @since 0.4.0
	 *
	 * @return string
	 */
	public function theme_version() {
		return '0.4.4';
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
		$content = preg_replace( '/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<figure class=\"wsu-p-replaced\">$1</figure>', $content );

		return $content;
	}

	public function enqueue_scripts() {
		if ( is_front_page() ) {
			wp_enqueue_script( 'nursing-home', get_stylesheet_directory_uri() . '/js/nursing-home.js', array( 'jquery' ), spine_get_script_version(), true );
		}
	}

	/**
	 * Add a Facebook tracking pixel to the WSU Research Study page on Nursing.
	 */
	public function nursing_facebook_pixel() {
		if ( is_page( 'wsu-research-study' ) ) {
			?>
			<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');

			fbq('init', '448447048649179');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=448447048649179&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->
			<?php
		}
	}
}
new WSU_Nursing();
