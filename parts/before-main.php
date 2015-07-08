<?php

/*
 * On the home page, we display a series of navigation menus at the top.
 */
if ( is_front_page() ) :

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

	$signature_menu_args = array(
		'theme_location'  => 'signature-menu',
		'menu'            => 'signature-menu',
		'container'       => 'div',
		'container_class' => 'signature-menu-wrapper',
		'container_id'    => 'signature-menu',
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
					<div class="wsu-logo">
						<!-- logo will go here -->
					</div>
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
				<div class="column one wsu-signature-nav-container">
					<?php wp_nav_menu( $signature_menu_args ); ?>
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
endif;