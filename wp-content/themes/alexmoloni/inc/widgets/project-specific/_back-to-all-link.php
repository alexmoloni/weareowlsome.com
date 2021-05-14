<?php

function backToAllLink($options = null) {
	$text = $options['text'] ?? '';
	$link = $options['link'] ?? '#';
	?>
	<div class="back-to-all-link">
		<a href="<?= esc_url( $link ) ?>"><?php svgHighlightedWord( [
				'text' => $text,
				'stroke_width' => "1.2"
			] ); ?></a>
	</div>
<?php }