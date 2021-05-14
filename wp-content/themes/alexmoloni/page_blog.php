<?php
/*
Template Name: Page Blog
Template Post Type: page
*/

get_header();

if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		headerSimple1( [
			'text' => get_field( 'header_text' )
		] );
		require 'templates/page-blog/section-1.php';
		footerSection( [
			'with_icon'             => true,
			'bgc'                   => '#D6E0DE',
			'text'                  => '<span class="text">' . get_field( 'footer_text' ) . '</span>',
			'icon_position_desktop' => 'after-text',
			'full_height'           => true

		] );
	endwhile;

endif;

get_footer();