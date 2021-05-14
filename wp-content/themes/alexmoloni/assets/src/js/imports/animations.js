import helpers from "./helpers";

function initFixedSocials() {
    const fixedSocials = document.querySelector('.fixed-socials');

    if ( !fixedSocials ) {
        return;
    }

    let socialsTrigger = document.querySelector('.trigger-socials');
    let start = "top top";
    if ( !socialsTrigger ) {
        socialsTrigger = 'body';
        start = "800 top"
    }

    ScrollTrigger.create({
        trigger: socialsTrigger,
        start, //top of section 2 hits top of screen
        onEnter() {
            fixedSocials.classList.add('visible');
        },
        onLeaveBack() {
            fixedSocials.classList.remove('visible');
        }
    })

}

function initParallaxImage() {
    const image = document.querySelector('.js-parallax-image');
    if ( !image ) {
        return;
    }
    if ( helpers.isMobile() ) {
        return;
    }
    gsap.to(image, {
        scrollTrigger: {
            trigger: image,
            start: "top 10%",
            end: "100% 50px",
            scrub: true,
        },
        rotate: 4,
        scaleX: 1.7,
        scaleY: 1.7,
        yPercent: 30
    });
}

function setFadeInOnElem(elem) {

    if (elem.dataset.fadeOnlyWidth === 'mobile') {
        if (!helpers.isMobile()) {
            return;
        }
    }

    let start = 'top 80%';
    if ( helpers.isHomePage() && !helpers.isMobile() ) {
        start = 'top top';
    }

    const anim = gsap.fromTo(elem, {autoAlpha: 0, y: 50}, {duration: 1, autoAlpha: 1, y: 0});
    if ( elem.dataset.fadeFrom === 'bottom' ) {
        start = 'top 95%';

        if ( helpers.isHomePage() && !helpers.isMobile() ) {
            start = 'top 20%';
        }
    }

    if ( elem.dataset.fadeFrom === 'top' ) {
        start = 'top 20%';
    }

    ScrollTrigger.create({
        trigger: elem,
        start: start,
        animation: anim,
        toggleActions: 'play none none none',
        once: false,
        onEnter: self => {
            // If it's scrolled past, set the state
            // If it's scrolled to, play it
            self.progress === 1 ? anim.progress(1) : anim.play()
        }
    });

}


function initFadeInElements() {
    const elems = gsap.utils.toArray('.js-fade-in-on-scroll');

    if ( helpers.isMobile() ) {
        // return;
    }

    elems.forEach((elem) => {
        setFadeInOnElem(elem);
    });
}

function init() {
    gsap.registerPlugin(ScrollTrigger);
    initFixedSocials();
    initParallaxImage();
    initFadeInElements();
}

export default {
    init,
    setFadeInOnElem
}