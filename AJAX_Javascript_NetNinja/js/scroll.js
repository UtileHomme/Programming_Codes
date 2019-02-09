$('#some_text').scroll(function()
{
  //This will be printed as we scroll through the textarea
  var scroll_pos = $('#some_text').scrollTop();
  $('#some_feedback').html('You have scrolled and are at position ' + scroll_pos);
}
);
