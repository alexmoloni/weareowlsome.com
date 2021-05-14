<section class="section section-1">
    <div class="inner-container">
        <div class="posts-wrap">
			<?php $blog_posts = get_posts( [
				'post_type'        => 'post',
				'posts_per_page'   => - 1,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'fields'           => 'ids',
				'suppress_filters' => 0
			] );
			foreach ( $blog_posts as $post_id ):
				$image = is_array( get_field( 'thumbnail_image', $post_id ) ) ? get_field( 'thumbnail_image', $post_id ) : false;
				?>
                <a href="<?= esc_url( get_permalink( $post_id ) ) ?>" class="post-item js-fade-in-on-scroll">
					<?php if ( $image ): ?>
                        <figure>
                            <img src="<?= $image['sizes']['medium_large'] ?>" alt="<?= $image['alt'] ?>">
                        </figure>
					<?php endif; ?>
                    <h2 class="title"><?= get_the_title( $post_id ) ?></h2>
                </a>
			<?php endforeach; ?>
        </div>
    </div>
</section>

<?php


