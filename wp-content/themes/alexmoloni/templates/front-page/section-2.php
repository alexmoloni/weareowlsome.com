<section class="section section-2 trigger-socials">
    <div class="container">
        <div class="text-wrap js-fade-in-on-scroll">
			<?php
			function convertTextWithHighlights( $text ) {
				$fragments = preg_split( '/<[^>]*[^\/]>/i', $text, - 1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE );
				ob_start();
				for ( $i = 0; $i < count( $fragments ); $i ++ ) {
					if ( $i % 2 == 0 ) {
						echo $fragments[ $i ];
					} else {
						svgHighlightedWord( [
							'text'         => $fragments[ $i ],
							'type'         => 'around-1',
							'stroke_color' => '#d6e1df'
						] );
					}
				}

				return ob_get_clean();
			}

			$text = get_field( 's2_text' );
			?>
			<?php if ( \alexito\Helpers::getWPMLLanguage() === 'en' ) : ?>
                <p class="text-top">We are a creative <?php svgHighlightedWord( [
						'text'         => 'design studio',
						'type'         => 'around-1',
						'stroke_color' => '#d6e1df'
					] ); ?> based<span class="mobile-only"> </span><br class="desktop-only">in Warsaw, Poland. We specialise<span class="mobile-only"> </span><br class="desktop-only">in <?php svgHighlightedWord( [
						'text' => 'branding',
						'type' => 'around-2',
						'stroke_width' => '2.5'
	                ] ); ?> and packaging for<span class="mobile-only"> </span><br class="desktop-only">beauty, lifestyle, and health
                    sectors<span class="mobile-only"> </span><br class="desktop-only">to build visually appealing, fun,<span class="mobile-only"> </span><br class="desktop-only">and<?php svgHighlightedWord( [
						'text' => 'inspiring',
						'type' => 'around-3'
					] ); ?> brands.</p>

			<?php elseif ( \alexito\Helpers::getWPMLLanguage() === 'pl' ) : ?>
                <p class="text-top">Jesteśmy kreatywnym<span class="mobile-only"> </span><br class="desktop-only"><?php svgHighlightedWord( [
						'text'         => 'studiem',
						'type'         => 'around-1',
						'stroke_color' => '#d6e1df',
						'stroke_width' => 3

					] ); ?> graficznym z Warszawy.<span class="mobile-only"> </span><br class="desktop-only">Specjalizujemy się w <?php svgHighlightedWord( [
						'text' => 'brandingu',
						'type' => 'around-2'
					] ); ?><span class="mobile-only"> </span><br class="desktop-only">i projektach opakowań dla marek<span class="mobile-only"> </span><br class="desktop-only">z sektora beauty, zdrowie i lifestyle.<span class="mobile-only"> </span><br class="desktop-only">Tworzymy <?php svgHighlightedWord( [
						'text' => 'silne',
						'type' => 'around-3',
						'stroke_width' => 4
	                ] ); ?> i dopracowane<span class="mobile-only"> </span><br class="desktop-only">wizualnie marki.</p>
			<?php endif; ?>
            <a href="<?= site_url( 'about' ) ?>" class="text-bottom"><?php svgHighlightedWord( [
					'text' => get_field( 's2_btn_text' ),
					'type' => 'under'
				] ); ?></a>
        </div>
    </div>
</section>