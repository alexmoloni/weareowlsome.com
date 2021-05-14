<?php

function svgHighlightedWord( $options = null ) {
	$text = $options['text'] ?? '';
	$type = $options['type'] ?? 'under';

	?>
    <span class="svg-highlighted-word type-<?= $type ?>">
        <?php if ( $type === 'under' ):
	        $svg_height = $options['svg_height'] ?? '9';
	        $stroke_width = $options['stroke_width'] ?? '4';
	        ?>
            <svg viewBox="0 0 251 <?= $svg_height ?>" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1c50.548 3.658 100.796 6.03 151.547 6.757 32.512.465 64.951.146 97.453 0" stroke="#000" stroke-width="<?= $stroke_width ?>" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        <?php elseif ( $type === 'around' ) :
	        $svg_height = $options['svg_height'] ?? '34';
	        $stroke_width = $options['stroke_width'] ?? '1';
	        ?>
            <svg viewBox="0 0 77 <?= $svg_height ?>" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                <path d="M74.247 25.85C66.547 5.114 22.631-1.59 5.704 9.798-15.455 24.035 61.518 37.843 69.29 23.41" stroke-width="<?= $stroke_width ?>" stroke="#000"></path>
            </svg>
        <?php elseif ( $type === 'around-1' ) :
	        $stroke_width = $options['stroke_width'] ?? '2';
	        $stroke_color = $options['stroke_color'] ?? '#000'
	        ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284.66 93.32">
                <path stroke-miterlimit="10" stroke-width="<?= $stroke_width ?>" fill="none" stroke="<?= $stroke_color ?>" d="M288.52,31.21C209.4,25.12,126.57,19.51,53.45,47c-11.66,4.38-23.26,9.79-31.4,18.4S9.91,86.45,14.94,96.76c7.31,15,28.82,19.07,47.2,20.08,81,4.44,163.37-12.63,233.78-48.46" transform="translate(-11.72 -25.21)"/>
            </svg>
        <?php elseif ( $type === 'around-2' ) :
	        $stroke_width = $options['stroke_width'] ?? '2';
	        ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.08 44.39">
                <path stroke-miterlimit="10" stroke-width="<?= $stroke_width ?>" fill="none" stroke="#d6e1df" d="M250.25,19.53A399.36,399.36,0,0,1,86.07,61.83c-13.07.49-26.41.3-38.89-3.64S23,46.09,17.53,34.21" transform="translate(-16.62 -18.63)"/>
            </svg>
        <?php elseif ( $type === 'around-3' ) :
	        $stroke_width = $options['stroke_width'] ?? '2';
	        ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 189.25 97.47">
                <path stroke-miterlimit="10" stroke-width="<?= $stroke_width ?>" fill="none" stroke="#d6e1df" d="M33.71,116c28.4,4.51,60.48-6.21,84.72-20.53C124.3,92,130.08,88,134,82.42s5.62-13.12,2.87-19.36c-4.36-9.88-19.27-12.09-27.43-5s-9,20.44-3.22,29.58,16.74,14.12,27.53,14.56,21.41-3.15,31-8.11a112.46,112.46,0,0,0,57.1-73.3" transform="translate(-33.55 -20.55)"/>
            </svg>
        <?php endif; ?>
		<span class="text"><?= $text ?></span>
    </span>
<?php }