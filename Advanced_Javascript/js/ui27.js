$(document).ready(function() {
    $('li').draggable({ containment: 'document', revert: true,
    start: function()
    {
        //the name of the currently being dragged element
        contents = $(this).text();
        // alert()
    }

});

    //only "accept" the "li" elements or "class=item" element
    $('#list').droppable({hoverClass: 'border', accept: '.item',
    drop: function()
    {
        //pick the element that is picked , and drop it inside the box
        $('#list').append(contents + '<br>');
    }
 });
});
