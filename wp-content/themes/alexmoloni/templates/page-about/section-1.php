<?php
$acf_section1 = get_field( 'section_1' );
?>
<section class="section section-1 custom-scroll-hover">
    <div class="inner-wrap">
        <h1 class="heading-1 heading js-fade-in-on-scroll"><?= $acf_section1['heading'] ?></h1>
        <div class="row-bottom">
            <div class="mobile-only mobile-bg"></div>
            <div class="col-left js-fade-in-on-scroll">
                <figure>
                    <img src="<?= $acf_section1['image']['sizes']['medium_large'] ?>" alt="<?= $acf_section1['image']['alt'] ?>">
                </figure>
            </div>
            <div class="col-right">
                <a class="badge js-fade-in-on-scroll" href="mailto:<?= get_field('email', 'options'); ?>">
                    <figure>
                        <img src="<?= $acf_section1['icon']['url']; ?>" alt="<?= $acf_section1['icon']['alt']; ?>">
                    </figure>
                </a>
                <div class="services-wrap">
                    <figure class="icon js-fade-in-on-scroll">
                        <img src="/images/svg/eye.svg" alt="Services">
                    </figure>
                    <div class="heading js-fade-in-on-scroll"><?= $acf_section1['services_heading'] ?></div>
                    <ul class="services-list js-fade-in-on-scroll">
						<?php
						$services = $acf_section1['services'];
						foreach ( $services as $service ):?>
                            <li><?= $service['service_text'] ?></li>
						<?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>