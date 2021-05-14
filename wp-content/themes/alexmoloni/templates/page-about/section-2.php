<section class="section section-2">

    <h2 class="heading-2 heading js-animate-heading"><?= get_field( 's2_title' ); ?></h2>
    <div class="container">
        <div class="team">


			<?php $people = get_field( 'team' ); ?>
            <div class="row row-1 js-fade-in-on-scroll">
				<?php for ( $i = 0; $i < 3; $i ++ ):
					$person = $people[ $i ];
					?>
                    <div class="person <?= sanitize_title( $person['name'] ) ?>">
                        <figure>
                            <img src="<?= $person['image']['sizes']['medium_large']; ?>" alt="<?= $person['image']['alt']; ?>">
                        </figure>
                        <h3 class="heading-3 name"><?= $person['name'] ?></h3>
                    </div>
				<?php endfor; ?>
            </div>
            <div class="row row-2 js-fade-in-on-scroll">
				<?php for ( $i = 3; $i < 5; $i ++ ):
					$person = $people[ $i ];
					?>
                    <div class="person <?= sanitize_title( $person['name'] ) ?>">
                        <figure>
                            <img src="<?= $person['image']['sizes']['medium_large']; ?>" alt="<?= $person['image']['alt']; ?>">
                        </figure>
                        <h3 class="heading-3 name"><?= $person['name'] ?></h3>
                    </div>
				<?php endfor; ?>


            </div>
        </div>
        <div class="text"><?= get_field('text_under_team'); ?></div>
</section>