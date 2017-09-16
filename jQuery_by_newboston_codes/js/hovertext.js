// 'e' is an object out here which has been passed as a parameter
$('.hover').mousemove(function(e)
{
    // we are displaying the mouse 'x' and 'y' coordinates
    //these coordinates are relative to the document
    // $('#co').text('x: ' + e.clientX + 'y: '  + e.clientY);

    //will retrieve the value of the 'hovertext' attribute set in the 'anchor' tag
    var hovertext = $(this).attr('hovertext');

    $('#hoverdiv').text(hovertext).show();

    //we are setting the top and left property when we hover
    $('#hoverdiv').css('top', e.clientY+15).css('left', e.clientX+15);
}
).mouseout(function()
{
    //to hide the hoverdiv when the cursor leaves the links
    $('#hoverdiv').hide();
}
);
