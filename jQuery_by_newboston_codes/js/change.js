$('#list').change(function()
{
  //when we use a different option, this event will be triggered
  var list_value = $('#list').val();
  $('#list_feedback').html('You have selected ' + list_value);
}
);
