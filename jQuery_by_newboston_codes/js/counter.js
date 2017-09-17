function counter(time, url)
{
    //after every 1 second, we are going to append "a" to our counter span
    var interval = setInterval(function()
    {
        $('#counter').text(time);
        time = time -1;

        if(time==0)
        {
            //we wish to stop the interval as soon as time =0
            clearInterval(interval);
        window.location = url;
        }
    }, 1000);

}

$(document).ready(function() {
    counter(5, 'http://www.google.com');
});
