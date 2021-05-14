import singlePostPage from "./imports/views/singlePostPage";

const $ = jQuery.noConflict();
import widgets from './imports/widgets/index';
import frontPage from "./imports/views/frontPage";
import animations from "./imports/animations";
import pageWork from "./imports/views/pageWork";
import pageAbout from "./imports/views/pageAbout";

//DOM Content Loaded
$(document).ready(function () {
    animations.init();
    widgets();
    frontPage();
    pageWork();
    pageAbout();
    singlePostPage();
});

window.addEventListener('load', function(){
    $("#preload-overlay").fadeOut("slow");
    $('body').addClass('js-loaded');
});