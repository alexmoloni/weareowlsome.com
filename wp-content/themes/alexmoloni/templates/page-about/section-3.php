<section class="section section-3 js-fade-in-on-scroll">
<?php $acf_featured = get_field('featured') ?>
    <h2 class="heading-3 heading"><?= $acf_featured['heading']; ?></h2>
    <div class="container">
        <div class="featured-slider">
	        <?php
	        $partners = $acf_featured['featured_on'];
	        foreach ( $partners as $partner ):
		        ?>
                <div class="slide">
                    <img src="<?= $partner['image']['sizes']['medium'] ?>" alt="<?php $partner['image']['alt'] ?>">
                </div>
	        <?php endforeach; ?>
        </div>

    </div>

</section>

