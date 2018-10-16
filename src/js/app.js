import jquery from 'jquery';
import Flickity from 'flickity';
import 'flickity/dist/flickity.css';
import 'fullpage.js/dist/jquery.fullpage.css'
// import { Transform } from 'stream';

try {
    window.$ = window.jQuery = jquery
    require('fullpage.js')
} catch (e) {
    console.error(e)
}

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
     * Fullpage slider
     */
    const items = ['header-banner'];

    const pageParams = {
        menu: '#app-header',
        anchors: items,
        sectionSelector: 'section',
    }

    if ($('#fullpage')) {
        $('#fullpage').fullpage(pageParams);
    }

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

})(jQuery)