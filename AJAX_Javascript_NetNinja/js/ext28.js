$(document).ready(function() {
    $('.emoticon').click(function()
    {
        //get the value of the textarea content

        //this is the scenario when the person doesn't type anything and puts an emoticon
        var textarea_val = jQuery.trim($('#comment').val());

        //get the value of the emoticon button that is clicked
        var emoticon_val = $(this).attr('value');

        //if there is no content, then do no add a space before the emoticon
        if(textarea_val == '')
        {
            var sp = '';
        }else
        {
            var sp = ' ';
        }

        //remove all content and append it along with the emoticon
        //focus ensures that after clicking on the emoticon, the person doesn't have to click
        // inside the textarea to get the cursor
        $('#comment').focus().val(textarea_val + sp + emoticon_val + sp);
    }
);
});
