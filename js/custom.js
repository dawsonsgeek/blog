(function ($) {
    "use strict";
    
    /* CALCULATE PAGE TITLE NEGATIVE MARGIN */
    var adjustPageTitle = function () {
        var distance = $('#dawsonsgeek-main-container > .container').offset().left - 295;
        $('#dawsonsgeek-main-container').find('.dawsonsgeek-page-title').css('margin-right', -distance);
        $('#dawsonsgeek-main-container').find('.dawsonsgeek-page-title').css('padding-right', distance);
        $('#dawsonsgeek-main-container').find('.dawsonsgeek-page-title').css('opacity', 1);
    };

    /* HORIZONTAL CARD IMAGES */
    var cardImages = function () {
        $('body').find(".card-horizontal-right").each(function () {
            if ($(this).attr('data-img')) {
                var card_img = $(this).data('img');
                $(this).css('background-image', 'url("' + card_img + '")');
            }
        });
    };
    
    /* GO TO TOP BUTTON */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 300) {
            $("#dawsonsgeek-gototop").css('bottom', 0);
        } else {
            $("#dawsonsgeek-gototop").css('bottom', '-50px');
        }
    });
    
    $("#dawsonsgeek-gototop").on('click', function (e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    
    /* FULLSCREEN SEARCH */
    $("#dawsonsgeek-open-search").on('click', function (e) {
        e.preventDefault();
        $("#dawsonsgeek-fullscreen-search").fadeIn(200);
    });
    
    $("#dawsonsgeek-close-search").on('click', function (e) {
        e.preventDefault();
        $("#dawsonsgeek-fullscreen-search").fadeOut(200);
    });

    /* MAIN MENU */
    $('#dawsonsgeek-main-menu').find(".dawsonsgeek-menu-ul > li > a").on('click', function () {
        var nxtLink = $(this).next();
        if ((nxtLink.is('ul')) && (nxtLink.is(':visible'))) {
            nxtLink.slideUp(300);
            $(this).removeClass("dawsonsgeek-menu-up").addClass("dawsonsgeek-menu-down");
        }
        if ((nxtLink.is('ul')) && (!nxtLink.is(':visible'))) {
            $('#dawsonsgeek-main-menu').find('.dawsonsgeek-menu-ul > li > ul:visible').slideUp(300);
            nxtLink.slideDown(300);
            $('#dawsonsgeek-main-menu').find('.dawsonsgeek-menu-ul > li:has(ul) > a').removeClass("dawsonsgeek-menu-up").addClass("dawsonsgeek-menu-down");
            $(this).addClass("dawsonsgeek-menu-up");
        }
        if (nxtLink.is('ul')) {
            return false;
        } else {
            return true;
        }
    });
    
    /* MOBILE MENU */
    $("#dawsonsgeek-menu-toggle").on('click', function () {
        $("#dawsonsgeek-social-cell,#dawsonsgeek-main-menu").toggle();
    });
    
    /* EVENTS */
    $(document).ready(function () {
        adjustPageTitle();
        cardImages();
        $('#dawsonsgeek-main-menu').find('.dawsonsgeek-menu-ul > li:has(ul) > a').addClass("dawsonsgeek-menu-down");
        $('body').find('select').addClass('custom-select');
        $('body').find('.dawsonsgeek-masonry-grid').css('opacity', '1');
    });
    
    $(window).on('resize orientationchange', function () {
        adjustPageTitle();
    });
    
    $(window).on('load', function () {
        var grid = $('body').find('.dawsonsgeek-masonry-grid');
        salvattore.rescanMediaQueries(grid);
    });
    
})(jQuery);