$(document).ready(function() {

    //to take away the "px" part of the attribute value
    var current_top = parseInt($('#follow').css('top'));

    var speed = 1000;

    $('#follow').fadeIn(speed).click(function()
    {
        $(this).fadeOut(speed);
    }

);



    $(window).scroll(function()
    {
        var top = $(window).scrollTop();

        $('#follow').css('top', top + current_top);
    }
);
});
