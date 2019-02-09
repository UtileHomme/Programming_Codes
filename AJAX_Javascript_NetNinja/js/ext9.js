$(document).ready(function()
{
    // we are checking whether the check box has been changed or not
    $('#agree').change(function()
    {
        //this will take the current state of the checkbox
        state = $(this).is(':checked');

        //if the value of "checkbox" is on, we enable the button so that "continue" is visible and clickable
        if(state==true)
        {
            $('#continue').removeAttr('disabled');
        }

        //if the value of "checkbox" has nothing, we add the "disable" attribute to the button
        else if(state==" ")
        {
            $('#continue').attr('disabled', 'disabled');
        }
    }
);
}
);
