import animations from "../animations";
import helpers from "../helpers";

function setFadeIns() {
    const content = document.querySelector('.content-wrap');
    const elems = content.querySelectorAll('p, figure, h2');
    elems.forEach(elem => {
        animations.setFadeInOnElem(elem);
    })
}

export default function () {
    if ( !helpers.isSinglePostPage() ) {
        return
    }
    setFadeIns();
}