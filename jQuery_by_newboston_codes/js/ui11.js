$(document).ready(function()
{
    $('.name,.place').draggable({ containment: 'document', revert: true });

    //whenever we drop something inside the "div" , "border" class will be added to it

    //"tolerance" is for applying the border only when the entire span is inside the border,
    // will the color change

    //intersect is by default, which takes 50% into consideration

    //tolerance: "touch" is when the span touches the border

    //Inside, "accept", we can mention the "classes" we want to be allowed to drop
    //we don't wish to drop london
    //"over" function is when we are inside and we hover
    $('#drop').droppable({ hoverClass: 'border', tolerance: 'pointer', accept: '.name', over: function()
    {
        $('#drop').text('Something has hover over me');
    },
    //"out" function is when we hover inside and take it out
    out: function()
    {
        $('#drop').text('Something has been dragged out');
    },
    //"drop" function
    drop:function()
    {
        $('#drop').text('Something dropped');
    }
});
});
