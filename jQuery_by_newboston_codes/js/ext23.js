$(document).ready(function() {
    //divide by 1000 to get 'seconds'
    eventTime = Date.parse('12 September 2017')/1000;
    currentTime = Math.floor(jQuery.now()/1000);

    seconds = eventTime - currentTime;

    days = Math.floor(seconds/(60*60*24));

    $('#days').text('Only ' +days + ' days until the event');
});
