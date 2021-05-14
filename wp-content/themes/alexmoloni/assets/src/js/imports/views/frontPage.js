import helpers from "../helpers";

let section1;
let videoContainer;
let panelLeft;
let panelRight;
let panelTop;
let panelBottom;

function aimateVideoOnScroll() {

    if (helpers.isMobile()) {
        return;
    }

    let tl = gsap.timeline();
    tl.to(panelLeft, {xPercent: -70});
    tl.to(panelRight, {xPercent: 70}, 0);
    tl.to(panelTop, {yPercent: -70}, 0);
    tl.to(panelBottom, {yPercent: 70}, 0);


    ScrollTrigger.create({
        animation: tl,
        trigger: section1,
        start: 'bottom bottom',
        end: '90% 100px',
        scrub: true,
        pin: true,
        toggleActions: 'restart restart restart reverse',
    });

}


function init() {
    section1 = document.querySelector('main .section-1');
    videoContainer = section1.querySelector('.video-container');
    panelLeft = videoContainer.querySelector('.panel-left');
    panelRight = videoContainer.querySelector('.panel-right');
    panelTop = videoContainer.querySelector('.panel-top');
    panelBottom = videoContainer.querySelector('.panel-bottom');
    aimateVideoOnScroll();
}

export default function () {
    if ( !document.body.matches('.home') ) {
        return;
    }
    init();

}