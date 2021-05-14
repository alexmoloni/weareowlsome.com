import helpers from "../helpers";

function initMagicMouse() {
    if ( helpers.isMobile() ) {
        return;
    }
    const options = {
        "cursorOuter": "circle-basic",
        "hoverEffect": "pointer-blur",
        "hoverItemMove": false,
        "defaultCursor": false,
        "outerWidth": 15,
        "outerHeight": 15
    };
    magicMouse(options);
}

function init() {
    // initMagicMouse(); //for now disabled
}

export default function () {
    if ( !document.body.matches('.page-template-page_work') ) {
        return
    }
    init();
}