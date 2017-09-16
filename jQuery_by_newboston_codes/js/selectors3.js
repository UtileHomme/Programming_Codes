// When any button is clicked, we wish to display "Please wait... in the button"

$(':submit').click(function()
{
  //this will only change the text for the button which was selected
  $('this').attr('value', 'Please wait...');
});
