<?php

use alexito\Pages;

function enqueueJsAndCss() {

	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );


	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', [], null, true );

	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css', [] );

	wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.4.2/dist/gsap.min.js', [], null, true );
	wp_enqueue_script( 'gsap-scroll-trigger', 'https://cdn.jsdelivr.net/npm/gsap@3.4.2/dist/ScrollTrigger.min.js', [ 'gsap' ], null, true );

	if ( is_page_template( 'page_about.php' ) ) {

		wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', [] );

		wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', [ 'jquery' ], null, true );

	}

	wp_enqueue_script( 'hammer', 'https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js', [ 'jquery' ], null, true );

	if ( is_page_template( 'page_work.php' ) ) {
		wp_enqueue_script( 'magic-mouse', get_stylesheet_directory_uri() . '/assets/js/vendor/magic-mouse.js', [], null, true );
	}


	//main css file
	$css_url  = get_stylesheet_directory_uri() . '/assets/css/main.css';
	$css_path = get_stylesheet_directory() . '/assets/css/main.css';
	$version  = filemtime( $css_path ) ?: false;
	wp_enqueue_style( 'main', $css_url, [], $version );

	$deps = Pages::pageRequiresGsap() ? [ 'jquery', 'gsap-scroll-trigger' ] : [ 'jquery' ];

	//js gets placed at bottom of body
	$js_url  = get_stylesheet_directory_uri() . '/assets/js/main.js';
	$js_path = get_stylesheet_directory() . '/assets/js/main.js';
	$version = filemtime( $js_path ) ?: false;
	wp_enqueue_script( 'main', $js_url, $deps, $version, true );


}

add_action( 'wp_enqueue_scripts', 'enqueueJsAndCss', 50 );


/*Dont include Dashlogo-texticons assets*/
function wpdocs_dequeue_dashicon() {
	//have to set this condition so that wp-admin bar displays correctly
	if ( current_user_can( 'update_core' ) ) {
		return;
	}
	wp_deregister_style( 'dashicons' );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );


function loadAdminStyle() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/assets/css/admin.css', false );
}

add_action( 'admin_enqueue_scripts', 'loadAdminStyle' );
