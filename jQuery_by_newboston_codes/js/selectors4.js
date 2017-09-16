// Here, as soon as we click inside a field, we wish to change some property like color etc.

$(':text').focusin(function()
{
  $(this).css('background-color','yellow');
}
);

$(':text').blur(function()
{
  $(this).css('background-color','white');
}
);
