<?php
use alexito\Helpers;
function owlIcon( $options = null ) {
	$extra_css = $options['extra_css'] ?? '';
	$as_link   = $options['as_link'] ?? true;
	?>
	<?php if ( $as_link ): ?>
        <a href="<?= Helpers::wpmlLinkMaintainCurrentLanguage(site_url()) ?>" class="owl-icon <?= $extra_css ?>">
            <img src="/images/owl.gif" alt="Owlsome">
        </a>
	<?php else: ?>
        <div class="owl-icon <?= $extra_css ?>">
            <img src="/images/owl.gif" alt="Owlsome">
        </div>
	<?php endif; ?>
<?php }