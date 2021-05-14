<?php

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( [
		'page_title' => 'Opcje motywu',
		'menu_title' => 'Opcje motywu',
		'menu_slug'  => 'opcje',
		'capability' => 'edit_posts',
		'position'   => 3,
		'icon_url'   => 'dashicons-admin-tools'
	] );

}