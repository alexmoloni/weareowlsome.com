<section class="section section-3">
	<?php

	$home_projects = get_field( 'project_for_home', 'options' );
	/** @var WP_Post $project */
	$i = 0;
	if (!$home_projects) {
		$home_projects = [];
    }
	foreach ( $home_projects as $id ):
		$i ++;
		?>
        <a href="<?= esc_url( get_permalink( $id ) ) ?>" class="project-row row-<?= $i ?>">
            <div class="col-preview-image">
                <figure>
                    <picture>
						<?php $image = get_field( 'preview_image', $id );
						?>
                        <source media="(min-width: 2000px)" srcset="<?= $image['url'] ?>">
                        <source srcset="<?= $image['sizes']['large'] ?>">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </picture>
                </figure>
            </div>
            <div class="col-text">
                <h2>
                    <span class="slogan js-fade-in-on-scroll"><?= get_field( 'slogan', $id ) ?></span>
                    <span class="client js-fade-in-on-scroll"><?= get_the_title( $id ) ?></span>
                </h2>
                <div class="arrow js-fade-in-on-scroll"></div>
            </div>
        </a>
	<?php
	endforeach;
	?>
    <a class="link js-fade-in-on-scroll" href="<?= \alexito\Helpers::wpmlLinkMaintainCurrentLanguage(site_url('work'))?>"><?php svgHighlightedWord(['text' => get_field('s3_text_link'), 'type' => 'under', 'stroke_width' => 2]); ?></a>
</section>