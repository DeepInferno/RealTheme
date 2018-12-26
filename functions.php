<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
add_theme_support( 'title-tag' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'editor-styles' );

$defaults = array(
    'default-image'          => '',
    'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
    'default-position-x'     => 'left',    // 'left', 'center', 'right'
    'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
    'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
    'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
    'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
    'default-color'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-background' );

add_theme_support( 'custom-header', $defaults );

add_theme_support( 'custom-logo', array(
'width' =>250,
'height' =>250,
'flex-width' => true,
));

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

/**
 * Register our sidebars and widgetized areas.
 *
 */


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function wpb_widgets_init() {
register_sidebar( array(
'name' => 'Header Sidebar', 'WordPressThemeAgain',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );



?>