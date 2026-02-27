<?php
/**
 * WebTechFocus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage WebTechFocus
 * @since WebTechFocus 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'webtechfocus_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return void
	 */
	function webtechfocus_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'webtechfocus_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'webtechfocus_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return void
	 */
	function webtechfocus_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'webtechfocus_editor_style' );

// Enqueues the theme stylesheet on the front. styles located in assets folder. for client.
/*
if ( ! function_exists( 'webtechfocus_enqueue_styles' ) ) :
	function webtechfocus_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'webtechfocus-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'webtechfocus-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}
endif;*/


// Enqueues the theme stylesheet on the front.
if ( ! function_exists( 'webtechfocus_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return void
	 */
	function webtechfocus_enqueue_styles() {

		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		// Default theme stylesheet
		wp_enqueue_style(
			'webtechfocus-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_style_add_data(
			'webtechfocus-style',
			'path',
			get_parent_theme_file_path( $src )
		);

		// Get current site URL
		$current_url = home_url();
        $current_host = parse_url( home_url(), PHP_URL_HOST );

		// Load site-specific external styles
        /*
		if ( $current_url === 'https://www.webtechfocus.com' || $current_url === 'http://webtechfocus.test' || $current_url === 'https://dev.webtechfocus.com/') {

			wp_enqueue_style(
				'wtf-wtf-style',
				'https://library.webtechfocus.com/assets/css/wtf-wtf.css',
				array(),
				null
			);

		} elseif ( $current_url === 'https://www.marlenematos.com' || $current_url === 'http://marlenematos.webtechfocus.test/' || $current_url === 'https://dev.marlenematos.com/') {

			wp_enqueue_style(
				'wtf-mm-style',
				'https://library.webtechfocus.com/assets/css/wtf-theme.css',
				array(),
				null
			);

		}*/


        if ($current_host === 'www.webtechfocus.com' || $current_host === 'webtechfocus.test' || $current_host === 'dev.webtechfocus.com') {

			wp_enqueue_style(
				'wtf-wtf-style',
				'https://library.webtechfocus.com/assets/css/wtf-wtf.css',
				array(),
				null
			);

		} 
        if ($current_host === 'www.marlenematos.com' || $current_host === 'marlenematos.webtechfocus.test' || $current_host === 'dev.marlenematos.com') {

			wp_enqueue_style(
				'wtf-mm-style',
				'https://library.webtechfocus.com/assets/css/wtf-theme.css',
				array(),
				null
			);

		}
        elseif ($current_host === 'demo.webtechfocus.com') {

			wp_enqueue_style(
				'wtf-demo-style',
				'https://library.webtechfocus.com/assets/css/wtf-theme.css',
				array(),
				null
			);

		}
        
	}
endif;

add_action( 'wp_enqueue_scripts', 'webtechfocus_enqueue_styles' );

/**
 * Adds custom body classes per multisite domain.
 */
function webtechfocus_custom_body_classes( $classes ) {

	$current_url = home_url();
    $current_host = parse_url( home_url(), PHP_URL_HOST );

    /*
	if ( $current_url === 'https://www.webtechfocus.com' || $current_url === 'http://webtechfocus.test' || $current_url === 'https://dev.webtechfocus.com/') {
		$classes[] = 'wtf-wtf';
	}
	if ( $current_url === 'https://www.marlenematos.com' || $current_url === 'http://marlenematos.webtechfocus.test/' || $current_url === 'https://dev.marlenematos.com/') {
		$classes[] = 'wtf-mm';
	}
    if ( $current_url === 'https://demo.webtechfocus.com/' ) {
		$classes[] = 'wtf-line';
	}
        */

    if ($current_host === 'www.webtechfocus.com' || $current_host === 'webtechfocus.test' || $current_host === 'dev.webtechfocus.com') {
        $classes[] = 'wtf-wtf';
    }

    if ($current_host === 'www.marlenematos.com' || $current_host === 'marlenematos.webtechfocus.test' || $current_host === 'dev.marlenematos.com') {
        $classes[] = 'wtf-mm';
    }

    if ($current_host === 'demo.webtechfocus.com') {
        $classes[] = 'wtf-line';
    }

	return $classes;
}
add_filter( 'body_class', 'webtechfocus_custom_body_classes' );


// Registers custom block styles.
if ( ! function_exists( 'webtechfocus_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return void
	 */
	function webtechfocus_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'webtechfocus' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'webtechfocus_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'webtechfocus_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return void
	 */
	function webtechfocus_pattern_categories() {

		register_block_pattern_category(
			'webtechfocus_page',
			array(
				'label'       => __( 'Pages', 'webtechfocus' ),
				'description' => __( 'A collection of full page layouts.', 'webtechfocus' ),
			)
		);

		register_block_pattern_category(
			'webtechfocus_post-format',
			array(
				'label'       => __( 'Post formats', 'webtechfocus' ),
				'description' => __( 'A collection of post format patterns.', 'webtechfocus' ),
			)
		);
	}
endif;
add_action( 'init', 'webtechfocus_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'webtechfocus_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return void
	 */
	function webtechfocus_register_block_bindings() {
		register_block_bindings_source(
			'webtechfocus/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'webtechfocus' ),
				'get_value_callback' => 'webtechfocus_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'webtechfocus_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'webtechfocus_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since WebTechFocus 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function webtechfocus_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
