<?php

use alexito\Helpers;
use alexito\Pages;

function mainHeader( $options ) {
	$topbar                           = $options['topbar'] ?? false;
	$hamburger_location               = $options['hamburger_location'] ?? 'left';
	$menu_from_side                   = $options['menu_from_side'] ?? 'left';
	$sticky_on_load                   = $options['sticky_on_load'] ?? false;
	$add_header_spacer                = $options['add_header_spacer'] ?? true;
	$sticky_on_scroll                 = $options['sticky_on_scroll'] ?? false;
	$has_cart                         = $options['has_cart'] ?? false;
	$has_shadow                       = $options['has_shadow'] ?? false;
	$logo_text_to_right               = $options['logo_text_to_right'] ?? false;
	$mobile_menu_header               = $options['mobile_menu']['header'] ?? 'text';
	$mobile_menu_full_width           = $options['mobile_menu']['full_width'] ?? false;
	$mobile_menu_show_current_page    = $options['mobile_menu']['show_current_page'] ?? false;
	$show_close_x_inside_mobile_menu  = $options['mobile_menu']['show_close_x_inside_mobile_menu'] ?? true;
	$mobile_menu_nav_space_for_header = $options['mobile_menu']['menu_space_for_header'] ?? true;
	$with_language_switcher           = $options['with_language_switcher'] ?? false;
	$extra_css                        = $options['extra_css'] ?? '';
	?>

	<?php if ( $sticky_on_load ): ?>
        <div id="header-spacer"></div>
	<?php endif; ?>
    <header id="main-header" class="main-header hamburger-location-<?= $hamburger_location ?> <?= $sticky_on_load ? 'sticky-on-load' : '' ?> <?= $sticky_on_scroll ? 'sticky-on-scroll' : '' ?> <?= $topbar ? 'has-topbar' : '' ?> menu-from-<?= $menu_from_side ?> <?= $mobile_menu_full_width ? 'mobile-menu-full-width' : '' ?> <?= $mobile_menu_show_current_page ? 'mobile-menu-show-curent-page' : '' ?> <?= $has_shadow ? 'has-shadow' : '' ?> <?= $with_language_switcher ? 'with-language-switcher' : '' ?> <?= $add_header_spacer ? 'add_header_spacer' : ''; ?> <?= $mobile_menu_nav_space_for_header ? 'mobile-menu-nav-space-for-header' : '' ?> <?= $extra_css ?> js-fade-in-on-scroll" data-fade-from="top">
		<?php if ( $topbar ): ?>
            <div class="topbar">
                <div class="topbar-inner">
                    <a href="tel: <?= Helpers::removeAllWhitespaceFromString( $topbar['phone'] ) ?>" class="phone-box no-style"><?= __( 'Zadzwoń', 'alexmoloni' ) ?>
                        : <?= $topbar['phone'] ?></a>
                    <a href="mailto: <?= $topbar['email'] ?>" class="email-box no-style"><?= __( 'Email', 'alexmoloni' ) ?>
                        : <?= $topbar['email'] ?></a>
                </div>
            </div>

		<?php endif; ?>
        <div class="container">
            <div class="header-inner-wrap">
				<?php menuHamburger( [ 'id' => 'header-menu-hamburger' ] ) ?>
				<?php
				$options = [
					'use_acf_logo' => true
				];
				if ( $logo_text_to_right ) {
					$options['text_to_right'] = $logo_text_to_right;
				}
				mainLogo( $options ) ?>

                <nav class="main-navigation" role="navigation" id="main-navigation">

					<?php if ( $mobile_menu_header ): ?>
                        <div class="mobile-only mobile-menu-header">
							<?php if ( $mobile_menu_header === 'text' ): ?>
                                <p class="">Menu</p>
							<?php elseif ( $mobile_menu_header === 'logo' ): ?>
								<?php mainLogo( [
									'use_acf_logo'  => true,
									'text_to_right' => false

								] ) ?>
							<?php endif; ?>
                        </div>
					<?php endif; ?>

					<?php if ( $show_close_x_inside_mobile_menu ): ?>
						<?php closeX( 'js-close-main-navigation mobile-only' ) ?>
					<?php endif; ?>

                    <div class="desktop-menu-wrap desktop-only">
						<?php navMenu(); ?>
                    </div>

                    <div class="mobile-menu-wrap mobile-only">
						<?php navMenu( [
							'layout' => 'mobile'
						] ); ?>
                    </div>

					<?php if ( $has_cart ): ?>

						<?php headerCart( [
							'extra_css' => 'desktop-only'
						] ) ?>
					<?php endif; ?>
					<?php if ( $with_language_switcher ): ?>
						<?php languageSwitcher( [ 'with_label' => false, 'extra_css' => 'desktop-only' ] ) ?>
					<?php endif; ?>
                </nav>

				<?php if ( $has_cart ): ?>
					<?php headerCart( [
						'extra_css' => 'mobile-only'
					] ) ?>
				<?php endif; ?>

				<?php if ( $with_language_switcher ): ?>
					<?php languageSwitcher( [ 'with_label' => false, 'extra_css' => 'mobile-only' ] ) ?>
				<?php endif; ?>

            </div>
        </div>
    </header>

<?php }
