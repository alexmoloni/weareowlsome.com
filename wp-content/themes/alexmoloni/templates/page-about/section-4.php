<?php

use alexito\Helpers;

?>
<section class="section section-4">

    <h2 class="heading-3 heading js-fade-in-on-scroll"><?= get_field( 'categories_title' ); ?></h2>
    <div class="categories-container">
		<?php
		$categories = get_field( 'categories' );
		foreach ( $categories as $category ):
			$media_type = $category['image__video'];
			?>
            <div class="category-box js-fade-in-on-scroll">
				<?php if ( $media_type === 'Image' ): ?>
                    <figure>
                        <img src="<?= $category['image']['sizes']['large'] ?>" alt="<?= $category['image']['alt'] ?>">
                    </figure>
				<?php elseif ( $media_type === 'Video' ):
					?>
                    <video autoplay="" loop="" muted="" playsinline="">
						<?php
						//safari doesnt support webm format
						if ( Helpers::getBrowser() === 'safari' ): ?>
                            <source type="<?= $category['video_mp4']['mime_type'] ?>" src="<?= $category['video_mp4']['url'] ?>"/>
                            <img src="<?= $category['video_mp4']['icon'] ?>" alt="">
						<?php else: ?>
                            <source type="<?= $category['video']['mime_type'] ?>" src="<?= $category['video']['url'] ?>"/>
                            <img src="<?= $category['video']['icon'] ?>" alt="">
						<?php endif; ?>
                    </video>
				<?php endif; ?>
                <div class="name"><?= $category['name'] ?></div>
            </div>

		<?php endforeach; ?>
    </div>

</section>
