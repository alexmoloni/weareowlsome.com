import constants from './constants';

const $ = jQuery.noConflict();
let disableScroll = false;


function scrolling(target) {
    if ( target ) {
        const elemToScrollTo = $('#' + target);
        if ( !elemToScrollTo.length ) {
            return;
        }
        // var offset = $('#' + scrollTo).offset().top;
        const offset = elemToScrollTo.offset().top;

        //issue on chrome - scrolls back to top
        //adding a timeout solves it
        setTimeout(function () {
            const headerHeight = constants.headerAndAdminBarOffsetTop();
            $('html, body').animate({scrollTop: offset - headerHeight}, 1000);
        }, 100);
    }
}

function onePageScrolling() {
    $('.js-scroll-to').click(function (ev) {
        //if on homepage - animate scrolling
        if ( window.location.pathname === '/' ) {
            ev.preventDefault();
            window.location.hash = $(this).data('hash');
            scrolling($(this).data('scroll-to'));
        }
        //if not on homepage, redirect to homepage with hash
        else {
            window.location = '/#' + $(this).data('scroll-to')
        }
    })
}


function blockScrolling() {
    const scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
    ];
    const html = $('html'); // it would make more sense to apply this to body, but IE7 won't have that
    html.data('scroll-position', scrollPosition);
    html.data('previous-overflow', html.css('overflow'));
    html.css('overflow', 'hidden');
    window.scrollTo(scrollPosition[ 0 ], scrollPosition[ 1 ]);
    disableScroll = true;
}

function unlockScrolling() {
    // un-lock scroll position
    if (!disableScroll) {
        return
    }
    const html = $('html');
    const scrollPosition = html.data('scroll-position');
    html.css('overflow', html.data('previous-overflow'));
    window.scrollTo(scrollPosition[ 0 ], scrollPosition[ 1 ]);
    disableScroll = false;
}

function mobileBlockScrollListener() {
    document.ontouchmove = function (e) {
        if ( disableScroll ) {
            e.preventDefault();
        }
    }
}


function init() {
    mobileBlockScrollListener();
}


export default {
    init,
    blockScrolling,
    unlockScrolling
};


