$('#save_button').click(function() {

    var name = $('#name').val();
    var email = $('#email').val();

    $('#save_status').text('Loading...');

    $.post('php/settings.php', { name: name , email:email},function(data)
    {
        $('#save_status').text(data);
    }
);

});
