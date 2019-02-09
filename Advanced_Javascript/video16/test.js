//on a webpage, bubbling means that when we have an event on an element, the execution of the event goes from the bottom to the top of body

$('#parent').click(
    function ()
    {
        console.log('parent clicked');
     }
);

$('#child').click(
    function ()
    {
        console.log('child clicked');
     }
);
