<?php

# Register custom image sizes.
add_action( 'init', 'vaidusworld_register_image_sizes', 5 );

# Register custom menus.
add_action( 'init', 'vaidusworld_register_menus', 5 );

# Register custom layouts.
add_action( 'hybrid_register_layouts', 'vaidusworld_register_layouts' );

# Register sidebars.
add_action( 'widgets_init', 'vaidusworld_register_sidebars', 5 );

# Add custom scripts and styles
add_action( 'wp_enqueue_scripts', 'vaidusworld_enqueue_scripts', 5 );
add_action( 'wp_enqueue_scripts', 'vaidusworld_enqueue_styles',  5 );

/**
 * Registers custom image sizes for the theme.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_register_image_sizes() {

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
function vaidusworld_register_menus() {
	register_nav_menu( 'primary',    esc_html_x( 'Primary',    'nav menu location', 'vaidusworld' ) );
	register_nav_menu( 'secondary',  esc_html_x( 'Secondary',  'nav menu location', 'vaidusworld' ) );
	register_nav_menu( 'subsidiary',  esc_html_x( 'Subsidiary',  'nav menu location', 'vaidusworld' ) );
}

/**
 * Registers layouts.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_register_layouts() {

	hybrid_register_layout( '1c',   array( 'label' => esc_html__( '1 Column',                     'vaidusworld' ), 'image' => '%s/images/layouts/1c.png'   ) );
	hybrid_register_layout( '2c-l', array( 'label' => esc_html__( '2 Columns: Content / Sidebar', 'vaidusworld' ), 'image' => '%s/images/layouts/2c-l.png' ) );
	hybrid_register_layout( '2c-r', array( 'label' => esc_html__( '2 Columns: Sidebar / Content', 'vaidusworld' ), 'image' => '%s/images/layouts/2c-r.png' ) );
}

/**
 * Registers sidebars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_register_sidebars() {

	hybrid_register_sidebar(
		array(
			'id'          => 'primary',
			'name'        => esc_html_x( 'Primary', 'sidebar', 'vaidusworld' ),
			'description' => esc_html__( 'Add sidebar description.', 'vaidusworld' )
		)
	);

	hybrid_register_sidebar(
		array(
			'id'          => 'footer-1',
			'name'        => esc_html_x( 'Footer 1', 'sidebar', 'vaidusworld' ),
			'description' => esc_html__( 'Add sidebar description.', 'vaidusworld' )
		)
	);

	hybrid_register_sidebar(
		array(
			'id'          => 'footer-2',
			'name'        => esc_html_x( 'Footer 2', 'sidebar', 'vaidusworld' ),
			'description' => esc_html__( 'Add sidebar description.', 'vaidusworld' )
		)
	);

	hybrid_register_sidebar(
		array(
			'id'          => 'footer-3',
			'name'        => esc_html_x( 'Footer 3', 'sidebar', 'vaidusworld' ),
			'description' => esc_html__( 'Add sidebar description.', 'vaidusworld' )
		)
	);
}

/**
 * Load scripts for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_enqueue_scripts() {
}

/**
 * Load stylesheets for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_enqueue_styles() {

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
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Dancing+Script|Lato:400,700', array(), 1.0 );
}
