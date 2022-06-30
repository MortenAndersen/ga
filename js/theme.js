// @codekit-prepend "bx-slider.js", "fitvids.js", "lightbox.js" quiet;

/*global jQuery*/
(function ($) {
    "use strict";
    $(document).ready(function () {

        // Video
        $('.video, .wp-block-embed__wrapper').fitVids();

        // Lightbox
        $('.lightbox, .wp-block-gallery a, .wp-block-image a').attr('data-lightbox', 'content-image');

        // Menu icon open
        $('.js-m-o').click(function() {
            $(this).toggle();
            $('.m-c').toggle();
            $('body').toggleClass('mobile-menu-open');
            $('.js-m-tog').show();
        });

        // Menu icon close
        $('.js-m-c').click(function() {
            $(this).toggle();
            $('.m-o').toggle();
            $('body').removeClass('mobile-menu-open');
            $('.js-m-tog').hide();
        });

        / MOBILE MENU //
        $('.main-m a').click(function() {
            $('.main-m a').removeClass('active');
            $('.main-m ul').removeClass('active-trail');
            $(this).addClass('active');
        });

        // Sub menu trigger
        $('.main-m ul').parent('li').append('<span class="menu-trigger" aria-label="Åben undermenu"></span>');

        // Sub menu toggle
        $('.current_page_ancestor > .menu-trigger').addClass('active-trigger');
        $('.menu-trigger').click(function() {
            $(this).siblings('ul').slideToggle().toggleClass('mobile-sibling-open');
            $(this).toggleClass('active-trigger');
        });

        // Sub menu toggle uden link - MegaMenu
        $('.m-head > a').click(function() {
            $(this).siblings('ul').slideToggle().toggleClass('mobile-sibling-open');
            $(this).toggleClass('active-trigger');
            $(this).siblings('span').toggleClass('active-trigger');
        });

        $('.sub-menu li:has(ul)').addClass('has-sub'); 

        // Detect scroll
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll > 120) {
                $('.sti-hea').addClass("scroll");
            } 
            if ( scroll < 100) {
                $('.sti-hea').removeClass("scroll");
            }

            if (scroll > 120) {
                $('.g-t-t').addClass("ggt-active");
            } 

            if (scroll < 100) {
                $('.g-t-t').removeClass("ggt-active");
            } 
        });
   

}); 


}(jQuery)); 