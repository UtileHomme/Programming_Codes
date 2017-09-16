$(document).ready(function() {

    //we can choose "pointer" cursor too
    //"opacity" is for choosing the visibility
    //"grid" will snap to particular areas in a grid
    $('#drag').draggable({ cursor: 'crosshair' , opacity: 0.60, grid: [20,20] } );
});
