<?php
get_header();

$blog_page_id = 246;
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		require 'templates/single-project/section-1.php';
		require 'templates/single-project/section-2.php';
		require 'templates/single-project/section-3.php';
		footerSection( [
			'bgc'         => '#EDD6C4',
			'text'        => '<span class="text">' . __('Tell us about your<br>project', 'alexmoloni') . '</span>',
			'with_email'  => true,
			'full_height' => true
		] );
	endwhile;

endif;

get_footer();