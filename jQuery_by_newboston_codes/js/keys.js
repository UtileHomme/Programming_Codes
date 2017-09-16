$('#user_text').keyup(function()
{
  // when we use the keydown function, it will run the event first and then grab the value
  var user_text = $('#user_text').val();

  //this will output the value into user_text_feedback
  $('#user_text_feedback').html(user_text);
}
);
