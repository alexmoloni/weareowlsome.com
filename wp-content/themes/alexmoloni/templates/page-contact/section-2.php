<section class="section section-2">
    <div class="container">

        <a href="mailto:<?= get_field( 'email', 'options' ) ?>" class="email js-fade-in-on-scroll">
			<?php svgHighlightedWord( [
				'text'         => get_field( 'email', 'options' ),
				'stroke_width' => 1
			] ); ?>
        </a>
        <h3 class="text-2 js-fade-in-on-scroll"><?= get_field( 'text_2' ); ?></h3>
        <div class="arrow-down mobile-only">
            <img src="/images/svg/arrow-down-owl.svg" alt="Scroll down">
        </div>
        <div class="socials mobile-only">
            <a rel="nofollow" href="<?= get_field( 'behance_link', 'options' ); ?>" class="behance"><?php svgHighlightedWord( [
					'text' => 'Behance'
				] ); ?></a>
            <a rel="nofollow" href="<?= get_field( 'instagram_link', 'options' ); ?>" class="instagram"><?php svgHighlightedWord( [
					'text' => 'Instagram'
				] ); ?></a>
            <a rel="nofollow" href="<?= get_field( 'facebook_link', 'options' ); ?>" class="facebook"><?php svgHighlightedWord( [
					'text' => 'Facebook'
				] ); ?></a>
        </div>
		<?php
		owlIcon( [
			'extra_css' => 'mobile-only',
			'as_link'   => false
		] );
		?>
        <p class="text-3 js-fade-in-on-scroll"><?= get_field( 'text_3' ); ?></p>
    </div>
</section>