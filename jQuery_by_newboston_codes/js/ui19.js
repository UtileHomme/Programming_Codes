$('#save').click(function()
{
    $('#dialog').attr('title','Saved').text('Settings were saved').dialog({ buttons:
        {
            //when the button defined "Ok" is clicked , run this function
            'Ok': function()
            {
                //close the dialog
                $(this).dialog('close');
            }
            //closeonEscape will close the dialog when "Esc" key is pressed
            //draggable is set to false if we don't want it to be dragged all through the page
            //resizable makes the dialog box static
            //show helps apply animations
            //modal ensures that the background things are disabled and the dialog box is to closed first
            //positions sets the position for the dialog box - 'top/bottom',



        }, closeonEscape: true, draggable: false, resizable:false, show: 'fade', modal: true,
        position: ['left','top']
    });
}
);
