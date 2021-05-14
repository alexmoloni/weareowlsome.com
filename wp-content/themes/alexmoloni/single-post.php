<?php
get_header();


$blog_page_id = \alexito\Helpers::wpmlGetTranslatedPostId(246);
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		headerSimple1( [
			'text' => get_field( 'header_text', $blog_page_id ),
			'link' => site_url( 'blog' )
		] );
		require 'templates/single-post/section-1.php';
		footerSection( [
			'with_icon'             => true,
			'bgc'                   => '#E1DEE9',
			'text'                  => '<span class="text">' . get_field( 'footer_text', $blog_page_id ) . '</span>',
			'icon_position_desktop' => 'after-text',
			'full_height'           => true
		] );
	endwhile;

endif;

get_footer();