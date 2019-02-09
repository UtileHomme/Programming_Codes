$('#username').keyup(function()
{
    //getting the value of what is typed inside the input field
    var username = $(this).val();

    $('#username_status').text('Searching....');

    if(username!='')
    {
        $.post('php/username_check.php', { username: username}, function(data)
        {
            $('#username_status').text(data);
        }
    );
    }
    else
    {
        $('#username_status').text('');
    }
}
);
