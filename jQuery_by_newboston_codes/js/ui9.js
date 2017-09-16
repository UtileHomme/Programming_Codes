$(document).ready(function() {

$('#drag').draggable({ containment: 'document', revert: true });

//whenever we drop something inside the "div" we get an alert
$('#drop').droppable({ drop: function()
    {
        alert('Dropped');
    }
    })

});
