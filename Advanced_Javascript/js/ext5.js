$(document).ready(function()
{
  $('#file').change(function()
  {
    //this stores the value of the path of the file
    value = $(this).attr('value');

    $('#submit').removeAttr('disabled');

  }
);
}
);
