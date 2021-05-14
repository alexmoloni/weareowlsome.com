<section class="section section-1">
	<?php singularViewMainImage(); ?>
    <div class="container-singular-view">
        <article class="title-content-wrap">
            <h1 class="title js-fade-in-on-scroll"><?= get_the_title() ?></h1>
            <div class="content-wrap">
                <div class="meta-info">
                    <p class="author">
                        By:<br>
						<?= get_field( 'author' ); ?>
                    </p>
                    <p class="reading-time"><?= get_field( 'reading_time' ); ?></p>
                </div>
				<?php the_content(); ?>
            </div>
        </article>
		<?php backToAllLink( [
			'text' => __( 'Back to all posts', 'alexmoloni' ),
			'link' => site_url( 'blog' )
		] ) ?>
    </div>
</section>
