const $ = jQuery.noConflict();



export default {
    mobile_breakpoint: 800,
    xs_breakpoint: 500,
    adminBarOffsetTop() {
        return $("#wpadminbar").outerHeight();
    },
    headerAndAdminBarOffsetTop: function () {
        return $('.main-header').outerHeight() + $("#wpadminbar").outerHeight();
    },
    headerHeight: function () {
        return $('.main-header').outerHeight()
    },
}

