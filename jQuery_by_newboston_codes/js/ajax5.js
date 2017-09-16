$('#button').click(function()
{
    var name = $('#name').val();
    $.ajax(
        {
            //the variable which was being sent as "GET" earlier, will now be sent as "POST"
            type: 'POST',
            url: 'php/page.php',
            //sending the "name" variable to php file
            data: 'name='+name,
            success: function(data)
            {
                //retrieving that content
                $('#content').html(data);
            }
        }
    );
}
);
