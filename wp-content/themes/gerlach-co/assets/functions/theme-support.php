<?php

// Adding WP Functions & Theme Support
function start_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size
	set_post_thumbnail_size( 125, 125, true );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
		)
	);

	// Adding post format support
	add_theme_support( 'post-formats',
		array(
			'aside',
			// title less blurb
			'gallery',
			// gallery of images
			'link',
			// quick link to other site
			'image',
			// an image
			'quote',
			// a quick quote
			'status',
			// a Facebook like status update
			'video',
			// video
			'audio',
			// audio
			'chat'
			// chat transcript
		)
	);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS[ 'content_width' ] = apply_filters( 'start_theme_support', 1200 );

	// add gerlach brand colors to editor color palette
	add_theme_support( 'editor-color-palette', array(

		array(
			'name'  => __( 'Red', 'start' ),
			'slug'  => 'red',
			'color'	=> '#BF2026',
		),
		array(
			'name'  => __( 'Dark', 'start' ),
			'slug'  => 'dark',
			'color'	=> '#303030',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
		array(
			'name'  => __( 'Tan', 'start' ),
			'slug'  => 'tan',
			'color' => '#FAF3E3',
		),
		array(
			'name'  => __( 'Brown', 'start' ),
			'slug'  => 'brown',
			'color' => '#513F35',
		),
		array(
			'name'  => __( 'Maroon', 'start' ),
			'slug'  => 'maroon',
			'color' => '#590F11',
		),
		array(
			'name'  => __( 'Light', 'start' ),
			'slug'  => 'light',
			'color' => '#F1F1F1',
		),
		array(
			'name'  => __( 'Gray', 'start' ),
			'slug'  => 'gray',
			'color' => '#C5C7C9',
		),
		array(
			'name'  => __( 'Slate', 'start' ),
			'slug'  => 'slate',
			'color' => '#727A8F',
		),
		array(
			'name'  => __( 'Teal', 'start' ),
			'slug'  => 'teal',
			'color' => '#00ADAA',
		),
		array(
			'name'  => __( 'Black', 'start' ),
			'slug'  => 'black',
			'color' => '#000',
		),
		array(
			'name'  => __( 'Darker', 'start' ),
			'slug'  => 'darker',
			'color' => '#2a2a2a',
		),
		array(
			'name'  => __( 'Medium Gray', 'start' ),
			'slug'  => 'mediumgray',
			'color' => '#737575',
		),
		array(
			'name'  => __( 'Silver', 'start' ),
			'slug'  => 'silver',
			'color' => '#D8D6D7',
		),

	) );

	// add gerlach brand color gradient options to editor
	add_theme_support(
		'editor-gradient-presets',
		array(
			array(
				'name'     => __( 'Red gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, ' . esc_attr( hex_to_rgb( '#BF2026' ) ) . ' 75%, ' . esc_attr( hex_to_rgb( '#590F11' ) ) . ' 100%)',
				'slug'     => 'red-to-maroon'
			),
			array(
				'name'     => __( 'Maroon gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, ' . esc_attr( hex_to_rgb( '#590F11' ) ) . ' 75%,  ' . esc_attr( hex_to_rgb( '#303030' ) ) . ' 100%)',
				'slug'     =>  'maroon-to-dark',
			),
			array(
				'name'     => __( 'Brown gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #513F35 75%, #303030 100%)',
				'slug'     => 'brown-to-dark',
			),
			array(
				'name'     => __( 'Slate gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #727A8F 75%, #303030 100%)',
				'slug'     => 'slate-to-dark',
			),
			array(
				'name'     => __( 'Tan gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #FAF3E3 75%, #fff 100%)',
				'slug'     => 'tan-to-white',
			),
			array(
				'name'     => __( 'Gray gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #C5C7C9 75%, #F1F1F1 100%)',
				'slug'     =>  'gray-to-light',
			),
			array(
				'name'     => __( 'Light gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #F1F1F1 75%, #fff 100%)',
				'slug'     => 'light-to-white',
			),
			array(
				'name'     => __( 'Teal gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #00ADAA 75%, #FAF3E3 100%)',
				'slug'     => 'teal-to-tan',
			),
			array(
				'name'     => __( 'Tan-slate gradient', 'start' ),
				'gradient' => 'linear-gradient(135deg, #FAF3E3 75%, #727A8F 100%)',
				'slug'     => 'tan-to-slate',
			),
		)
	);

} /* end theme support */

add_action( 'after_setup_theme', 'start_theme_support' );

add_action( 'admin_init', 'start_add_editor_styles' );
function start_add_editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( trailingslashit( get_template_directory_uri() ) . 'assets/css/editor-styles.css' );
}