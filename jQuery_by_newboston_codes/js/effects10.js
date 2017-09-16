$(document).ready(function() {
    $('.fadeto').css('opacity','0.4');
        //speed , opacity
        $('.fadeto').mouseover(function()
        {
            //we only want to fadein one element at a time and fadeout the other
            $(this).fadeTo(100, 1);
            $('.fadeto').not(this).fadeTo(100,0.4);
        }
    );
    }
);
