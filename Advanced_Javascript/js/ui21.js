var min_value = 1;
var max_value = 200;

$('#slider').slider({

    min: min_value,
    max: max_value,
    range: true,
    values: [20,40],

    //step:5  (will mean that the slider will increment by 5 pounds)
    slide: function(event, ui)
    {
        //we are placing the "value" from the "ui" into the "slider" value
        $('#slider_value').html('&pound;' + ui.values[0] + ' to  &pound' + ui.values[1]);
    }
});
