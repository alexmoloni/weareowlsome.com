<?php

function videoAsBg( $options = null ) {
	$src = $options['src'] ?? '';
	$bg_img_url = $options['bg_img_url'] ?? '';

	?>
	<div class="video-as-bg">
		<video autoplay="" loop="" style="background-image:url(<?= $bg_img_url ?>)" muted="" playsinline="">
			<source src="<?= $src ?>">
		</video>
	</div>

<?php }