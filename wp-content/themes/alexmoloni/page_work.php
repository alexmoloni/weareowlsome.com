<?php

/*
Template Name: Page Work
Template Post Type: page
*/

get_header();

if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		require 'templates/page-work/section-1.php';
		footerSection();
	endwhile;
endif;

get_footer();