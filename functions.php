<?php


function vethealththeme_setup() {
	load_theme_textdomain( 'vethealththeme', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 800 );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'style-editor.css' );

	register_nav_menus( array(
		'main-menu' => __( 'Main Menu', 'vethealththeme' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', array(
		'default-repeat'     => 'no-repeat',
		'default-position-x' => 'center',
		'default-position-y' => 'center',
		'default-attachment' => 'fixed',
		'default-size'       => 'cover',
		'default-color'      => '#fff',
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 300,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Custom Editor Colors
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Grey', 'vethealththeme' ),
			'slug'  => 'grey',
			'color' => '#bbb',
		),
		array(
			'name'  => __( 'Light Grey', 'vethealththeme' ),
			'slug'  => 'light-grey',
			'color' => '#e4e4e4',
		),
		array(
			'name'  => __( 'Blueberry', 'vethealththeme' ),
			'slug'  => 'blueberry',
			'color' => '#59e',
		),
		array(
			'name'  => __( 'Light Blueberry', 'vethealththeme' ),
			'slug'  => 'light-blueberry',
			'color' => '#bbd6f8',
		),
		array(
			'name'  => __( 'Lime', 'vethealththeme' ),
			'slug'  => 'lime',
			'color' => '#ad5',
		),
		array(
			'name'  => __( 'Light Lime', 'vethealththeme' ),
			'slug'  => 'light-lime',
			'color' => '#ddf1bb',
		),
		array(
			'name'  => __( 'Mango', 'vethealththeme' ),
			'slug'  => 'mango',
			'color' => '#ea4',
		),
		array(
			'name'  => __( 'Light Mango', 'vethealththeme' ),
			'slug'  => 'light-mango',
			'color' => '#f8ddb4',
		),
		array(
			'name'  => __( 'Strawberry', 'vethealththeme' ),
			'slug'  => 'strawberry',
			'color' => '#e46',
		),
		array(
			'name'  => __( 'Light Strawberry', 'vethealththeme' ),
			'slug'  => 'light-strawberry',
			'color' => '#f8b4c2',
		),
	) );

	// Custom Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'vethealththeme' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Big', 'vethealththeme' ),
			'size' => 20,
			'slug' => 'big',
		),
		array(
			'name' => __( 'Huge', 'vethealththeme' ),
			'size' => 28,
			'slug' => 'huge',
		),
	) );
}
add_action( 'after_setup_theme', 'vethealththeme_setup' );



function vethealth_scripts() {
	// Main Stylesheet
	wp_enqueue_style( 'vethealththeme-main', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Google Font
	wp_enqueue_style( 'vethealththeme-font', '//fonts.googleapis.com/css?family=Raleway:400,600&display=swap' );

	// Comments Scripts and Styles
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	
		
	
	// vethealththeme Scripts
	if(is_page_template('page-analize.php')) {
		wp_enqueue_script('lab', get_template_directory_uri() . '/js/lab.js', '', '', true);
	}
	wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', '', '', true);
	wp_enqueue_script( 'standwithukraine-js', get_template_directory_uri() . '/js/standwithukraine.js', '', '1.0', true );
	// if( is_home() || is_front_page() ) {
		
	//  }
	
	
	// wp_enqueue_script( 'vethealththeme-js', get_template_directory_uri() . '/js/scripts.js', '', wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'vethealth_scripts' );



// Set Content Width
function vethealththeme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vethealththeme_content_width', 1200 );
}
add_action( 'after_setup_theme', 'vethealththeme_content_width', 0 );



// Enable Widget Areas
function vethealththeme_widgets() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets 1', 'vethealththeme' ),
		'id'            => 'footer-widgets-1',
		'description'   => __( 'Add widgets to the colored footer block.', 'vethealththeme' ),
		'before_widget' => '<section id="%1$s" class="widget col-lg %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets 2', 'vethealththeme' ),
		'id'            => 'footer-widgets-2',
		'description'   => __( 'Add widgets to your footer.', 'vethealththeme' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vethealththeme_widgets' );



// Enable vethealththeme Color Theme Options
function vethealththeme_customizer( $wp_customize ) {
	$wp_customize->add_setting( 'vethealththeme_color_theme', array(
		'default'           => 'blueberry',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );
	$wp_customize->add_control( 'vethealththeme_color_theme', array(
		'label'    => __( 'vethealththeme Color Theme', 'vethealththeme' ),
		'section'  => 'colors',
		'settings' => 'vethealththeme_color_theme',
		'type'     => 'radio',
		'choices'  => array(
			'blueberry'  => __( 'Blueberry', 'vethealththeme' ),
			'lime'       => __( 'Lime', 'vethealththeme' ),
			'mango'      => __( 'Mango', 'vethealththeme' ),
			'strawberry' => __( 'Strawberry', 'vethealththeme' ),
		),
	) );
}
add_action( 'customize_register', 'vethealththeme_customizer' );

// Add vethealththeme Color Theme to Body Class
function vethealththeme_body_class( $classes ) {
	$vethealththeme_color_theme = get_theme_mod( 'vethealththeme_color_theme' );
	$classes[]          = esc_attr( $vethealththeme_color_theme );
	return $classes;
}
add_filter( 'body_class', 'vethealththeme_body_class' );
