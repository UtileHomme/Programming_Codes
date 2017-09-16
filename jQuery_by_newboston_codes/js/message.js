$('#hideshow').toggle(function()
{
    // when we click the link first time this happens
    $('#hideshow').text('Show');
    $('#message').hide();
}, function()
{
    // when we click the link second time this happens
    $('#hideshow').text('Hide');
    $('#message').show();
}
);
