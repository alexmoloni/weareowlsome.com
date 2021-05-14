<?php
function alexmoloniPopup( $options ) {
	$extra_css    = $options['extra_css'] ?? '';
	$id           = $options['id'] ?? false;
	$content      = $options['content'] ?? '';
	$theme        = $options['theme'] ?? 'popup-white';
	$with_close_x = $options['ith_close_x'] ?? true;
	$path_close_x = $options['path_close_x'] ?? 'common/close-x-grey.svg'; //apath from images prod no slash
	$path_close_x_mobile = $options['path_close_x_mobile'] ?? 'common/close-x-grey.svg'; //apath from images prod no slash

	?>
    <div class="popup-wrap <?= $extra_css ?> <?= $theme ?>" id="<?= $id ?>">
		<?php if ( $with_close_x ): ?>
			<?php closeX( 'js-hide-popup', $path_close_x, $path_close_x_mobile ) ?>
		<?php endif; ?>
        <div class="inner-popup-wrap">
			<?= $content ?>
        </div>
    </div>


<?php }