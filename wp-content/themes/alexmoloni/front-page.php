<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alexmoloni
 */

get_header();
require 'templates/front-page/section-1.php';
require 'templates/front-page/section-2.php';
require 'templates/front-page/section-3.php';

footerSection( [
	'text'        => get_field('footer_text'),
	'with_icon'   => true,
	'bgc'         => '#e1dee9',
	'with_email'  => true,
	'full_height' => true
] );

get_footer();
