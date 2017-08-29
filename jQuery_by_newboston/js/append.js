$('#button').click(function()
{
    //whatever the user enters into the input field, we want to append to the sentence
    var name = $('#name').val();
    $('#sentence').append(name);
}
);
