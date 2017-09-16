$(document).ready(function() {

    //we can choose "pointer" cursor too
    //"opacity" is for choosing the visibility
    //"revert" will cause the element to go back to its original position
    $('#drag').draggable({ cursor: 'crosshair' , opacity: 0.60, revert: true, revertDuration: 5000,
    start: function()
    {
            $('#event').text('Dragging started');
    },
    drag: function()
    {
        $('#event').text('Dragging');
    },
    stop: function()
    {
        $('#event').text('Dragging stopped');
    }
} );
});
