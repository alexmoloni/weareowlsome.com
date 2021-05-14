const $ = jQuery.noConflict();
import helpers from "../helpers";


function initRotateBadge() {
    const badge = document.querySelector('.badge');
    if ( !badge ) {
        return;
    }
    let rotation = 360;
    let end = "0 50px";
    if ( helpers.isMobile() ) {
        rotation = 540;
        end = "100% top";
    }
    gsap.to(badge, {
        scrollTrigger: {
            trigger: badge,
            start: "bottom bottom",
            end,
            scrub: true,
        },
        rotation,
        scaleX: 0.92,
        scaleY: 0.92,
    });

}

function initTeamHeadingAnimation() {
    const heading = document.querySelector('.js-animate-heading');
    if ( !heading ) {
        return;
    }

    let start = 'top 95%';
    let x = '20%';
    if ( helpers.isMobile() ) {
        start = '60px 80%';
        x = '20%';
    }

    gsap.to(heading, {
        scrollTrigger: {
            trigger: heading,
            start,
            end: "300% 0",
            scrub: true,
        },
        x,
        ease: "slow(0.7, 0.7, false)"
    });


}

function initPartnersSlider() {
    const featuredSlider = $('.featured-slider');

    if ( featuredSlider.length < 1 ) {
        return;
    }
    const slider = featuredSlider.slick({
        arrows: false,
        dots: false,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 0,
        infinite: true,
        cssEase: 'linear',
        speed: 3000
    })
}

function init() {
    initRotateBadge();
    initTeamHeadingAnimation();
    initPartnersSlider();
}

export default function () {
    if ( !document.body.matches('.page-template-page_about') ) {
        return
    }
    init();
}