const $ = jQuery.noConflict();
import constants from '../constants';
import scrolling from "../scrolling";

const main_header = $('#main-header');
const mainNav = $('#main-navigation');
const mainElem = $('main.main');
const menuItem = mainNav.find('.menu-item a');
const shadow = $('#header-menu-overlay');
const hamburger = $('#header-menu-hamburger');
let headerSpacer = $('#header-spacer');
const topBar = main_header.find('.topbar');


function mobileMenu() {


    hamburger.click(function () {

        //fires when closing menu
        if ( hamburger.is('.is-active') ) {
            closeMenu();
        }
        //fires when opening menu
        else {
            openMenu();
        }
    });


    var hammer = new Hammer(mainNav[ 0 ]);

    hammer.on("swiperight", function (ev) {
        //prevent on firing when in desktop
        if ( !mainNav.is('.is-open') ) {
            return;
        }
        closeMenu();
    });

    shadow.click(function () {

        //fires when closing menu
        if ( shadow.is('.-visible') ) {
            closeMenu();
        }
    });

    $('.js-close-main-navigation').on('click', function (ev) {
        if ( !mainNav.is('.is-open') ) {
            return;
        }
        closeMenu();
    });

    menuItem.click(function () {
        if ( !mainNav.is('.is-open') ) {
            return;
        }
        closeMenu();
    });

    function init() {
        if ( main_header.is('.mobile-menu-nav-space-for-header') ) {
            mainNav.css('top', constants.headerAndAdminBarOffsetTop());
        } else {
            if ($('#wpadminbar').length > 0) {
            mainNav.css('top', constants.adminBarOffsetTop());
            }
        }
    }


    function closeMenu() {
        hamburger.removeClass('is-active');
        mainNav.removeClass('is-open');
        mainNav.attr('aria-expanded', 'false');
        mainElem.removeClass('main-menu-open');
        shadow.removeClass('-visible');
        scrolling.unlockScrolling();
    }

    function openMenu() {
        hamburger.addClass('is-active');
        mainNav.addClass('is-open');
        mainNav.attr('aria-expanded', 'true');
        mainElem.addClass('main-menu-open');
        shadow.addClass('-visible');
        scrolling.blockScrolling();
    }

    init();
}

function stickyMenu() {
    if ( main_header.is('.sticky-on-load') ) {
        stickyOnLoad();
    }
    else if ( main_header.is('.sticky-on-scroll') ) {
        stickyOnScroll()
    }
}


function stickyOnLoad() {

    main_header.addClass('sticky');

    if ( main_header.is('.add_header_spacer') ) {
        if ( headerSpacer.length === 0 ) {
            $('<div id="header-spacer"></div>').insertBefore(main_header);

        }
        //add spacer height
        headerSpacer.height(constants.headerHeight());
    }


    //dont add top on homepage, since header is not fixed there, but only if on desktop
    if ( $('#wpadminbar').length ) {
        main_header.css('top', $("#wpadminbar").outerHeight());
    }

    if ( main_header.is('.has-topbar') ) {
        let topbar_visible = true;


        function checkScroll() {
            if ( window.scrollY === 0 ) {
                topBar.slideDown();
                topbar_visible = true;
            }
            else if ( window.scrollY > 0 && topbar_visible ) {
                topBar.slideUp();
                topbar_visible = false;
            }
        }

        //init - the browser maybe already scrolled on init
        checkScroll();

        window.onscroll = checkScroll;
    }


}

function stickyOnScroll() {
    let waypoints = $('#main-header').waypoint({
        handler: function (direction) {
            const header = $(this.element);

            if ( 'down' === direction ) {
                header.addClass('sticky');
                if ( $('#wpadminbar').length ) {
                    header.css('top', $("#wpadminbar").outerHeight());
                }
            }
            else if ( 'up' === direction ) {
                $(this.element).removeClass('sticky');
                if ( $('#wpadminbar').length ) {
                    header.css('top', '');
                }
            }
        },
        offset: function () {
            return -this.element.clientHeight
        }
    })
}


export default function () {
    if ( main_header.length < 1 ) {
        return;
    }
    mobileMenu();
    stickyMenu();
}
