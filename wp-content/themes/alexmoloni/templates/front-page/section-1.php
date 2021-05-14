<section class="section section-1 custom-scroll-hover">
    <h1 data-fade-only-width="mobile" class="heading heading-1 js-fade-in-on-scroll"><?= get_field('s1_heading') ?></h1>
    <div class="video-container">
        <div class="panel panel-top"></div>
        <div class="panel panel-right"></div>
        <div class="panel panel-bottom"></div>
        <div class="panel panel-left"></div>
		<?php videoAsBg( [
			'src'        => '/videos/video-front.mp4',
			'bg_img_url' => '/images/front-page/section-1.png'
		] ); ?>
    </div>
</section>