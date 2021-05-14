<?php
use alexito\Helpers;
?>
<section class="section section-3">
    <div class="container-singular-view">
        <div class="gallery">
			<?php $gallery = get_field( 'gallery' );
			if (!$gallery) {
			    $gallery = [];
            }
			foreach ( $gallery as $image ):
				?>
                <figure class="gallery-image js-fade-in-on-scroll">
                    <picture>
                        <source media="(max-width: 700px)" srcset="<?= $image['sizes']['large'] ?>">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </picture>
                </figure>
			<?php endforeach; ?>
        </div>
		<?php backToAllLink( [
			'text' => __( 'Back to all projects', 'alexmoloni' ),
			'link' => Helpers::wpmlLinkMaintainCurrentLanguage(site_url('work'))
		] ); ?>
    </div>
</section>


