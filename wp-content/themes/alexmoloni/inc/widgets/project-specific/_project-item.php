<?php

function projectItem( $options = null ) {
	$id        = $options['id'];
	$extra_css = $options['extra_css'] ?? '';
	?>
    <a href="<?= esc_url( get_permalink( $id ) ) ?>" class="project-item <?= $extra_css ?>">
        <div class="col-preview-image">
			<?php $image = get_field( 'preview_image', $id ); ?>
			<?php if ( $image && is_array( $image ) ): ?>
                <figure>
                    <picture>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </picture>
                </figure>
			<?php endif; ?>
        </div>
        <div class="col-text">
            <h3 class="client"><?= get_the_title( $id ) ?></h3>
        </div>
    </a>
<?php }