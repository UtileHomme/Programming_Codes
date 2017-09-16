// This is the conventional way

$('a').mouseenter(function()
{
  $(this).addClass('bold');
}
).mouseleave(function()
{
  $(this).removeClass('bold');
}
);
