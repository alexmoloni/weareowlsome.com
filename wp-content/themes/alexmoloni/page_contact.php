<?php
/*
Template Name: Page Contact
Template Post Type: page
*/

get_header();

if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		require 'templates/page-contact/section-1.php';
		require 'templates/page-contact/section-2.php';
		footerSection( [
			'with_icon' => false,
			'bgc'       => '#EDD6C4'
		] );
	endwhile;
endif;

get_footer();