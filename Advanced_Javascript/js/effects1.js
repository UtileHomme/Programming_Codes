$(document).ready(function()
{
    $('#a_div').hide();
}
);

$('#a_button').click(function()
{
    $('#a_div').show('slow','linear',function()
    {
        alert('Element shown');
    }
);
}
);
