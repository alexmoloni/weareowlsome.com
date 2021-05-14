<?php
use alexito\Helpers;

function footerSection( $options = null ) {
	$text                  = $options['text'] ?? false;
	$bgc                   = $options['bgc'] ?? 'transparent';
	$with_icon             = $options['with_icon'] ?? false;
	$icon_position_desktop = $options['icon_position_desktop'] ?? 'top-right';
	$with_email            = $options['with_email'] ?? false;
	$full_height           = $options['full_height'] ?? false;

	?>
    <footer style="background-color:<?= $bgc ?>;" class="footer-section <?= $with_icon ? 'icon-position-' . $icon_position_desktop : '' ?> <?= $with_email ? 'with-email' : '' ?> <?= $full_height ? 'full-height' : 'no-full-height'; ?>">
		<?php if ( $with_icon && $icon_position_desktop === 'top-right' ): ?>
			<?php owlIcon( [
				'extra_css' => 'desktop-only top-right js-fade-in-on-scroll'
			] ); ?>
		<?php endif; ?>
        <div class="inner-container js-fade-in-on-scroll">
			<?php if ( $text ): ?>
                <div class="text-wrap"><?= $text ?></div>
				<?php if ( $with_email ): ?>
                    <div data-fade-from="bottom" class="email-wrap">
                        <a class="email" href="mailto: <?= get_field( 'email', 'options' ) ?>"><?php svgHighlightedWord( [
								'text'         => get_field( 'email', 'options' ),
								'stroke_width' => 1
							] ); ?></a>
                    </div>
				<?php endif; ?>
				<?php if ( $with_icon ): ?>
					<?php owlIcon( [
						'extra_css' => 'mobile-only'
					] ); ?>
				<?php endif; ?>
				<?php if ( $with_icon && $icon_position_desktop === 'after-text' ): ?>
                    <div class="icon-after-text">
						<?php owlIcon( [
							'extra_css' => 'desktop-only'
						] ); ?>
                    </div>
				<?php endif; ?>
			<?php endif; ?>
        </div>
        <nav class="footer-menu">
            <ul>
                <?php
                $first_url = site_url();
                $first_label = __( 'Home', 'alexmoloni' );
                if (is_front_page()) {
	                $first_url = site_url('about');
	                $first_label = __( 'About', 'alexmoloni' );
                }
                ?>
                <li>
                    <a href="<?= Helpers::wpmlLinkMaintainCurrentLanguage($first_url) ?>"><?php svgHighlightedWord( [ 'text' => $first_label ] ); ?></a>
                </li>
                <?php
                $second_url = site_url('work');
                $second_label = __( 'Work', 'alexmoloni' );
                $stroke_width = null;
                if (Helpers::getWPMLLanguage() === 'pl') {
	                $stroke_width = 2;
                }

                if (is_page_template('page_work.php')) {
	                $second_url = site_url('about');
	                $second_label = __( 'About', 'alexmoloni' );
	                $stroke_width = 4;
                }
                ?>
                <li>
                    <a href="<?= Helpers::wpmlLinkMaintainCurrentLanguage($second_url) ?>"><?php svgHighlightedWord( [
                            'text' => $second_label,
                            'stroke_width' => $stroke_width
                        ] ); ?></a>
                </li>
	            <?php
	            $third_url = site_url('contact');
	            $third_label = __( 'Contact', 'alexmoloni' );
	            if (is_page_template('page_contact.php')) {
		            $third_url = site_url('about');
		            $third_label = __( 'About', 'alexmoloni' );
	            }
	            ?>
                <li>
                    <a href="<?= Helpers::wpmlLinkMaintainCurrentLanguage($third_url) ?>"><?php svgHighlightedWord( [
						    'text'         => $third_label,
						    'stroke_width' => 2
					    ] ); ?></a></li>
            </ul>
        </nav>
    </footer>
<?php }