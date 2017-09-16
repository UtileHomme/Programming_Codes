$('#toggle_message').click(function()
{
  // set the value variable equal to the present attribute value
  var value = $('#toggle_message').attr('value');
  $('#message').toggle('fast');

  //if the retrieved value is 'Hide', set it to 'Show'
  if(value=='Hide')
  {
    $('#toggle_message').attr('value','Show');
  }
  else if(value=='Show')
  {
    $('#toggle_message').attr('value','Hide');
  }
}
);
