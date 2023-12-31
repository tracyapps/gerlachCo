<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'start' ),
		// Main nav in header
		'footer-links' => __( 'Footer Links', 'start' )
		// Secondary nav in footer
	)
);

// The Top Menu
function start_top_nav() {
	wp_nav_menu( array(
		'container' => false,
		// Remove nav container
		'menu_class' => 'vertical medium-horizontal menu links',
		// Adding custom nav class
		'items_wrap' => '<ul id="%1$s" class="%2$s"><li id="menu-home" class="menu-item"><a href="' . esc_url( home_url( '/' ) ) .'"><svg class="icon-home-dims">
							<use xlink:href="#home"></use>
						</svg></a></li>%3$s</ul><button>MENU</button><ul class="hidden-links hidden"></ul>',
		'theme_location' => 'main-nav',
		// Where it's located in the theme
		'depth' => 5,
		// Limit the depth of the nav
		'fallback_cb' => false,
		// Fallback function (see below)
		'walker' => new Topbar_Menu_Walker()
	) );
}

function start_top_nav_no_home() {
	wp_nav_menu( array(
		'container' => false,
		// Remove nav container
		'menu_class' => 'vertical medium-horizontal menu links',
		// Adding custom nav class
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul><button>MENU</button><ul class="hidden-links hidden"></ul>',
		'theme_location' => 'main-nav',
		// Where it's located in the theme
		'depth' => 5,
		// Limit the depth of the nav
		'fallback_cb' => false,
		// Fallback function (see below)
		'walker' => new Topbar_Menu_Walker()
	) );
}

function start_mobile_nav() {
	wp_nav_menu( array(
		'container' => false,
		// Remove nav container
		'menu_class' => 'vertical medium-horizontal menu',
		// Adding custom nav class
		'items_wrap' => '<ul id="menu-main-mobile-navigation-animate" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-close-on-click-inside="false"><li class="menu-item"><a href="' . esc_url( home_url( '/' ) ) .'">Home</a></li>%3$s</ul>',
		'theme_location' => 'main-nav',
		// Where it's located in the theme
		'depth' => 5,
		// Limit the depth of the nav
		'fallback_cb' => false,
		// Fallback function (see below)
		'walker' => new Topbar_Menu_Walker()
	) );
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}


// The Off Canvas Menu
function start_off_canvas_nav() {
	wp_nav_menu( array(
		'container' => false,
		// Remove nav container
		'menu_class' => 'vertical menu',
		// Adding custom nav class
		'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location' => 'main-nav',
		// Where it's located in the theme
		'depth' => 5,
		// Limit the depth of the nav
		'fallback_cb' => false,
		// Fallback function (see below)
		'walker' => new Off_Canvas_Menu_Walker()
	) );
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}



// The Footer Menu
function start_footer_links() {
	wp_nav_menu( array(
		'container' => 'false',
		// Remove nav container
		'menu' => __( 'Footer Links', 'start' ),
		// Nav name
		'menu_class' => 'menu',
		// Adding custom nav class
		'theme_location' => 'footer-links',
		// Where it's located in the theme
		'depth' => 0,
		// Limit the depth of the nav
		'fallback_cb' => ''
		// Fallback function
	) );
} /* End Footer Menu */

// Header Fallback Menu
function start_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
		'menu_class' => '',
		// Adding custom nav class
		'include' => '',
		'exclude' => '',
		'echo' => true,
		'link_before' => '',
		// Before each link
		'link_after' => ''
		// After each link
	) );
}

// Footer Fallback Menu
function start_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}

add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );
