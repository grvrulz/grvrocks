<?php

# Register custom image sizes.
add_action( 'init', 'magik_register_image_sizes', 5 );

# Register custom menus.
add_action( 'init', 'magik_register_menus', 5 );

# Add custom scripts and styles
add_action( 'wp_enqueue_scripts', 'magik_enqueue_scripts', 5 );
add_action( 'wp_enqueue_scripts', 'magik_enqueue_styles',  5 );

# Modify Read More link for excerpts
add_filter('excerpt_more', 'magik_excerpt_more');

/**
 * Registers custom image sizes for the theme.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function magik_register_image_sizes() {

	// Sets the 'post-thumbnail' size.
	//set_post_thumbnail_size( 150, 150, true );
}

/**
 * Registers nav menu locations.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function magik_register_menus() {
	register_nav_menu( 'primary',    esc_html_x( 'Primary',    'nav menu location', 'magik' ) );
	register_nav_menu( 'footer',  esc_html_x( 'Footer',  'nav menu location', 'magik' ) );
	register_nav_menu( 'social',  esc_html_x( 'Social',  'nav menu location', 'magik' ) );
}

/**
 * Load scripts for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function magik_enqueue_scripts() {
	wp_enqueue_script( 'hybrid-mobile-toggle' );
}

/**
 * Load stylesheets for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function magik_enqueue_styles() {

	// Load one-five base style.
	wp_enqueue_style( 'hybrid-one-five' );

	// Load gallery style if 'cleaner-gallery' is active.
	if ( current_theme_supports( 'cleaner-gallery' ) )
		wp_enqueue_style( 'hybrid-gallery' );

	// Load parent theme stylesheet if child theme is active.
	if ( is_child_theme() )
		wp_enqueue_style( 'hybrid-parent' );

	// Load active theme stylesheet.
	wp_enqueue_style( 'hybrid-style' );

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'google-fonts', '//fontlibrary.org/face/glacial-indifference', array(), 1.0 );
}


// Replaces the excerpt "more" text by a link
function magik_excerpt_more($more) {
	   global $post;
	return '<div class="moretag"><a href="'. get_permalink($post->ID) . '">[ Read More ]</a></div>';
}
