$(document).ready(function($) {
    $('.bars-parent, #bars').on('click', function() {
        $('.menu').toggleClass('widthToggle');
        $('.menu-list').fadeToggle();
    });
    $('.bars-parent').on('click', function() {
        $(this).toggleClass('change');
    });
    $('.dotOne, .faa-burst, .faa-burstBig').hover(function() {
        $('.dot-text-one').toggle();
    });
    //toggle fade for main text 
    var slider = $('.overlay'),
        children = slider.children('div'),
        lenght = children.length,
        i = 0,
        mySlider = function() {
            children.eq(i).fadeOut(100, function() {
                i++;
                if (i === lenght) {
                    i = 0;
                }
                children.eq(i).fadeIn();
            });
        };
    children.not(':first').hide();
    setInterval(mySlider, 3000);
});