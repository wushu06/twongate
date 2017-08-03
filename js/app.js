$(document).ready(function($) {
    $('.bars-parent, #bars').on('click', function() {
        $('.menu').toggleClass('widthToggle');
        $('.bars').toggleClass('colorToggle');
        $('.menu-list').fadeToggle();
    });
    $('.dotOne, .faa-burst, .faa-burstBig').hover(function() {
        $('.dot-text-one').toggle();
    })
});