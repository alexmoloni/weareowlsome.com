<?php

function fixedSocials( $options = null ) {
	?>
    <div class="fixed-socials">
        <a rel="nofollow" href="<?= esc_url( get_field( 'behance_link', 'options' ) ) ?>" class="social">
			<?php svgHighlightedWord( [ 'text' => 'Behance', 'type' => 'around-1', 'stroke_width' => 4, 'stroke_color' => '#000' ] ); ?>
        </a>
        <a rel="nofollow" href="<?= esc_url( get_field( 'instagram_link', 'options' ) ) ?>" class="social">
			<?php svgHighlightedWord( [ 'text' => 'Instagram', 'type' => 'around-1', 'stroke_width' => 4, 'stroke_color' => '#000' ] ); ?>
        </a>
        <a rel="nofollow" href="<?= esc_url( get_field( 'facebook_link', 'options' ) ) ?>" class="social">
			<?php svgHighlightedWord( [ 'text' => 'Facebook', 'type' => 'around-1', 'stroke_width' => 4, 'stroke_color' => '#000' ] ); ?>
        </a>
    </div>
<?php }