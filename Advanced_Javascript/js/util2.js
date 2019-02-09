$(document).ready(function() {

    //this for refreshing the time every 1 second
    setInterval(function()
    {
        //this is for retrieving the present time
        var timestamp = jQuery.now();
        $('#time').text(timestamp);
    },1);
});
