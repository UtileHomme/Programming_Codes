$('#copy_button').click(function()
{
    //this will capture the value from the '#text' id
    var text = $('#text').html();

    //here, we are placing it in the second "id"
    $('#copy').html(text);
}
);
