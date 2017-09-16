$('#upload').click(function()
{
    var val = 0;
    //the variable "val" keeps increasing every 50 ms by 1
    var interval = setInterval(function()
    {
        val = val + 1;
        $('#pb').progressbar({ value: val});

        //percentage will go beyond if we don't break it
        $('#percent').text(val + '%');

        if(val == 100)
        {
            clearInterval(interval);
        }
    }, 50
    );
}
);
