import $ from 'jquery';

$(document).ready(function() {
    $('.navbar-menu > .menu li.menu-item-has-children').mouseleave(function() {
        $(this).children('ul').stop(true, false, true).slideUp(300);
    });
    $('.navbar-menu > .menu li.menu-item-has-children').mouseenter(function() {
        $(this).children('ul').stop(true, false, true).slideDown(300);
    });
});