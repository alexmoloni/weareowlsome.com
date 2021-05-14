<?php
use alexito\Helpers;

function headerSimple1( $options = null ) {
	$text = $options['text'] ?? false;
	$link = $options['link'] ?? site_url();
	?>
    <header class="header-simple-1 js-fade-in-on-scroll <?= $text ? 'has-text' : 'has-logo' ?>">
		<?php if ( $text ): ?>
            <a href="<?= Helpers::wpmlLinkMaintainCurrentLanguage($link) ?>" class="logo-text"><?= $text ?></a>
		<?php else: ?>
			<?php mainLogo(); ?>
		<?php endif; ?>
    </header>
<?php }