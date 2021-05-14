import constants from "./constants";

const isMobile = () => {
    return window.matchMedia(`(max-width:${constants.mobile_breakpoint}px)`).matches
};

const isStaging = () => {
    if(window.location.href.indexOf("bluesbrothers.co") > -1) {
        return true;
    }
};

const isMinWidth = (width) => {
    return window.matchMedia(`(min-width:${width}px)`).matches
};

const isMaxWidth = (width) => {
    return window.matchMedia(`(max-width:${width}px)`).matches
};

const isHomePage = () => {
  return window.location.pathname === '' || window.location.pathname === '/'
};

const isSinglePostPage = () => {
    return document.body.matches('.single-post');
};

export default {
    isMobile,
    isStaging,
    isMinWidth,
    isMaxWidth,
    isHomePage,
    isSinglePostPage
}