<!doctype html>
<html>
<head>
    <style>
        body.no-js #preload-overlay {
            display: none;
        }

        #preload-overlay {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100vw;
            height: 100vh;
            z-index: 100002;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        body.home #preload-overlay {
            background-color: #D6E0DE;
        }

        body.page-template-page_work #preload-overlay {
            background-color: #f2d07f;
        }

        body.single-project #preload-overlay {
            background-color: #D6E0DE;
        }

        body.page-template-page_about #preload-overlay {
            background-color: #E1DEE9;
        }

        body.page-template-page_blog #preload-overlay,
        body.single-post #preload-overlay {
            background-color: #fef2eb;
        }

        body.page-template-page_contact #preload-overlay {
            background-color: #EDD6C4;
        }

    </style>
    <!-- Google Analytics -->
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-138691343-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
	<?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Archivo:400,500,700|Merriweather:700&display=swap&subset=latin-ext" rel="stylesheet">

    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
</head>

<body <?php
if ( is_singular() ) {
	global $post;
	$post_slug = 'page-' . $post->post_name;


} else {
	$post_slug = '';
}
body_class( [ $post_slug ] ) ?>
>
<div id="preload-overlay">
    <?php require get_template_directory() . '/assets/images/svg/owl-preloader.svg'?>
</div>

<div class="header-main-footer-wrap">
	<?php

	if ( is_page_template( [ 'page_work.php' ] ) ):
		headerSimple1();
    elseif ( ! is_page_template( [ 'page_blog.php' ] ) && ! is_singular( 'post' ) ):
		mainHeader( [
			'mobile_menu'            => [
				'full_width'                      => false,
				'show_current-page'               => true,
				'header'                          => false,
				'show_close_x_inside_mobile_menu' => true,
				'menu_space_for_header'           => false
			],
			'sticky_on_load'         => true,
			'hamburger_location'     => 'right',
			'menu_from_side'         => 'right',
			'with_language_switcher' => false,
			'add_header_spacer'      => false,
		] );
	endif;
	fixedSocials();
	?>


    <main class="main">
