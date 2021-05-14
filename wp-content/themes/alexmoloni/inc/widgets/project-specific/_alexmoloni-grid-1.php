<?php

function alexmoloniGrid1( $options = null ) {
	$extra_css = $options['extra_css'] ?? '';
	$ids = $options['item_ids'] ?? '';
	$with_fade_in = $options['with_fade_in'] ?? false;
	?>
    <div class="alexmoloni-grid-1 <?= $extra_css ?>">
	    <?php
	    /** @var WP_Post $project */
	    foreach ( $ids as $id ) {
		    projectItem( [
			    'id' => $id,
                'extra_css' => $with_fade_in ? 'js-fade-in-on-scroll' : ''
		    ] );
	    }
	    ?>
    </div>

<?php }