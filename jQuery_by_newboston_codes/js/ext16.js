$(document).ready(function() {

    //also $('#div').css('height')  -- here we'll get the "px" along with the numerical value  -- use parseInt to only get the numerical value
    var div_height = $('#div').height();
    var div_width = $('#div').width();
    $('#div').text('Width: ' + div_width + ' / Height : ' + div_height);
});
