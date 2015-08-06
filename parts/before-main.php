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

$wsu_search_args = array(
	'theme_location'  => 'quick-links',
	'menu'            => 'quick-links',
	'container'       => 'div',
	'container_class' => false,
	'container_id'    => 'quick-links',
	'menu_class'      => null,
	'menu_id'         => null,
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 2,
);

$wsu_campus_args = array(
	'theme_location'  => 'top-level-links',
	'menu'            => 'top-level-links',
	'container'       => 'div',
	'container_class' => false,
	'container_id'    => 'top-level-links',
	'menu_class'      => null,
	'menu_id'         => null,
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 1,
);
?>
<header class="main-header wsu-home-navigation">

	<div class="header-shelf-wrapper">
		<section class="single triptych row header-shelf">
			<div class="column one">
				<!-- Empty with purpose. -->
			</div>
			<div class="column two wsu-mega-nav-labels">
				<div class="top-menu-container">
					<?php wp_nav_menu( $top_menu_args ); ?>
				</div>
				<?php wp_nav_menu( $header_mega_menu_args ); ?>
			</div>
			<div class="column three wsu-other-nav-placeholder">
				<div class="top-level-links-label">WSU Locations</div>
				<div class="search-label">Search</div>
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
	<!-- Search interface, hidden by default until interaction in header -->
	<div class="header-search-wrapper header-search-wrapper-hide">
		<section class="side-right row" id="search-modal">
			<div class="column one">
				<div class="header-search-input-wrapper">
					<form method="get" action="https://search.wsu.edu/Default.aspx">
						<input name="cx" value="002970099942160159670:yqxxz06m1b0" type="hidden">
						<input name="cof" value="FORID:11" type="hidden">
						<input name="sa" value="Search" type="hidden">
						<label for="header-search">Search</label>
						<input type="text" value="" name="q" placeholder="Search" class="header-search-input" />
					</form>
				</div>
				<div class="header-search-a-z-wrapper">
					<span class="search-a-z"><a href="http://index.wsu.edu/">A-Z Index</a></span>
				</div>
			</div>
			<div class="column two">
				<div class="quick-links-label">Common Searches</div>
				<?php wp_nav_menu( $wsu_search_args ); ?>
			</div>
		</section>
		<div class="close-header-search">x</div>
	</div>

	<!-- Campus links, hidden by default until interaction in header -->
	<div class="campus-links-full-page-wrapper campus-links-hide">
		<div class="campus-links-close">x</div>
		<div class="campus-links-internal-wrapper">
			<section class="single full row" id="campus-modal">
				<div class="column one">
					<?php wp_nav_menu( $wsu_campus_args ); ?>
				</div>
			</section>
		</div>
	</div>
</header>
<?php

if ( ms_is_switched() ) {
	restore_current_blog();
}