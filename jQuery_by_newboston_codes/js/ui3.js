$(document).ready(function() {
    //will constrain the drag space only to the inside of all scrolls not beyond that
    $('#drag').draggable({ containment: 'document' } );
});
