<?php

function singularViewMainImage( $options = null ) {
	$image_arr = $options['image_arr'] ?? get_field( 'main_image' );
	?>
    <div class="singular-view-main-image js-fade-in-on-scroll">
        <div class="container-singular-view">
            <div class="main-image-wrap">
				<?php if ( $image_arr && is_array( $image_arr ) ): ?>
                    <figure class="main-image js-parallax-image">
                        <picture>
                            <source media="(max-width: 700px)" srcset="<?= $image_arr['sizes']['large'] ?>">
                            <img src="<?= $image_arr['url'] ?>" alt="<?= $image_arr['alt'] ?>">
                        </picture>
                    </figure>
				<?php endif; ?>
            </div>
        </div>
    </div>
<?php }