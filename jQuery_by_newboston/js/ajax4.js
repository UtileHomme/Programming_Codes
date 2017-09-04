$('#button').click(function()
{
    var name = $('#name').val();
    $.ajax(
        {
            url: 'php/page.ph',
            //sending the "name" variable to php file
            data: 'name='+name,
            success: function(data)
            {
                //retrieving that content
                $('#content').html(data);
            }
        }
    ).fail(function() {
        alert('An error occured');
    }).success(function()
    {

    }
).complete(function()
{
    
}
);
}
);
