$(':text').focusin(function()
{
  $(this).css('background-color','yellow');
}
);

//when we move away from the element, change the bg color to white
$(':text').blur(function()
{
  $(this).css('background-color','white');
}
);

//after the button has been clicked change its attribute value and make it disabled
$(':button').click(function()
{
  $(this).attr('value','Please wait....');
  $(this).attr('disabled',true);
}
);
