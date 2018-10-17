import jquery from 'jquery';
import Flickity from 'flickity';
window.jQuery = window.$ = jquery;
import 'flickity/dist/flickity.css';


(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').on('click', function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            menu.addClass('active');
        } else {
            menu.removeClass('active');
        }
    });

    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parent().addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parent().addClass('in-focus');
        } else {
            $(this).parent().removeClass('in-focus');
        }
    });

    /**
     * Services tabs
     */

    var servicesTabsNavItem = $('.services-tabs-nav-item');
    var servicesTabsContentItem = $('.services-tabs-content-img');

    $(servicesTabsNavItem).on('click', function () {
        $(servicesTabsNavItem).removeClass('active');
        $(this).addClass('active');
        $(servicesTabsContentItem).removeClass('active');
        $(servicesTabsContentItem).eq($(this).data('value')).addClass('active');
    });

    /**
     * Menu
     */
    var appHeader = $('#app-header');
    var appHeaderColor;
    var headerBannerColor;
    var sideColor;

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > $('#header-banner').offset().top) {
            headerBannerColor = $('#header-banner').data("color");
            $(appHeader).removeClass(sideColor).addClass(headerBannerColor);
        }
        if ($(this).scrollTop() > $('#side').offset().top) {
            sideColor = $('#side').data("color");
            $(appHeader).removeClass(headerBannerColor).addClass(sideColor);
        }
    })


    /**
     * Slider nav num
     */

    var sliderItem = $('.side-slider-item');
    var sideSliderNavNum = $('.slider-nav-num');

    for (var i = 0; i < sliderItem.length; i++) {
        sideSliderNavNum.append(`<div class="slider-nav-num-item">${i+1}</div>`);
    }

    var sideSliderNavNumItem = $('.slider-nav-num-item');
    $(sideSliderNavNumItem[0]).addClass('active')

    /**
     * Sliders side
     */
    if ($('.side-slider')) {

        var elem1 = document.querySelector('.side-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {

                prevNextButtons: false,
                cellAlign: 'left',
                contain: true,
                draggable: false,
                groupCells: 1
            });


            var prevArrowSide = document.querySelector('.slider-nav-arrow-item--prev');

            prevArrowSide.addEventListener('click', function () {
                flkty1.previous(false, false);
                $(sideSliderNavNumItem).removeClass('active');
                $(sideSliderNavNumItem[flkty1.selectedIndex]).addClass('active')
            });


            var nextArrowSide = document.querySelector('.slider-nav-arrow-item--next');

            nextArrowSide.addEventListener('click', function () {
                flkty1.next(false, false);
                $(sideSliderNavNumItem).removeClass('active');
                $(sideSliderNavNumItem[flkty1.selectedIndex]).addClass('active')
            });
        }
    }

})(jQuery)