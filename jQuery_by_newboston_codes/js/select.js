// Here, we want to display something when the user selects some text

$('#some_text').select(function()
{
  $('#some_feedback').html('Something has been selected');
}
);
