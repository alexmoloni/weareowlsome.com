<?php

function navItem( $options = [] ) {
	$link     = $options['link'] ?? '#';
	$text     = $options['text'] ?? '';
	$animated = $options['animated'] ?? true;
	$svg_height   = $options['svg_height'] ?? null;
	$stroke_width = $options['stroke_width'] ?? null;


	?>
    <li class="nav-item">
        <a href="<?= esc_url( $link ) ?>">
			<?php if ( $animated ): ?>
				<?php svgHighlightedWord( [ 'text' => $text, 'svg_height' => $svg_height, 'stroke_width' => $stroke_width ] ); ?>
			<?php else: ?>
				<?= $text ?>
			<?php endif; ?>
        </a>
    </li>
<?php }