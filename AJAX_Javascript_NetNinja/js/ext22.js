$(document).ready(function() {
    $('#agree').attr('disabled','disabled');

    $('#terms').scroll(function()
    {
        //this is the height of the textarea
        var textarea_height = $(this)[0].scrollHeight;

        //this is the height of the inner part of the textarea
        var scroll_height = textarea_height - $(this).innerHeight();

        //returns the current position of the scroll top
        var scroll_top = $(this).scrollTop();

        if(scroll_top== scroll_height)
        {
            $('#agree').removeAttr('disabled');
        }
    }
);
});
