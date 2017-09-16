$(document).ready(function()
{
  //this will select the element after the input type (in this case, the submit button)

  //we are trying to disable the upload button here

  //first select the next element and disable it, then run the change function
  $('input[type="file"]').change(function()
  {
      $(this).next().removeAttr('disabled');
  }
).next().attr('disabled','disabled');


}
);
