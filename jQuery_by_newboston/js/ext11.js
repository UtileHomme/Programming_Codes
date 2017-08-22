$(document).ready(function()
{
    $('#combine').click(function()
    {

        var failed = false;

        //index gives the order number of the element
        //using "each" function , we are looping through each selector
        $('input[type=text]').each(function()
        {
            if(!$(this).val())
            {
                failed = true;
            }
        }
    );

    //if none of the fields have been filled
    if(failed==true)
    {
        alert('Fill out all fields');
    }
    else if(failed == false)
    {
        alert('Thanks for filling out')
    }
}
);
}
);
