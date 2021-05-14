import helpers from "../helpers";
import anime from 'animejs/lib/anime.es.js';

function init() {
    const btns = document.querySelectorAll('.svg-highlighted-word');
    btns.forEach( btn => handleHover(btn) );

    function handleHover(btn) {
        const path = btn.querySelector('path');
        const text = btn.querySelector('.text');
        const length = path.getTotalLength();
        path.style.strokeDasharray = String(length);
        path.style.strokeDashoffset = String(length);
        const easing = 'easeInQuad';
        const duration = 150;
        text.addEventListener('mouseenter', ev => {
            anime({
                targets: path,
                strokeDashoffset: [anime.setDashoffset, 0],
                easing: easing,
                duration: duration,
            });
        });
        text.addEventListener('mouseleave', ev => {
            anime({
                targets: path,
                strokeDashoffset: [0, anime.setDashoffset],
                easing: easing,
                duration: duration,
            });
        });
    }

}

export default function () {
    init();
}