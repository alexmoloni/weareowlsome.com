<?php

use alexito\Helpers;

function navMenu( $options = null ) {
	$layout = $options['layout'] ?? 'desktop';
	?>
    <ul class="nav-menu">
		<?php
		$stroke_width = null;
		if ( Helpers::getWPMLLanguage() === 'pl' ) {
			if ( $layout === 'mobile' ) {
				$stroke_width = 1.2;
			} else {
				$stroke_width = 3;
			}
		}
		if ( $layout === 'mobile' ) {
			$stroke_width = 2.5;
		}
		$stroke_width_work = 3;
		if (Helpers::getWPMLLanguage() === 'pl') {
			$stroke_width_work = 2;
			if ($layout === 'mobile') {
				$stroke_width_work = 1.5;
			}
		}

		navItem( [
			'link'         => Helpers::wpmlLinkMaintainCurrentLanguage( site_url( 'work' ) ),
			'text'         => __( 'Work', 'alexmoloni' ),
			'stroke_width' => $stroke_width_work
		] ); ?>
		<?php navItem( [
			'link'         => Helpers::wpmlLinkMaintainCurrentLanguage( site_url( 'about' ) ),
			'text'         => __( 'About', 'alexmoloni' ),
			'stroke_width' => $stroke_width

		] ); ?>
		<?php navItem( [
			'link'         => Helpers::wpmlLinkMaintainCurrentLanguage( site_url( 'blog' ) ),
			'text'         => __( 'Blog', 'alexmoloni' ),
			'stroke_width' => $stroke_width

		] ); ?>
		<?php navItem( [
			'link'         => Helpers::wpmlLinkMaintainCurrentLanguage( site_url( 'contact' ) ),
			'text'         => __( 'Contact', 'alexmoloni' ),
			'svg_height'   => '12',
			'stroke_width' => '2'
		] ); ?>
		<?php
        $stoke_width_lang = 10;
        if ($layout === 'mobile') {
	        $stoke_width_lang = 7;
        }
		if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
			$lang_to_show = ICL_LANGUAGE_CODE === 'en' ? 'pl' : 'en';
			navItem( [
				'link'         => '?lang=' . $lang_to_show,
				'text'         => $lang_to_show,
				'svg_height'   => '12',
				'stroke_width' => $stoke_width_lang
			] );
		}
		?>
    </ul>
<?php }