$('#button').click(function()
{
    $.ajax(
        {
            url: 'page1.html',
            success: function(data)
            {
                $('#content').html(data);
            }
        }
    );
}
);
