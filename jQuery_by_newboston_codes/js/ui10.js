$(document).ready(function()
{
$('#drag').draggable({ containment: 'document', revert: true });

//whenever we drop something inside the "div" , "border" class will be added to it

//"tolerance" is for applying the border only when the entire span is inside the border,
// will the color change

//intersect is by default, which takes 50% into consideration

//tolerance: "touch" is when the span touches the border
$('#drop').droppable({ hoverClass: 'border', tolerance: 'fit' });
});
