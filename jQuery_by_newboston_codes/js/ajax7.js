function validate_email(email)
{
    $.post('php/email.php ',{ email: email },function(data)
    {
        $('#email_feedback').text(data);
    });

}

$('#email').focusin(function()
{
    //if the email id has not been entered
    if($('#email').val()==='')
    {
        //when the user focuses in the text field
        $('#email_feedback').text('Go on, enter a valid email address...');
    }
    else
    {
        //if the user has entered into the field, revalidate it
        //validating the email from the above function as soon as the user presses a button
        validate_email($('#email').val());

    }
}
).blur(function()
{
    //when the user focuses out of the text field , remove the email message
    $('#email_feedback').text(' ');
}
).keyup(function()
{
    //validating the email from the above function as soon as the user presses a button
    validate_email($('#email').val());
}
);
