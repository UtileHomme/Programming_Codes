$('#button').click(function()
{
    $.ajax(
        {
            url: 'pag.html',
            statusCode:
            {
                    404: function()
                    {
                        $('#content').text('Page not found');
                    }
            },
            success: function(data)
            {
                $('#content').html(data);
            }
        }
    );
}
);
