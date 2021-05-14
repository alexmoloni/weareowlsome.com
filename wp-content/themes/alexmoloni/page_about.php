<?php

/*
Template Name: Page About
Template Post Type: page
*/

get_header();

if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		require 'templates/page-about/section-1.php';
		require 'templates/page-about/section-2.php';
		require 'templates/page-about/section-3.php';
		require 'templates/page-about/section-4.php';
		footerSection( [
			'text'       => get_field( 'footer_text' ),
			'with_icon'  => true,
			'bgc'        => '#D6E0DE',
			'with_email' => true,
			'full_height' => true
		] );
	endwhile;
endif;

get_footer();