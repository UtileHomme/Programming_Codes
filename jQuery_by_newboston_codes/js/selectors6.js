// How to have same event for different elements

$('#button, $paragraph').click(function()
{
  alert('Something was pressed/clicked');
}
);
