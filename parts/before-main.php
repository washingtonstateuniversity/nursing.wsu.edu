<?php

/**
 * Load navigation from the main nursing site to display on all sites using the child theme.
 */
$nursing_main_site = get_blog_details( array( 'domain' => wsuwp_get_current_site()->domain, 'path' => '/' ) );

if ( get_current_blog_id() != $nursing_main_site->blog_id ) {
	switch_to_blog( $nursing_main_site->blog_id );
}

$top_menu_args = array(
	'theme_location'  => 'top-menu',
	'menu'            => 'top-menu',
	'container'       => 'div',
	'container_class' => 'top-menu-wrapper',
	'container_id'    => 'top-menu',
	'menu_class'      => null,
	'menu_id'         => null,
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 1,
);

$mega_menu_args = array(
	'theme_location'  => 'mega-menu',
	'menu'            => 'mega-menu',
	'container'       => 'div',
	'container_class' => 'mega-menu-wrapper',
	'container_id'    => 'mega-menu',
	'menu_class'      => null,
	'menu_id'         => null,
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 5,
);

$header_mega_menu_args = array(
	'theme_location'  => 'mega-menu',
	'menu'            => 'mega-menu',
	'container'       => 'div',
	'container_class' => 'mega-menu-labels-wrapper',
	'container_id'    => 'mega-menu-labels',
	'menu_class'      => null,
	'menu_id'         => null,
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 1,
);

?>
<header class="main-header wsu-home-navigation">

	<div class="header-shelf-wrapper">
		<section class="single row top-menu-container">
			<div class="column one">
				<?php wp_nav_menu( $top_menu_args ); ?>
			</div>
		</section>
		<section class="single triptych row header-shelf">
			<div class="column one">
				<!-- Empty with purpose. -->
			</div>
			<div class="column two wsu-mega-nav-labels">
				<?php wp_nav_menu( $header_mega_menu_args ); ?>
			</div>
			<div class="column three wsu-other-nav-placeholder">
				<!-- placeholder -->
			</div>
		</section>
	</div>
	<div class="header-drawer-wrapper">
		<section class="single triptych row header-drawer">
			<div class="column one">
				<!-- Empty with purpose. -->
			</div>
			<div class="column two wsu-mega-nav-container">
				<?php wp_nav_menu( $mega_menu_args ); ?>
			</div>
			<div class="column three">
				<!-- Empty with purpose. -->
			</div>
		</section>
		<div class="close-header-drawer">x</div>
	</div>
</header>
<?php

if ( ms_is_switched() ) {
	restore_current_blog();
}