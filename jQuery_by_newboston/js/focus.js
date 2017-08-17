// As soon as we focus on the element, something gets displayed

$('#name').focusin(function()
{
  $('#name_span').html('Enter your full name');
}
);

$('#name').focusout(function()
{
  $('#name_span').html('');
}
);

$('#age').focusin(function()
{
  $('#age_span').html('Enter your full age');
}
);


$('#age').focusout(function()
{
  $('#age_span').html('');
}
);
