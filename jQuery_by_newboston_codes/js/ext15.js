$(document).ready(function()
{
    $('ul').each(function()
    {
        this_sel = $(this);

        // if there is no "li" element in the "ul" , print empty something
        if(this_sel.has('li').length==0)
        {
            this_sel.after('Empty menu');
        }
    }
);
}
);
