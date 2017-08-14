function change_size(element, size)
{
  //parseInt will only give us the integer value
  var current = parseInt(element.css('font-size'));

  var new_size;
  if(size=='smaller')
  {
    new_size = current - 2;
  }
  else if(size=='bigger')
  {
    new_size = current + 2;
  }

  element.css('font-size', new_size + 'px');
}

$('#smaller').click(function()
{
  change_size($('p'), 'smaller');
}
);

$('#bigger').click(function()
{
  change_size($('p'), 'bigger');
}
);
