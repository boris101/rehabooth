<?php
require_once(dirname(__FILE__).'/meta-framework/rehabooth.php');

function rhb_setup() {
	
	register_nav_menu( 'primary', __( 'Primary Menu', 'rhb' ) );
	
	register_nav_menu( 'secondary', __( 'Floor Menu', 'rhb' ) );
	
	add_theme_support( 'post-thumbnails' );
	
	$defaults = array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'header-text'   => false,
		'width'         => 543,
		'height'        => 150,
	);
	
	add_theme_support( 'custom-header', $defaults );
	
}

add_action( 'after_setup_theme', 'rhb_setup' );

function rhb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'rhb' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages', 'rhb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'rhb_widgets_init' );

function rhb_scripts_styles() {
	
	wp_enqueue_style( 'rhb-style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'rhb_scripts_styles' );

function my_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );