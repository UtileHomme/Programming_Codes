$(document).ready(function()
{
    var username = prompt('Please enter your name');

    // alert(user_name);
    //send username to users.php, action: joined
    //we are sending the username as entered in the prompt so that it can be inserted into the db
        $.post('php/users.php', {username: username, action: 'joined'});

    setInterval(function()
    {
        //get list of users, action: list
        $.post('php/users.php',{ action1: 'list'}, function(data)
        {
            $('#users_online').html(data);
        }
    )
    }, 500
);

    // $(window).unload(function()
    // {
    //     //remove user_name, action: left
    // });

});
