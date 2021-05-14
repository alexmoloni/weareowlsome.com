<section class="section section-2">
    <div class="container-singular-view">
        <div class="title js-fade-in-on-scroll"><?= get_the_title() ?></div>
        <div class="date-excerpt-wrap js-fade-in-on-scroll">
            <div class="date-box"><?= __('Published', 'alexmoloni') ?><br><?= get_the_date('d.m.Y') ?></div>
            <p class="excerpt"><?= get_field( 'excerpt' ); ?></p>
        </div>
    </div>
</section>
