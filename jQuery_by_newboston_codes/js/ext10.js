$(document).ready(function()
{
    $('#combine').click(function()
    {
        var combined_text = ' ';

        //index gives the order number of the element
        //using "each" function , we are looping through each selector
        $('input[type=text]').each(function()
        {
            combined_text += $(this).val() + ' ';
        }
    );

    $('#combined').text(combined_text);
}
);
}
);
