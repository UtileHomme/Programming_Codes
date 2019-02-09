$(document).ready(function()
{
  var text_max=55;

  $('#textarea_feedback').html(text_max + 'character remaining');

  // We are trying to print the number of characters remaining after text
  // has been typed in the textarea

  $('#textarea').keyup(function()
  {
    //take the length of the number of characters entered in the textarea
    var text_length = $('#textarea').val().length;

    var text_remaining = text_max - text_length;

    $('#textarea_feedback').html(text_remaining + 'characters remaining');
  }
);
}
);
