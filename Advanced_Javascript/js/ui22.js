var min_value = 1;
var max_value = 100;

$('#slider').slider({

    min: min_value,
    max: max_value,
    //this makes the orientation top to bottom
    orientation: 'vertical',

    // step:5  (will mean that the slider will increment by 5 pounds)
    slide: function(event, ui)
    {
        //we are placing the "value" from the "ui" into the "slider" value
        $('#slider_value').html(ui.value);
    },
    stop: function(event, ui)
    {
        alert(ui.value);
    }
});
