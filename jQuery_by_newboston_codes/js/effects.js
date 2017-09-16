$('#a_button').click(function()
{
    $('#a_div').hide('fast','linear',function()
    {
        alert('Element hidden');
    }
);
}
);
