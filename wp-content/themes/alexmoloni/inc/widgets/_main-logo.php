<?php

use alexito\ACF;
use alexito\Helpers;

function mainLogo( $options = null ) {
	$use_acf_logo  = $options['use_acf_logo'] ?? true;
	$text_to_right = $options['text_to_right'] ?? false;
	?>
    <div class="logo-wrap main-logo <?= $text_to_right ? 'text-to-right' : ''; ?>
">
		<?php if ( $use_acf_logo ): ?>
            <a style="background-image: url( '<?= ACF::getLogoImageUrl() ?>' );" class="logo no-style use-acf-logo" href="<?= Helpers::wpmlLinkMaintainCurrentLanguage( site_url() ) ?>">
            </a>
		<?php else: ?>
            <a class="logo no-style" href="<?= Helpers::wpmlLinkMaintainCurrentLanguage( site_url() ) ?>">
            </a>
		<?php endif; ?>
		<?php if ( $text_to_right ): ?>
            <div class="text-to-right"><?= $text_to_right ?></div>
		<?php endif; ?>
    </div>


<?php }
